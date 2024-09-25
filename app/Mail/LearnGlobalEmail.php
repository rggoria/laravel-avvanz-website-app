<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;


class LearnGlobalEmail extends Mailable
{
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->subject("General Inquiry Form Submission")
                    ->view('emails.learnGlobal')
                    ->with('data', $this->data);
    }
}
