<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JobApplication;
use Illuminate\Support\Facades\Mail;
use App\Mail\JobApplicationMail;

class JobApplicationController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form input
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:255',
            'college' => 'nullable|string|max:255',
            'qualification' => 'nullable|string|max:255',
            'linkedin' => 'nullable|string|max:255',
            'position' => 'nullable|string|max:255',
        ]);

        // Store the data in the database
        $application = JobApplication::create($data);

        // Send confirmation email
        Mail::to($application->email)->send(new JobApplicationMail($application));

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Your application has been submitted.');
    }
}

