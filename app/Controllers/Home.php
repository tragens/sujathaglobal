<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home');
    }

    public function setup(): string
    {
        return view('admin/home');
    }

    public function slider(): string
    {
        return view('admin/slider');
    }

}
