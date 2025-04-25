<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\BecomeASponsor;
class SponsorConfirmationMail extends Mailable
{
    use Queueable, SerializesModels;

    
    public $entry;
    public function __construct(BecomeASponsor $entry)
    {
        $this->entry = $entry;
    }
    public function build()
{
    return $this->subject('Thanks for becoming a sponsor!')
                ->view('emails.sponsor_confirmation');
}
    
}
