<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
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
        return view("pages.homepage.index", [
            "trustedPartnerItems"=> $trustedPartnerItems,
        ]);
    }

    

    public function cookie()
    {
        return view("pages.homepage.cookie");
    }

    public function general()
    {
        return view("pages.homepage.general");
    }

    public function ethics()
    {
        return view("pages.homepage.ethics");
    }

    public function global()
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
        return view("pages.homepage.global", [
            "trustedPartnerItems"=> $trustedPartnerItems,
        ]);
    }
}
