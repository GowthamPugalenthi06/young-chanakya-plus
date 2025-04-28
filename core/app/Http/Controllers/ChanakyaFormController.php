<?php

namespace App\Http\Controllers;

use App\BecomeAChanakya;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\ChanakyaConfirmationMail;



class ChanakyaFormController extends Controller
{
    public function store(Request $request)
{
    // Temporarily remove validation
    // dd($request->all());

    $entry = BecomeAChanakya::create([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'college' => $request->college,
        'linkedin' => $request->linkedin,
        'interest' => $request->interest,
    ]);

    // dd("Inserted:", $entry); // For testing DB insert

    Mail::to($entry->email)->send(new ChanakyaConfirmationMail($entry));
    return back()->with('success', 'Form submitted and email sent!');
}
}
