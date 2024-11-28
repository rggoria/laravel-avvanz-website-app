<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeadershipController extends Controller
{
    public function index() {
        return view('pages.leadership.index');
    }

    public function signup() {
        return view('pages.leadership.signup');
    }
}
