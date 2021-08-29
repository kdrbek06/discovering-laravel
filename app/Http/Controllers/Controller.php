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


//        $pdo = new \PDO(
//            'mysql:host=hostname;dbname=ssldb',
//            'username',
//            'password',
//        );


        dd( phpinfo());
        //TODO; model(DONE)
        //TODO; query
        $pokemon = Pokemon::where('name', 'kadir')->get();
//        dd($pokemon);




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


