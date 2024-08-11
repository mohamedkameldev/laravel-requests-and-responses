<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;

class CookiesController extends Controller
{
    public function setMethod()
    {
        $cookie = Cookie::make('name', 'Mohamed Mostafa', 60);
        return redirect('/get-cookie')->cookie($cookie);
    }

    public function getMethod()
    {
        dump(request()->cookie());

        dump(request()->hasCookie('name'));
        dump(request()->hasCookie('age'));
    }
}
