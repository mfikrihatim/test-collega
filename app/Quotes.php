<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

class Quotes extends Model
{
    // public static function all() {
    //     $client = new \GuzzleHttp\Client();
    //     $request = new Request('GET', 'https://api.kanye.rest', [
    //         'query' => [
    //             'action' => 'get_all_host',
    //             '_username' => 'user',
    //             '_secret' => 'secret',
    //             'output_format' => 'json'
    //         ]]);
    //     $hostgroup = $client->send($request, ['timeout' => 2]);
    //     return $hostgroup;
    // }
}
