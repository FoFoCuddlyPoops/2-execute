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
        return view('home.welcome');
    }
}
