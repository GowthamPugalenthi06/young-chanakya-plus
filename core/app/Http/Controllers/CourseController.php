<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CourseEnrollment;
use Illuminate\Support\Facades\Mail;
use App\Mail\CourseConfirmationMail;

class CourseController extends Controller
{
    public function store(Request $request)
    {
         
        $entry = CourseEnrollment::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'college' => $request->college,
            'linkedin' => $request->linkedin,
            'course' => $request->course,
        ]);


        Mail::to($entry->email)->send(new CourseConfirmationMail($entry));
        return back()->with('success', 'Course enrollmentsubmitted and email sent!');
    }
}