<?php

namespace App\Http\Controllers\Membership;

use App\Http\Controllers\Controller;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;
use Razorpay\Api\Api;

class StudentController extends Controller
{
    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'full_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15',
            'email' => 'required|email|unique:students,email',
            'username' => 'required|string|unique:students,username',
            'password' => 'required|string|confirmed|min:6',
            'dob' => 'nullable|date',
            'current_address' => 'nullable|string|max:500',
            'linkedin' => 'nullable|url',
            'university' => 'nullable|string|max:255',
            'course' => 'nullable|string|max:255',
            'plan' => 'required|string|in:student,volunteer,entrepreneur,startup,executive',
            'type' => 'required|string|in:monthly,yearly',
        ]);

        // Create student record in the database
        $student = Student::create([
            'full_name' => $request->full_name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'dob' => $request->dob ? date('Y-m-d', strtotime($request->dob)) : null,
            'current_address' => $request->current_address,
            'linkedin' => $request->linkedin,
            'university' => $request->university,
            'course' => $request->course,
            'plan' => $request->plan,
            'type' => $request->type,
            'payment_status' => 'pending', // Set initial payment status to 'pending'
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
        return redirect()->route('razorpay.pay', $student->id);
    }


}
