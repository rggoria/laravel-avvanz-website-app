<?php

namespace App\Http\Controllers\Leadership;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signup() {
        return view('Leadership.pages.auth.signup');
    }
    public function signup1() {
        return view('Leadership.pages.auth.signup-1');
    }
}
