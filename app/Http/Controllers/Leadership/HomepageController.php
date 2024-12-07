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
        {
            $request->validate([
                'name' => 'required',
                'company_email' => 'required',
                'contact_number' => 'required',
                'consent' => 'required|boolean',
            ], $this->messages());
    
            Mail::to($request->company_email)
                ->cc(env('ADMIN_EMAIL'))
                ->send(new LeadershipEmail(
                    $request->name,
                    $request->company_email,
                    $request->contact_number
                ));
    
            return redirect()->route('leadership-register')->with('success', 'Email sent successfully!');
        }
    }

    public function messages() {
        return [
            'name.required' => 'The name field is required.',
            'company_email.required' => 'The company email field is required.',
            'contact_number.required' => 'The contact number field is required.',
            'consent.required' => 'You must consent to the processing of your personal data.',
        ];
    }
}
