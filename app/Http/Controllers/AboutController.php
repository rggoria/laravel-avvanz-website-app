<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $trustedPartnerItems = [
            'partner1.webp',
            'partner2.webp',
            'partner3.webp',
            'partner4.webp',
            'partner5.webp',
            'partner6.webp',
            'partner7.webp',
            'partner8.webp',
        ];
        return view("pages.about.index", [
            "trustedPartnerItems"=> $trustedPartnerItems,
        ]);
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
