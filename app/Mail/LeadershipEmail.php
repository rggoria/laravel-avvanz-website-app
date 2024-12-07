<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;


class LeadershipEmail extends Mailable
{
    public $name;
    public $company_email;
    public $contact_number;

    // Constructor to accept form data
    public function __construct($name, $company_email, $contact_number)
    {
        $this->name = $name;
        $this->company_email = $company_email;
        $this->contact_number = $contact_number;
    }

    // Build the email message
    public function build()
    {
        return $this->view('emails.leadershipRegistration')
                    ->subject('Leadership Training Registration Form')
                    ->with([
                        'name' => $this->name, 
                        'company_email' => $this->company_email, 
                        'contact_number' => $this->contact_number
                    ]);
    }
}
