<?php

namespace App\Http\Controllers;

use App\Category;
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
        $goods = Good::getAllGoods();
        $data['goods'] = $goods;
        $categories = Category::all();
        $data['categories'] = $categories;
        return view('store.all', $data);
    }

    public function show($id)
    {
        $good = Good::find($id); //нашли товар по id
        $cat = Category::find($good->categories);
        $data['good'] = $good;
        $data['cat'] = $cat;
        return view('store.show', $data);
    }

    public function category($id)
    {
        $cat = Category::find($id); //нашли category по id
        $data['cat'] = $cat;
        $goods = Good::selectByCategory($id);
        $data['goods'] = $goods;
        return view('store.category', $data);
    }

    public function basket()
    {
        return view('store.basket');

    }

}

