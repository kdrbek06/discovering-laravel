<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function helloWorld()
    {
        return view('hello');
    }

    public function sayGoodBye()
    {
        return view('goodbye');
    }

    public function form1()
    {
        return view('form');
    }

    public function handleForm(Request $request)
    {
        dd($request->all());
    }
}


