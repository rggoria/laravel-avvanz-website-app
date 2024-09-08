<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('pages.about.index');
    }

    public function workplaceSafety()
    {
        return view('pages.about.workplaceSafety');
    }

    public function environmental()
    {
        return view('pages.about.environmental');
    }

    public function careers()
    {
        return view('pages.about.careers');
    }
}
