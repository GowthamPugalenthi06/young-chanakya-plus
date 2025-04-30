<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use App\JobApplication;

class JobApplicationMail extends Mailable
{
    public $application;

    // Inject the JobApplication model into the mailable
    public function __construct(JobApplication $application)
    {
        $this->application = $application;
    }

    // Build the email content
    public function build()
    {
        return $this->subject('Thanks for Applying!')
                    ->view('emails.job-application')  // The email view
                    ->with([
                        'name' => $this->application->name,
                        'position' => $this->application->position,
                    ]);
    }
}
