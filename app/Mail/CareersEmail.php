<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class CareersEmail extends Mailable
{
    public $data;
    public $filePath;

    public function __construct($data, $filePath = null)
    {
        $this->data = $data;
        $this->filePath = $filePath;
    }

    public function build()
    {
        $email = $this->subject("Avvanz Careers Form Submission")
                      ->view('emails.careers')
                      ->with('data', $this->data);
        
        // Attach the file if it exists
        if ($this->filePath) {
            $email->attach(storage_path('app/' . $this->filePath));
        }

        return $email;
    }
}
