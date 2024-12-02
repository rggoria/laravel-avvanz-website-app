<?php

namespace App\Http\Controllers\Leadership;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index() {
        return view('UATWEB.pages.leadership.index');
    }
}
