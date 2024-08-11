<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function firstMethod()
    {
        //?name=mohamed&color=blue
        // dd(request()->all());

        request()->flash();
        return redirect('web-request-2');

    }



    public function secondMethod()
    {
        // dump('second Method');
        dump(old());

        request()->session()->flush();
        dump(old());
    }
}
