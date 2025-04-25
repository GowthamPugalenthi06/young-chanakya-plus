<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PaymentSuccessMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $amount;
    public $pdfPath;

    public function __construct($user, $amount, $pdfPath)
    {
        $this->user = $user;
        $this->amount = $amount;
        $this->pdfPath = $pdfPath;
    }

    public function build()
    {
        
        return $this->subject('Payment Successful - Young Chanakya Membership')
                    ->view('emails.payment-success')
                    ->attach($this->pdfPath, [
                        'as' => 'membership_card.pdf',
                        'mime' => 'application/pdf',
                    ]);
    }
}
