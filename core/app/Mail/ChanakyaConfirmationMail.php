<?php

namespace App\Mail;

use App\BecomeAChanakya;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ChanakyaConfirmationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $entry;

    public function __construct(BecomeAChanakya $entry)
    {
        $this->entry = $entry;
    }

    public function build()
    {
        return $this->subject('Thanks for Applying!')
                    ->view('emails.chanakya_confirmation');
    }
}