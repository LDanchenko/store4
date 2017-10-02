<?php

namespace App\Http\Controllers;

use App\Good;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GoodController extends Controller
{
    //вывод всех товаров
    public function index()
    {
        $goods = Good::all();
        $data['goods'] = $goods;
        return view('goods.index', $data);
    }

    public function show($id)
    {
        $good = Good::find($id); //нашли товар по id
        $data['good'] = $good;
        return view('goods.show', $data);
    }

    public function create()
    {
        return view('goods.create');
    }

    public function store(Request $request)
    {
        //validacia
        $this->validate($request, [
            'name' => 'required',
            'price' => 'numeric|required'
        ]);


        $good = new Good();
        $good->name = $request->name;
        $good->price = $request->input('price');
        $good->save();

        return redirect('/good/show/' . $good->id);
    }
}

