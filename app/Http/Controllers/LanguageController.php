<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Session;
use App;
use Config;

class LanguageController extends Controller
{
    public function __construct()
    {

    }

    public function changeLanguageTo($language_code)
    {
        if (array_key_exists($language_code, Config::get('languages'))) {
            Session::set('language_code', $language_code);
        }
        App::setLocale($language_code);
        // var_dump(App::getLocale());
        // exit;
        return redirect()->route('home');
    }
}
