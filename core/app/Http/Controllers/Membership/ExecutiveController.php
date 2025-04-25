<?php
namespace App\Http\Controllers\Membership;

use App\Cxo;
use App\Executive;
use App\Http\Controllers\Controller;
use App\Startup;
use App\Volunteer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;
use Razorpay\Api\Api;

class ExecutiveController extends Controller
{
    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|unique:executives,email',
            'password' => 'required|string|min:6|confirmed',
            'phone_number' => 'required',
            'linkedin' => 'required|url',
            'current_name' => 'required',
            'designation' => 'required',
            'industry' => 'required',
            'year_of_experience' => 'required|integer|min:0',
            'company_linkedin' => 'required|url',
            'company_website' => 'required|url',
            'plan' => 'required|string|in:student,volunteer,entrepreneur,startup,executive',
            'type' => 'required|string|in:monthly,yearly',
        ]);

        
        $cxo = Executive::create([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone_number' => $request->phone_number,
            'linkedin' => $request->linkedin,
            'current_name' => $request->current_name,
            'designation' => $request->designation,
            'industry' => $request->industry,
            'year_of_experience' => $request->year_of_experience,
            'company_linkedin' => $request->company_linkedin,
            'company_website' => $request->company_website,
            'plan' => $request->plan,
            'type' => $request->type,
            'payment_status' => 'pending', 
            
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
        return redirect()->route('razorpay.pay', $cxo->id); 
    }
}
