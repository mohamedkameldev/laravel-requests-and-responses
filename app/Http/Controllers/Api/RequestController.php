<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function firstMethod()
    {
        // $request = app('request');
        // dump($request->all());

        // $name = request()->get('name');
        // dump($name);

        // $exists = request()->exists('name');
        // dump($exists);

        // $exists = request()->has('name');
        // dump($exists);

        // $exists = request()->whenHas('name', function () {
        //     return 'yes there is a filed called name';
        // });
        // dump($exists);

        // $filled = request()->filled('name');
        // dump($filled);

        // $json_data = request()->json();
        // dump($json_data);

        // $json_age = request()->json('age');
        // dump($json_age);


        // dump(request()->all());
        // $bag = request()->json();
        // dump($bag);
        // echo $bag->get('name');


        // dump(request()->method());

        // dump(request()->path());
        // dump(request()->url());

        // dump(request()->is('*request'));
        // dump(request()->is('api*'));
        // dump(request()->is('categories'));

        // dump(request()->ip());

        // dump(request()->header());

        // dump(request()->server());

        // dump(request()->secure());

        // dump(request()->pjax());

        // dump(request()->wantsJson());

        // dump(request()->isJson());

        // dump(request()->accepts('text/html'));
        // dump(request()->accepts('application/json'));



        // dump(request()->file());
        // dump(request()->file('image'));
        // dump(request()->allFiles());

        // dump(request()->hasFile('image'));
        // dump(request()->hasFile('example_2'));
    }
}
