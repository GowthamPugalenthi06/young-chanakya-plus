<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BecomeASponsor;
use Illuminate\Support\Facades\Mail;
use App\Mail\SponsorConfirmationMail;

class SponsorFormController extends Controller
{
    public function store(Request $request)
    {
        
        $entry = BecomeASponsor::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'company' => $request->company,
            'linkedin' => $request->linkedin,
            'sponsorship_level' => $request->sponsorship_level,
        ]);


        Mail::to($entry->email)->send(new SponsorConfirmationMail($entry));
        return back()->with('success', 'Sponsor Form submitted and email sent!');

    }
}
