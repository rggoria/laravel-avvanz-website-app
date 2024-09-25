<?php

namespace App\Http\Controllers;

use App\Mail\ContactEmail;
use App\Mail\RequestEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        $globalItems = [
            [
                'country' => 'United Kingdom',
                'company' => 'Avvanz Limited',
                'address' => '27 Old Gloucester Street, London, WC1N 3AX',
                'contact' => '+442045873877',
                'geolocation' => 'https://maps.google.com/maps?q=27%20Old%20Gloucester%20St%2C%20London%20WC1N%203AX%2C%20UK&t=m&z=15&output=embed&iwloc=near',
            ],
            [
                'country' => 'USA',
                'company' => 'Avvanz LLC',
                'address' => '1850 Mountain Boulevard, Oakland, California 94611 , United States of America',
                'contact' => '+12107143514',
                'geolocation' => 'https://maps.google.com/maps?q=1850%20Mountain%20Boulevard%2C%20Oakland%2C%20California%2094611%20%2C%20United%20States%20of%20America&t=m&z=15&output=embed&iwloc=near',
            ],
            [
                'country' => 'Singapore',
                'company' => 'Avvanz Pte Ltd',
                'address' => '1 Wallich St, #14-01 Guoco Tower , Singapore 078881',
                'contact' => '+65-31652775',
                'geolocation' => 'https://maps.google.com/maps?q=1%20Wallich%20St%2C%20Guoco%20Tower%2C%20Singapore%20078881&t=m&z=15&output=embed&iwloc=near',
            ],
            [
                'country' => 'Australia & NZ',
                'company' => 'Avvanz Pty Ltd',
                'address' => 'L 3 85 William St Darlinghurst NSW 2010',
                'contact' => '+61-290991689',
                'geolocation' => 'https://maps.google.com/maps?q=William%20St%20Darlinghurst%20NSW%202010&t=m&z=15&output=embed&iwloc=near',
            ],
            [
                'country' => 'Philippines',
                'company' => 'Avvanz Inc.',
                'address' => '31st Floor, Virspacio Coworkspaces, One San Miguel Avenue Building, San Miguel Avenue, corner Shaw Blvd, Ortigas Center, Pasig, Metro Manila',
                'contact' => '+63-28-876-1993',
                'geolocation' => 'https://maps.google.com/maps?q=31st%20Floor%2C%20Virspacio%20Coworkspaces%2C%20One%20San%20Miguel%20Avenue%20Building%2C%20San%20Miguel%20Avenue%20corner%2C%20Shaw%20Blvd%20Ortigas%20Center%2C%20Pasig%20City&t=m&z=15&output=embed&iwloc=near',
            ],
            [
                'country' => 'India',
                'company' => 'Avvanz India Pvt Ltd',
                'address' => 'Bridge+, 2nd Floor, Park Square Mall, ITPB, Whitefield, Bangalore – 560066.',
                'contact' => '',
                'geolocation' => 'https://maps.google.com/maps?q=Bridge%2B%2C%202nd%20Floor%2C%20Park%20Square%20Mall%2C%20ITPB%2C%20Whitefield%2C%20Bangalore%20%E2%80%93%20560066.&t=m&z=15&output=embed&iwloc=near',
            ],
        ];
        return view("pages.contact.index", [
            'globalItems' => $globalItems,
        ]);
    }

    public function send(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'cname' => 'required',
            'email' => 'required|email',
            'contact' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ], $this->messages());

        Mail::to($request->email)
            ->cc(env('ADMIN_EMAIL'))
            ->send(new ContactEmail($request->all()));

        return response()->json(['success' => 'Email sent successfully!']);
    }

    public function messages() {
        return [
            'cname' => 'The company name field is required.',
            'email' => 'The company email field is required.',
            'contact' => 'The company contact no. field is required.',
        ];
    }

    public function request() {
        $globalItems = [
            [
                'country' => 'United Kingdom',
                'company' => 'Avvanz Limited',
                'address' => '27 Old Gloucester Street, London, WC1N 3AX',
                'contact' => '+442045873877',
                'geolocation' => 'https://maps.google.com/maps?q=27%20Old%20Gloucester%20St%2C%20London%20WC1N%203AX%2C%20UK&t=m&z=15&output=embed&iwloc=near',
            ],
            [
                'country' => 'USA',
                'company' => 'Avvanz LLC',
                'address' => '1850 Mountain Boulevard, Oakland, California 94611 , United States of America',
                'contact' => '+12107143514',
                'geolocation' => 'https://maps.google.com/maps?q=1850%20Mountain%20Boulevard%2C%20Oakland%2C%20California%2094611%20%2C%20United%20States%20of%20America&t=m&z=15&output=embed&iwloc=near',
            ],
            [
                'country' => 'Singapore',
                'company' => 'Avvanz Pte Ltd',
                'address' => '1 Wallich St, #14-01 Guoco Tower , Singapore 078881',
                'contact' => '+65-31652775',
                'geolocation' => 'https://maps.google.com/maps?q=1%20Wallich%20St%2C%20Guoco%20Tower%2C%20Singapore%20078881&t=m&z=15&output=embed&iwloc=near',
            ],
            [
                'country' => 'Australia & NZ',
                'company' => 'Avvanz Pty Ltd',
                'address' => 'L 3 85 William St Darlinghurst NSW 2010',
                'contact' => '+61-290991689',
                'geolocation' => 'https://maps.google.com/maps?q=William%20St%20Darlinghurst%20NSW%202010&t=m&z=15&output=embed&iwloc=near',
            ],
            [
                'country' => 'Philippines',
                'company' => 'Avvanz Inc.',
                'address' => '31st Floor, Virspacio Coworkspaces, One San Miguel Avenue Building, San Miguel Avenue, corner Shaw Blvd, Ortigas Center, Pasig, Metro Manila',
                'contact' => '+63-28-876-1993',
                'geolocation' => 'https://maps.google.com/maps?q=31st%20Floor%2C%20Virspacio%20Coworkspaces%2C%20One%20San%20Miguel%20Avenue%20Building%2C%20San%20Miguel%20Avenue%20corner%2C%20Shaw%20Blvd%20Ortigas%20Center%2C%20Pasig%20City&t=m&z=15&output=embed&iwloc=near',
            ],
            [
                'country' => 'India',
                'company' => 'Avvanz India Pvt Ltd',
                'address' => 'Bridge+, 2nd Floor, Park Square Mall, ITPB, Whitefield, Bangalore – 560066.',
                'contact' => '',
                'geolocation' => 'https://maps.google.com/maps?q=Bridge%2B%2C%202nd%20Floor%2C%20Park%20Square%20Mall%2C%20ITPB%2C%20Whitefield%2C%20Bangalore%20%E2%80%93%20560066.&t=m&z=15&output=embed&iwloc=near',
            ],
        ];
        return view("pages.contact.request", [
            'globalItems' => $globalItems,
        ]);
    }

    public function requestSend(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'cname' => 'required',
            'email' => 'required|email',
            'contact' => 'required',
            'designation' => 'required',
            'country' => 'required',
            'about' => 'required|array|min:1',
        ], $this->messages());

        Mail::to($request->email)
            ->cc(env('ADMIN_EMAIL'))
            ->send(new RequestEmail($request->all()));

        return response()->json(['success' => 'Email sent successfully!']);
    }
}