<?php

namespace App\Http\Controllers\Leadership;

use App\Http\Controllers\Controller;
use App\Mail\LeadershipEmail;
use Illuminate\Http\Request;
use Mail;
use Validator;

class HomepageController extends Controller
{
    public function index() {
        return view('Leadership.pages.homepage.index');
    }

    public function itinerary() {
        return view('Leadership.pages.homepage.itinerary');
    }

    public function register() {
        return view('Leadership.pages.homepage.register');
    }

    public function registerLeadership(Request $request)
    {
        // Validate the form data
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'company_email' => 'required|email',
            'contact_number' => 'required',
            'consent' => 'required|boolean',
        ], $this->messages());

        // Check if validation fails
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        try {
            // Send the email
            Mail::to($request->company_email)
                ->cc(env('ADMIN_EMAIL'))
                ->send(new LeadershipEmail(
                    $request->name,
                    $request->company_email,
                    $request->contact_number
                ));

            return response()->json(['message' => 'Registration successful! We have sent a confirmation email.'], 200);

        } catch (\Exception $e) {
            return response()->json(['message' => 'An error occurred. Please try again later.'], 500);
        }
    }

    // Custom error messages
    public function messages() {
        return [
            'name.required' => 'The name field is required.',
            'company_email.required' => 'The company email field is required.',
            'contact_number.required' => 'The contact number field is required.',
            'consent.required' => 'You must consent to the processing of your personal data.',
        ];
    }
}
