<?php

namespace App\Http\Controllers\UATWEB;

use App\Http\Controllers\Controller;
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
        return view('UATWEB.pages.homepage.index', [
            "trustedPartnerItems"=> $trustedPartnerItems,
        ]);
    }

    

    public function cookie()
    {
        return view("UATWEB.pages.homepage.cookie");
    }

    public function general()
    {
        return view("UATWEB.pages.homepage.general");
    }

    public function ethics()
    {
        return view("UATWEB.pages.homepage.ethics");
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
        return view("UATWEB.pages.homepage.global", [
            "trustedPartnerItems"=> $trustedPartnerItems,
        ]);
    }

    public function testing()
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
        return view('UATWEB.pages.homepage.testingPages', [
            "trustedPartnerItems"=> $trustedPartnerItems,
        ]);
    }
}
