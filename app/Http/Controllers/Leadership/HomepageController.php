<?php

namespace App\Http\Controllers\Leadership;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index() {
        return view('Leadership.pages.homepage.index');
    }

    public function itinerary() {
        return view('Leadership.pages.homepage.itinerary');
    }
}
