<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BunuController extends Controller
{
    public function index() {

         //permet de retrouver la localisation de l'endroit où tu te trouve 
        // récupérer l'endroit, das cet api on retrouve l'endroit et en fonction de l'endrois renvoyer tt ce qu'on doit envoyer en liaison à la météo
         $datas =  http::get( 'https://ipgeolocation.abstractapi.com/v1/?api_key=49a7bee75576469f98b9423411197a0b')
         ->json();
         
         // dd($datas);

        $response = Http::get('https://api.tomorrow.io/v4/timelines?location=40.75872069597532,-73.98529171943665&fields=temperature&timesteps=1h&units=metric&apikey=zQS48rxHDe57iEDLXDcvHKYLOnmIsun9')
        ->json();
        // dd($response);
       
        return view('welcome' , 
        [
            'datas' => $datas, 
        ]);
    }
}


