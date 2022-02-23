<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;


class QuotesController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            return view('index');

    }

    public function getRandom()
    {
            $quotes = json_decode(file_get_contents('https://api.kanye.rest'), true);
            // $quotes = Http::get('https://api.kanye.rest')->json();

            // for ($x = 0; $x <= 5; $x++) {
            //     $quotes[] = array("quotes"=>$quotes);   
            // }
            // print_r($quotes);
            dump($quotes);
            // return view('index', ['quotes' => $quotes]);
    }
}
