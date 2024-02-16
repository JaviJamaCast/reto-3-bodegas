<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class LanguageController extends Controller
{
    public function swap($locale)
    {

        if (in_array($locale, ['en', 'es', 'eu'])) {
            Session::put('locale', $locale);
            App::setLocale($locale);
        }

        return Redirect::back();
    }
}
