<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class RequestEmail extends Mailable
{
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->subject("General Inquiry Form Submission")
                    ->view('emails.request')
                    ->with('data', $this->data);
    }
}
