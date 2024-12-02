<?php

namespace App\Http\Controllers\UATWEB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PrivacyController extends Controller
{
    public function index() {
        return view('UATWEB.pages.privacy.index');
    }

    public function philippines() {
        return view('UATWEB.pages.privacy.philippines');
    }

    public function australia() {
        return view('UATWEB.pages.privacy.australia');
    }

    public function singapore() {
        return view('UATWEB.pages.privacy.singapore');
    }

    public function usa() {
        return view('UATWEB.pages.privacy.usa');
    }

    public function uk() {
        return view('UATWEB.pages.privacy.uk');
    }
}
