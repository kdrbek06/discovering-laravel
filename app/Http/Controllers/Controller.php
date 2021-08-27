<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function showIndex()
    {

        //TODO; model(DONE)
        //TODO; query
        $pokemons = Pokemon::where('name', 'bek')->get();




        return view('index');
    }

    public function getCardDetail()
    {
        return view('card');
    }

    public function form1()
    {
        return view('form');
    }

    public function sendContact()
    {
        return view('contact');
    }

    public function handleForm(){

        return '';

    }
}


