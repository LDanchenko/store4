<?php

namespace App\Http\Controllers;

use App\Good;
use Illuminate\Support\Facades\Auth;
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
       // $this->middleware('auth'); //убрали логин
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $goods = Good::all();
        $data['goods'] = $goods;
        return view('store.all', $data);
    }

    public function myview()
    {
        return view('myview');
    }
}

