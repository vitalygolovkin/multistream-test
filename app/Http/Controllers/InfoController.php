<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Client;

class InfoController extends Controller
{
    public function getInfo(Request $request){

        $client = new Client();
        $res = $client->get('http://dev-apps.wwl.tv:8086/api/live/info');
        return $res->getBody();

    }
}
