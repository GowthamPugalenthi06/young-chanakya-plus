<?php

namespace App\Http\Controllers\Membership;
use App\Jobs\ProcessPaymentCard;
use App\Entrepreneur;
use App\Executive;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Intervention\Image\Facades\Image;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;

use Razorpay\Api\Api;
use App\Mail\PaymentSuccessMail;
use Dompdf\Dompdf;
use Dompdf\Options;

use App\Student;
use App\Volunteer;

use App\Startup;


class RazorpayController extends Controller
{
    public function payWithRazorpay($studentId)
{
    // Fetch user based on ID (check each user type)
    $student = Student::find($studentId);
    $volunteer = Volunteer::find($studentId);
    $business = Entrepreneur::find($studentId);
    $startup = Startup::find($studentId);
    $cxo = Executive::find($studentId);

    if (!$student && !$volunteer && !$business && !$startup && !$cxo) {
        return abort(404, 'User not found');
    }

    $user = $student ?? $volunteer ?? $business ?? $startup ?? $cxo;
    $userType = strtolower(class_basename($user));

    // Get the 'type' from database (not request!)
    $type = $user->type ?? 'monthly'; // fallback to monthly if type not set

    // Prices
    $planPricesMonthly = [
        'student' => 499,
        'volunteer' => 699,
        'entrepreneur' => 1999,
        'startup' => 999,
        'executive' => 4999,
    ];

    $planPricesYearly = [
        'student' => 499 * 12,
        'volunteer' => 699 * 12,
        'entrepreneur' => 1999 * 12,
        'startup' => 999 * 12,
        'executive' => 4999 * 12,
    ];

    // Choose price based on DB value
    $amount = ($type == 'yearly') ? ($planPricesYearly[$userType] ?? 999 * 12) : ($planPricesMonthly[$userType] ?? 999);

    $key = env('RAZORPAY_KEY');

    return view('razorpay.index', compact('user', 'amount', 'key', 'userType', 'type'));
}

    



    public function success()
    {
        return view('razorpay.success');
    }

    public function failed()
    {
        return view('razorpay.failed');
    }
    public function payment(Request $request)
{
    $key = env('RAZORPAY_KEY');
    $secret = env('RAZORPAY_SECRET');
    $api = new Api($key, $secret);

    if (!$request->has('razorpay_payment_id')) {
        Log::error('Missing razorpay_payment_id');
        return redirect()->route('payment.failed')->with('error', 'Payment ID missing.');
    }

    try {
        $payment = $api->payment->fetch($request->razorpay_payment_id);
        Log::info('Fetched Razorpay Payment', (array) $payment);

        if (in_array($payment->status, ['authorized', 'captured'])) {
            $payment->capture(['amount' => $payment->amount]);
            Log::info('Payment captured: ' . $payment->status);

            $userType = $request->input('user_type');
            $userId = $request->input('user_id');

            $modelClass = 'App\\' . ucfirst($userType);
            $user = $modelClass::findOrFail($userId);
            $user->update(['payment_status' => 'paid']);

            // Dispatch heavy work to a queue
            ProcessPaymentCard::dispatch($user, $userType, $payment->amount);

            return redirect()->route('payment.success')->with('success', 'Payment Successful! You will receive your card soon.');
        } else {
            Log::warning('Unexpected Razorpay status: ' . $payment->status);
        }
    } catch (\Exception $e) {
        Log::error('Payment Exception: ' . $e->getMessage());
        return redirect()->route('payment.failed')->with('error', $e->getMessage());
    }

    return redirect()->route('payment.failed')->with('error', 'Payment was not successful.');
}



}

