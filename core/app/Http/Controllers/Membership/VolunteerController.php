<?php
namespace App\Http\Controllers\Membership;

use App\Http\Controllers\Controller;
use App\Volunteer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;
use Razorpay\Api\Api;

class VolunteerController extends Controller
{
    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'full_name' => 'required|string|max:255',
            'dob' => 'required|date',
            'gender' => 'required|string',
            'email' => 'required|email|unique:volunteers,email', // Corrected table
            'password' => 'required|string|min:6|confirmed',
            'phone_number' => 'required|digits:10',
            'current_address' => 'required|string',
            'linkedin' => 'nullable|url',
            'organization' => 'required|string',
            'plan' => 'required|string|in:student,volunteer,entrepreneur,startup,executive',
            'type' => 'required|string|in:monthly,yearly',
        ]);

        // Create volunteer record in the database
        $volunteer = Volunteer::create([
            'full_name' => $request->full_name,
            'gender' => $request->gender,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone_number' => $request->phone_number,
            'dob' => $request->dob,
            'current_address' => $request->current_address,
            'linkedin' => $request->linkedin,
            'plan' => $request->plan,
            'organization' => $request->organization, 
            'payment_status' => 'pending', // Set initial payment status to 'pending'
            'type' => $request->type,
        ]);

        // Plan amounts
        $plans = [
            'student' => 499,
            'volunteer' => 699,
            'entrepreneur' => 4999,
            'startup' => 899,
            'executive' => 1999,
        ];
    
        // Get selected plan and amount from request
        $plan = strtolower($request->plan);
        
        // Check if 'type' is set in the request, if not default to 'monthly'
        $type = $request->type ?? 'monthly';
    
        // Set the base amount for the selected plan
        $amount = $plans[$plan] ?? 0;
    
        // If the plan is yearly, multiply the monthly price by 12
        if ($type == 'yearly') {
            $amount *= 12;
        }
    
        // Store the selected plan and amount in the session
        Session::put('selected_plan', $plan);
        Session::put('selected_amount', $amount);
        Session::put('selected_type', $type);

        // Redirect to Razorpay payment page
        return redirect()->route('razorpay.pay', $volunteer->id); 
    }
}
