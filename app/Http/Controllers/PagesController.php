<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view("pages/index");
    }

    public function aboutUs()
    {
        return view('pages.aboutUs');
    }

    public function workplaceSafety()
    {
        return view('pages.workplaceSafety');
    }

    public function environmental()
    {
        return view('pages.environmental');
    }

    public function careers()
    {
        return view('pages.careers');
    }

    public function screen()
    {
        return view('pages.screen');
    }

    public function backgroundScreening()
    {
        return view('pages.backgroundScreening');
    }

    public function avvanzScreen()
    {
        return view('pages.avvanzScreen');
    }
    public function backgroundCheck()
    {
        return view('pages.backgroundCheck');
    }

    public function avvanzSreenGlobal()
    {
        return view('pages.avvanzSreenGlobal');
    }

    public function process()
    {
        return view('pages.process');
    }

    public function kyc()
    {
        return view('pages.kyc');
    }

    public function screenChain()
    {
        return view('pages.screenChain');
    }

    public function singaporeWork()
    {
        return view('pages.singaporeWork');
    }
}
