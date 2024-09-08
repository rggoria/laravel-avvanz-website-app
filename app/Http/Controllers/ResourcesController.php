<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResourcesController extends Controller
{
    public function blog()
    {
        return view("pages.resources.blog");
    }

    public function industry()
    {
        return view("pages.resources.industry");
    }

    public function webinar()
    {
        return view("pages.resources.webinar");
    }

    public function press()
    {
        return view("pages.resources.press");
    }
}
