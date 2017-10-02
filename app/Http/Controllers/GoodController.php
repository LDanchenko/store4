<?php

namespace App\Http\Controllers;
use App\Good;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GoodController extends Controller
{
    //вывод всех товаров
    public function index(){
        $data = Good::all();
        return view('goods.index');
    }
}
