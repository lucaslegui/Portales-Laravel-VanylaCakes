<?php

namespace App\Http\Controllers;

class HomeController
{
    public function home()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }
}
