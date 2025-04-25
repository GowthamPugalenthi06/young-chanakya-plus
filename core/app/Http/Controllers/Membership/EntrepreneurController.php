<?php
namespace App\Http\Controllers\Membership;

use App\Http\Controllers\Controller;
use App\Entrepreneur; // Use the correct model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Session;

class EntrepreneurController extends Controller
{
    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|unique:entrepreneurs,email',
            'password' => 'required|confirmed|min:6',
            'phone_number' => 'required|digits:10',
            'linkedin' => 'required|url',
            'companyname' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'website' => 'required|url',
            'industry' => 'required|string|max:255',
            'annualrevenue' => 'required|string|max:255',
            'noofemployees' => 'required|integer',
            'business' => 'required|string|max:255',
            'plan' => 'required|string|in:student,volunteer,entrepreneur,startup,executive',
            'type' => 'required|string|in:monthly,yearly',

        ]);
        Log::info('Request Data: ' . json_encode($request->all()));

        // Create business record
        $business = Entrepreneur::create([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone_number' => $request->phone_number,
            'linkedin' => $request->linkedin,
            'companyname' => $request->companyname,
            'position' => $request->position,
            'website' => $request->website,
            'industry' => $request->industry,
            'annualrevenue' => $request->annualrevenue,
            'noofemployees' => $request->noofemployees,
            'business' => $request->business,
            'plan' => $request->plan,
            'type' => $request->type,
            'payment_status' => 'pending',
            
        ]);


        Log::info($business);  // This will log the created business model instance


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

        return redirect()->route('razorpay.pay', $business->id);
    }
}
