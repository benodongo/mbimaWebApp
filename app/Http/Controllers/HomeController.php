<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

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
        $clients = Client::all();
        return view('welcome',compact('clients',$clients));
    }
    public function clients()
    {
        $clients = Client::all();
        return view('clients',compact('clients',$clients));
    }
}
