<?php

namespace App\Http\Controllers\Admin;

use App\BasicExtra;
use App\Event;
use App\EventUpload;
use App\EventCategory;
use Illuminate\Support\Str;
use App\EventDetail;
use Illuminate\Support\Facades\Storage;
use App\Exports\EventBookingExport;
use App\Language;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Front\EventController as FrontEventController;
use App\Megamenu;
use App\OfflineGateway;
use App\PaymentGateway;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use Validator;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return
     */
    public function index(Request $request)
    {
        $lang = Language::where('code', $request->language)->first();
        $lang_id = $lang->id;
        $data['lang_id'] = $lang_id;
        $data['abx'] = $lang->basic_extra;
        $data['events'] = EventUpload::where('lang_id', $lang_id)->orderBy('id', 'DESC')->get();
        $data['event_categories'] = EventCategory::where('lang_id', $lang_id)->where('status', '1')->get();
        return view('admin.event.event.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    try {
        // Define validation rules
        $rules = [
            'title' => [
                'required',
                'max:255',
                'unique:event_uploads,slug',
            ],
            'date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:date',
            'time' => 'required',
            'end_time' => 'required',
            'cost' => 'required|numeric|min:0',
            'available_tickets' => 'required|integer|min:1',
            'venue' => 'required|string',
            'lang_id' => 'required|exists:languages,id',
            'cat_id' => 'required|exists:event_categories,id',
            'slider' => 'nullable|string', // Optional, comma-separated URLs or paths
            'content' => 'nullable|string',
            'meta_tags' => 'nullable|string',
            'meta_description' => 'nullable|string',
        ];

        $messages = [
            'title.required' => 'The title field is required',
            'title.unique' => 'The title must be unique',
            'date.required' => 'The date field is required',
            'end_date.after_or_equal' => 'The end date must be on or after the start date',
            'time.required' => 'The time field is required',
            'end_time.required' => 'The end time field is required',
            'cost.required' => 'The cost field is required',
            'available_tickets.required' => 'Number of tickets field is required',
            'venue.required' => 'The venue field is required',
            'lang_id.required' => 'The language field is required',
            'lang_id.exists' => 'The selected language is invalid',
            'cat_id.required' => 'The category field is required',
            'cat_id.exists' => 'The selected category is invalid',
        ];

        // Validate the request
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors(),
            ], 422);
        }

        // Process slider images
        $images = [];
        $allowedExts = ['jpg', 'png', 'jpeg'];
        if ($request->filled('slider')) {
            $sliders = array_filter(explode(',', $request->slider)); // Remove empty entries
            $directory = 'front/img/events/sliders'; // Relative to storage/app/public

            foreach ($sliders as $slider) {
                // Convert URL to local path if necessary
                $sliderPath = str_replace(url('/'), public_path(), trim($slider));
                if (!file_exists($sliderPath)) {
                    // If it's a URL, try downloading it
                    try {
                        $contents = file_get_contents($slider);
                        if ($contents === false) {
                            return response()->json([
                                'status' => 'error',
                                'errors' => ['slider' => 'Unable to access image: ' . $slider],
                            ], 422);
                        }
                        $ext = strtolower(pathinfo($slider, PATHINFO_EXTENSION));
                        if (!in_array($ext, $allowedExts)) {
                            return response()->json([
                                'status' => 'error',
                                'errors' => ['slider' => 'Only jpg, png, jpeg images are allowed'],
                            ], 422);
                        }
                        $filename = uniqid() . '.' . $ext;
                        Storage::disk('public')->put($directory . '/' . $filename, $contents);
                    } catch (\Exception $e) {
                        return response()->json([
                            'status' => 'error',
                            'errors' => ['slider' => 'Failed to process image: ' . $slider],
                        ], 422);
                    }
                } else {
                    // Local file exists, copy it
                    $ext = strtolower(pathinfo($sliderPath, PATHINFO_EXTENSION));
                    if (!in_array($ext, $allowedExts)) {
                        return response()->json([
                            'status' => 'error',
                            'errors' => ['slider' => 'Only jpg, png, jpeg images are allowed'],
                        ], 422);
                    }
                    $filename = uniqid() . '.' . $ext;
                    $destination = $directory . '/' . $filename;
                    Storage::disk('public')->makeDirectory($directory);
                    if (!Storage::disk('public')->put($destination, file_get_contents($sliderPath))) {
                        return response()->json([
                            'status' => 'error',
                            'errors' => ['slider' => 'Failed to save slider image: ' . $filename],
                        ], 500);
                    }
                }
                $images[] = $filename;
            }
        }

        // Create the event
        $event = EventUpload::create([
            'title' => $request->title,
            'slug' => make_slug($request->title),
            'content' => $request->content ? Str::replace(
                url('/') . '/assets/front/img/',
                '{base_url}/assets/front/img/',
                $request->content
            ) : null,
            'date' => $request->date,
            'end_date' => $request->end_date,
            'time' => $request->time,
            'end_time' => $request->end_time,
            'cost' => $request->cost,
            'available_tickets' => $request->available_tickets,
            'venue' => $request->venue,
            'meta_tags' => $request->meta_tags,
            'meta_description' => $request->meta_description,
            'image' => !empty($images) ? json_encode($images) : null,
            'lang_id' => $request->lang_id,
            'cat_id' => $request->cat_id,
        ]);

        // Flash success message
        Session::flash('success', 'Event added successfully!');

        // Return JSON response
        return response()->json([
            'status' => 'success',
            'message' => 'Event added successfully!',
        ], 200);
    } catch (\Exception $e) {
        // Log the error
        Log::error('Event creation failed: ' . $e->getMessage(), ['exception' => $e]);

        // Return error response
        return response()->json([
            'status' => 'error',
            'message' => 'Failed to create event',
            'details' => $e->getMessage(),
        ], 500);
    }
}

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return
     */
    public function edit($id)
    {
        $data['event'] = EventUpload::findOrFail($id);
        $data['event_categories'] = EventCategory::where('lang_id', $data['event']->lang_id)->where('status', '1')->get();
        $data['abx'] = BasicExtra::select('base_currency_text')->where('language_id', $data['event']->lang_id)->first();
        return view('admin.event.event.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // Determine the current language
        if (session()->has('lang')) {
            $currentLang = Language::where('code', session()->get('lang'))->first();
        } else {
            $currentLang = Language::where('is_default', 1)->first();
        }
    
        $slug = make_slug($request->title);
        $eventId = $request->event_id;
        $sliders = !empty($request->slider) ? explode(',', $request->slider) : [];
        $allowedExts = array('jpg', 'png', 'jpeg');
    
        // Validation rules
        $rules = [
            'slider' => 'required',
            'title' => [
                'required',
                'max:255',
                function ($attribute, $value, $fail) use ($slug, $eventId) {
                    $events = EventUpload::all();
                    foreach ($events as $event) {
                        if ($event->id != $eventId && strtolower($slug) == strtolower($event->slug)) {
                            $fail('The title field must be unique.');
                        }
                    }
                }
            ],
            'date' => 'required',
            'time' => 'required',
            'cost' => 'required',
            'available_tickets' => 'required',
            'venue' => 'required',
            'cat_id' => [
                'required',
                function ($attribute, $value, $fail) use ($currentLang) {
                    // Ensure the selected category belongs to the current language
                    $category = EventCategory::where('id', $value)
                        ->where('lang_id', $currentLang->id)
                        ->where('status', 1)
                        ->first();
                    if (!$category) {
                        $fail('The selected category is invalid or not available for the current language.');
                    }
                }
            ],
        ];
    
        // Validate slider images
        if ($request->filled('slider')) {
            $rules['slider'] = [
                function ($attribute, $value, $fail) use ($sliders, $allowedExts) {
                    foreach ($sliders as $slider) {
                        $extSlider = pathinfo($slider, PATHINFO_EXTENSION);
                        if (!in_array(strtolower($extSlider), $allowedExts)) {
                            return $fail("Only png, jpg, jpeg images are allowed");
                        }
                    }
                }
            ];
        }
    
        // Custom error messages
        $messages = [
            'title.required' => 'The title field is required',
            'date.required' => 'The date field is required',
            'time.required' => 'The time field is required',
            'cost.required' => 'The cost field is required',
            'available_tickets.required' => 'Number of tickets field is required',
            'organizer.required' => 'The organizer name field is required',
            'venue.required' => 'The venue field is required',
            'cat_id.required' => 'The category field is required'
        ];
    
        // Validate the request
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return response()->json($validator->errors()->add('error', 'true'));
        }
    
        // Find the event to update
        $event = EventUpload::findOrFail($request->event_id);
    
        // Ensure the event belongs to the current language
        if ($event->lang_id != $currentLang->id) {
            return response()->json(['error' => 'true', 'message' => 'This event does not belong to the current language.']);
        }
    
        // Update event data
        $event->update($request->except('image', 'slider', 'content') + [
            'slug' => $slug,
            'content' => str_replace(url('/') . '/assets/front/img/', "{base_url}/assets/front/img/", $request->content),
            'lang_id' => $currentLang->id, // Ensure lang_id is set
        ]);
    
        // Handle slider images
        $fileNames = [];
        foreach ($sliders as $slider) {
            $extSlider = pathinfo($slider, PATHINFO_EXTENSION);
            $filename = uniqid() . '.' . $extSlider;
            @copy($slider, 'assets/front/img/events/sliders/' . $filename);
            $fileNames[] = $filename;
        }
    
        // Delete old slider images
        $preImages = json_decode($event->image, true);
        if (is_array($preImages)) {
            foreach ($preImages as $pi) {
                @unlink('assets/front/img/events/sliders/' . $pi);
            }
        }
    
        // Save new slider images
        $event->image = json_encode($fileNames);
        $event->save();
    
        Session::flash('success', 'Event updated successfully!');
        return "success";
    }


    public function uploadUpdate(Request $request, $id)
    {
        $rules = [
            'file' => 'required | mimes:jpeg,jpg,png',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            $validator->getMessageBag()->add('error', 'true');
            return response()->json(['errors' => $validator->errors(), 'id' => 'blog']);
        }
        $img = $request->file('file');
        $event = EventUpload::findOrFail($id);
        if ($request->hasFile('file')) {
            $filename = time() . '.' . $img->getClientOriginalExtension();
            $request->file('file')->move('assets/front/img/events/', $filename);
            @unlink('assets/front/img/events/' . $event->image);
            $event->image = $filename;
            $event->save();
        }

        return response()->json(['status' => "success", "image" => "Event image", 'event' => $event]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getCategories($lang_id)
    {
        return EventCategory::where('lang_id', $lang_id)->where('status', '1')->get();
    }

    public function upload(Request $request)
    {
        $rules = ['upload_video' => 'mimes:mp4|required'];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            $validator->getMessageBag()->add('error', 'true');
            return response()->json(['errors' => $validator->errors(), 'id' => 'blog']);
        }
        $img = $request->file('upload_video');
        $filename = uniqid("event-") . '.' . $img->getClientOriginalExtension();
        //if directory not exist than create directory with permission
        $directory = "assets/front/img/events/videos/";
        if (!file_exists($directory)) mkdir($directory, 0777, true);
        $img->move($directory, $filename);
        return response()->json(['filename' => $filename, 'status' => 200]);
    }

    public function sliderRemove(Request $request)
    {
        $event = EventUpload::findOrFail($request->id);
        $images = json_decode($event->image, true);
        @unlink('assets/front/img/events/sliders/' . $images["$request->key"]);
        unset($images["$request->key"]);
        $newImages = array_values($images);
        $event->image = json_encode($newImages);
        $event->save();
        return response()->json(['status' => 200, 'message' => 'success']);
    }

    public function deleteFromMegaMenu($event) {
        // unset service from megamenu for service_category = 1
        $megamenu = Megamenu::where('language_id', $event->lang_id)->where('category', 1)->where('type', 'events');
        if ($megamenu->count() > 0) {
            $megamenu = $megamenu->first();
            $menus = json_decode($megamenu->menus, true);
            $catId = $event->eventCategories->id;
            if (is_array($menus) && array_key_exists("$catId", $menus)) {
                if (in_array($event->id, $menus["$catId"])) {
                    $index = array_search($event->id, $menus["$catId"]);
                    unset($menus["$catId"]["$index"]);
                    $menus["$catId"] = array_values($menus["$catId"]);
                    if (count($menus["$catId"]) == 0) {
                        unset($menus["$catId"]);
                    }
                    $megamenu->menus = json_encode($menus);
                    $megamenu->save();
                }
            }
        }
    }

    public function delete(Request $request)
    {
        $event = EventUpload::findOrFail($request->event_id);
        $images = json_decode($event->image, true);
        if (count($images) > 0) {
            foreach ($images as $image) {
                $directory = 'assets/front/img/events/sliders/' . $image;
                if (file_exists($directory)) {
                    @unlink($directory);
                }
            }
        }
        if (!is_null($event->video)) {
            $directory = "assets/front/img/events/videos/" . $event->video;
            if (file_exists($directory)) {
                @unlink($directory);
            }
        }
        $event_details = EventDetail::query()->where('event_id',$event->id)->get();
        foreach ($event_details as $event_detail){
            if(!is_null($event_detail->receipt)){
                $directory = "assets/front/img/events/receipt/".$event_detail->receipt;
                if (file_exists($directory)) {
                    @unlink($directory);
                }
            }
            $event_detail->delete();
        }

        $this->deleteFromMegaMenu($event);
        $event->delete();

        Session::flash('success', 'Event deleted successfully!');
        return back();
    }

    public function bulkDelete(Request $request)
    {
        return DB::transaction(function () use ($request) {
            $ids = $request->ids;
            foreach ($ids as $id) {
                $event = EventUpload::findOrFail($id);
                $images = json_decode($event->image, true);
                if (count($images) > 0) {
                    foreach ($images as $image) {
                        $directory = 'assets/front/img/events/sliders/' . $image;
                        if (file_exists($directory)) {
                            @unlink($directory);
                        }
                    }
                }
                if (!is_null($event->video)) {
                    $directory = "assets/front/img/events/videos/" . $event->video;
                    if (file_exists($directory)) {
                        @unlink($directory);
                    }
                }
                $event_details = EventDetail::where('event_id',$event->id)->get();
                foreach ($event_details as $event_detail){
                    if(!is_null($event_detail->receipt)){
                        $directory = "assets/front/img/events/receipt/".$event_detail->receipt;
                        if (file_exists($directory)) {
                            @unlink($directory);
                        }
                    }
                    $event_detail->delete();
                }

                $this->deleteFromMegaMenu($event);
                $event->delete();

            }
            Session::flash('success', 'Events deleted successfully!');
            return "success";
        });
    }

    public function paymentLog(Request $request)
    {
        $search = $request->search;
        $data['events'] = EventDetail::when($search, function ($query, $search) {
            return $query->where('transaction_id', $search);
        })
            ->orderBy('id', 'DESC')
            ->paginate(10);
        return view('admin.event.payment.index', $data);
    }

    public function paymentLogDelete(Request $request) {
        $payment = EventDetail::findOrFail($request->payment_id);
        @unlink('assets/front/img/events/receipt', $payment->receipt);
        $payment->delete();

        $request->session()->flash('success', 'Payment deleted successfully!');
        return back();
    }


    public function paymentLogBulkDelete(Request $request)
    {
        $ids = $request->ids;

        foreach ($ids as $id) {
            $payment = EventDetail::findOrFail($id);
            @unlink('assets/front/img/events/receipt', $payment->receipt);
            $payment->delete();
        }

        Session::flash('success', 'Payments deleted successfully!');
        return "success";
    }

    public function paymentLogUpdate(Request $request)
    {
        $currentLang = session()->has('lang') ?
            (Language::where('code', session()->get('lang'))->first())
            : (Language::where('is_default', 1)->first());
        $be = $currentLang->basic_extended;
        if ($request->status == "success") {
            $event_details = EventDetail::query()
                ->findOrFail($request->id);
            if ($event_details->status == "Rejected") {
                $event = EventUpload::query()->findOrFail($event_details->event_id);
                $event->available_tickets = $event->available_tickets - $event_details->quantity;
                $event->save();
            }
            $event_details->status = "Success";
            $event_details->save();
            $event = new FrontEventController;
            $fileName = $event->makeInvoice($event_details);
            $request['name'] = $event_details->name;
            $request['email'] = $event_details->email;
            $event->sendMailPHPMailer($request, $fileName, $be);
            Session::flash('success', 'Event payment updated successfully!');
        } elseif ($request->status == "rejected") {
            $event_details = EventDetail::query()->findOrFail($request->id);
            $event_details->status = "Rejected";
            $event_details->save();
            $event = EventUpload::query()->findOrFail($event_details->event_id);
            $event->available_tickets = $event->available_tickets + $event_details->quantity;
            $event->save();
            Session::flash('success', 'Event payment rejected successfully!');
        } else {
            $event_details = EventDetail::query()
                ->findOrFail($request->id)
                ->update(['status' => 'Pending']);
            Session::flash('success', 'Event payment to pending successfully!');
        }

        $sub = "Ticket Booking Status Changed";
        if (!empty($event_details->email)) {
            // Send Mail to Customer
            $mail = new PHPMailer(true);
            if ($be->is_smtp == 1) {
                try {
                    $mail->isSMTP();
                    $mail->Host       = $be->smtp_host;
                    $mail->SMTPAuth   = true;
                    $mail->Username   = $be->smtp_username;
                    $mail->Password   = $be->smtp_password;
                    $mail->SMTPSecure = $be->encryption;
                    $mail->Port       = $be->smtp_port;

                    //Recipients
                    $mail->setFrom($be->from_mail, $be->from_name);
                    $mail->addAddress($event_details->email, $event_details->name);

                    // Content
                    $mail->isHTML(true);
                    $mail->Subject = $sub;
                    $mail->Body    = 'Hello <strong>' . $event_details->name . '</strong>,<br/><br>Your ticket booking status of <strong>' . $event_details->event->title . '</strong> is changed to: <strong>'.ucfirst($request->status).'</strong>.<br/><br>Thank you.';
                    $mail->send();
                } catch (Exception $e) {
                    // die($e->getMessage());
                }
            } else {
                try {

                    //Recipients
                    $mail->setFrom($be->from_mail, $be->from_name);
                    $mail->addAddress($event_details->email, $event_details->name);

                    // Content
                    $mail->isHTML(true);
                    $mail->Subject = $sub ;
                    $mail->Body    = 'Hello <strong>' . $event_details->name . '</strong>,<br/><br>Your ticket booking status of <strong>' . $event_details->event->title . '</strong> is changed to: <strong>'.ucfirst($request->status).'</strong>.<br/><br>Thank you.';
                    $mail->send();
                } catch (Exception $e) {
                    // die($e->getMessage());
                }
            }
        }
        return redirect()->route('admin.event.payment.log');
    }

    public function settings() {
        $data['abex'] = BasicExtra::first();
        return view('admin.event.settings', $data);
    }

    public function updateSettings(Request $request) {
        $bexs = BasicExtra::all();
        foreach($bexs as $bex) {
            $bex->event_guest_checkout = $request->event_guest_checkout;
            $bex->is_event = $request->is_event;
            $bex->save();
        }

        $request->session()->flash('success', 'Settings updated successfully!');
        return back();
    }

    public function images($eventid)
    {
        $event = EventUpload::find($eventid);
        $images = json_decode($event->image, true);
        $convImages = [];

        foreach ($images as $key => $image) {
            $convImages[] = url("assets/front/img/events/sliders/$image");
        }

        return $convImages;
    }

    public function report(Request $request) {
        $fromDate = $request->from_date;
        $toDate = $request->to_date;
        $status = $request->status;
        $paymentMethod = $request->payment_method;

        if (!empty($fromDate) && !empty($toDate)) {
            $bookings = EventDetail::when($fromDate, function ($query, $fromDate) {
                return $query->whereDate('created_at', '>=', Carbon::parse($fromDate));
            })->when($toDate, function ($query, $toDate) {
                return $query->whereDate('created_at', '<=', Carbon::parse($toDate));
            })->when($paymentMethod, function ($query, $paymentMethod) {
                return $query->where('payment_method', $paymentMethod);
            })->when($status, function ($query, $status) {
                return $query->where('status', $status);
            })->select('transaction_id','event_id','name','email','phone','amount', 'quantity','payment_method','status','created_at')->orderBy('id', 'DESC');
            Session::put('event_booking_report', $bookings->get());
            $data['bookings'] = $bookings->paginate(10);
        } else {
            Session::put('event_booking_report', []);
            $data['bookings'] = [];
        }

        $data['onPms'] = PaymentGateway::where('status', 1)->get();
        $data['offPms'] = OfflineGateway::where('event_checkout_status', 1)->get();


        return view('admin.event.report', $data);
    }

    public function exportReport() {
        $bookings = Session::get('event_booking_report');
        if (empty($bookings) || count($bookings) == 0) {
            Session::flash('warning', 'There are no bookings to export');
            return back();
        }
        return Excel::download(new EventBookingExport($bookings), 'event-bookings.csv');
    }
}
