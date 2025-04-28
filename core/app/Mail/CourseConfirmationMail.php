<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\CourseEnrollment;

class CourseConfirmationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $entry;

    public function __construct(CourseEnrollment $entry)
    {
        $this->entry = $entry;
    }

    public function build()
    {
        return $this->subject('Course Enrollment Confirmation')
                    ->view('emails.course-confirmation');
    }
}