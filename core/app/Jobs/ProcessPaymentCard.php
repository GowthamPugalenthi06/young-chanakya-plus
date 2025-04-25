<?php
namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Intervention\Image\Facades\Image;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Mail\PaymentSuccessMail;

class ProcessPaymentCard implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $user;
    protected $userType;
    protected $amount;

    public function __construct($user, $userType, $amount)
    {
        $this->user = $user;
        $this->userType = $userType;
        $this->amount = $amount;
    }

    public function handle()
    {
        try {
            $templateMap = [
                'volunteer' => public_path('assets/yc/imgs/Volunteer_card.png'),
                'student' => public_path('assets/yc/imgs/Membership_Card.png'),
                'entrepreneur' => public_path('assets/yc/imgs/Entrepreneur.png'),
                'executive' => public_path('assets/yc/imgs/Executive.png'),
                'startup' => public_path('assets/yc/imgs/Startup.png'),
            ];

            $templatePath = $templateMap[$this->userType] ?? public_path('assets/yc/imgs/default.png');
            $image = Image::make($templatePath);

            $filename = Str::slug($this->user->full_name) . '_card.png';
            $cardDir = public_path('assets/yc/imgs/cards/');
            if (!file_exists($cardDir)) {
                mkdir($cardDir, 0755, true);
            }

            $finalImagePath = $cardDir . $filename;
            $image->save($finalImagePath);

            list($width, $height) = getimagesize($finalImagePath);

            $pdfData = [
                'imageUrl' => $finalImagePath,
                'userName' => $this->user->full_name,
                'userType' => $this->user->plan,
                'width' => $width,
                'height' => $height,
            ];

            $pdf = Pdf::loadView('pdf.card', $pdfData);
            $pdf->setPaper([0, 0, $width, $height], 'portrait');
            $pdfFilename = Str::slug($this->user->full_name) . '_card.pdf';
            $pdfPath = $cardDir . $pdfFilename;
            $pdf->save($pdfPath);

            if (!empty($this->user->email)) {
                Mail::to($this->user->email)->send(new PaymentSuccessMail($this->user, $this->amount / 100, $pdfPath));
            }

            Log::info('ProcessPaymentCard job completed for: ' . $this->user->full_name);
        } catch (\Exception $e) {
            Log::error('Error in ProcessPaymentCard: ' . $e->getMessage());
        }
    }
}
    