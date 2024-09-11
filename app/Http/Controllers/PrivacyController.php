<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivacyController extends Controller
{
    public function index() {
        return view('pages.privacy.index');
    }

    public function philippines() {
        return view('pages.privacy.philippines');
    }

    public function australia() {
        return view('pages.privacy.australia');
    }

    public function singapore() {
        return view('pages.privacy.singapore');
    }

    public function usa() {
        return view('pages.privacy.usa');
    }

    public function uk() {
        return view('pages.privacy.uk');
    }
}
