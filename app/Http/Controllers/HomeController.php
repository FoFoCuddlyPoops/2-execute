<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App;

class HomeController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        // var_dump(App::getLocale());
        // exit;
        return view('home.welcome');
    }
}
