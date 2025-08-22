<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index(): string
    {
        return view('about');
    }


    public function team()
    {
        return view('team');
    }

    public function faq()
    {
        return view('faq');
    }


}
