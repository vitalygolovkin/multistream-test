<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $request = Request::create('api/v1/info', 'POST');
        $response = Route::dispatch($request)->getContent();

        $data = json_decode($response);
        $rtmp = $data->rtmp;
        $streams = $data->streams;
        return view('home', ["streams" => $streams, "rtmp" => $rtmp]);
    }
}
