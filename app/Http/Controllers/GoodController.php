<?php

namespace App\Http\Controllers;

use App\Good;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GoodController extends Controller
{
    //вывод всех товаров
    public function index()
    {
        $goods = Good::getAllGoods();
        $data['goods'] = $goods;
        $categories = Category::all();
        $data['categories'] = $categories;

        return view('goods.index', $data);
    }

    public function show($id)
    {
        $good = Good::find($id); //нашли товар по id
        $cat = Category::find($good->categories);
        $data['good'] = $good;
        $data['cat'] = $cat;

        return view('goods.show', $data);
    }

    public function create()
    {
        $categories = Category::all();
        $data['categories'] = $categories;

        return view('goods.create', $data);
    }

    public function store(Request $request)
    {
        //validacia
        $this->validate($request, [
            'name' => 'required',
            'price' => 'numeric|required',
            'description' => 'required',
            'category' => 'required',
            'image' => 'image'
        ]);
        $path = '';
        $good = new Good();
        $good->name = $request->name;
        $good->price = $request->input('price');
        $good->description = $request->description;
        $cat = $request->category;
        $good->categories = $cat;
        $good->image = '';
        $good->save();
        $image = $request->file('image');

        if ($image) {
            // echo  'file found';
            $path = 'uploads/' . $good->id . '.jpg';
            $image->move('uploads', $good->id . '.jpg');
        }
        $good->image = $path;
        $good->save();

        return redirect('/good/show/' . $good->id);
    }

    public function edit($id)
    {

        $good = Good::find($id); //нашли товар по id
        $cat = Category::find($good->categories);
        $data['good'] = $good;
        $data['cat'] = $cat;
        $data['categories'] = Category::all();

        return view('goods.edit', $data);
    }

    public function update($id, Request $request)
    {

        $path = '';
        //validacia
        $this->validate($request, [
            'name' => 'required',
            'price' => 'numeric|required',
            'description' => 'required',
            'category' => 'required',
            'image' => 'image'
        ]);

        $good = Good::find($id);
        $good->name = $request->name;
        $good->price = $request->input('price');
        $good->description = $request->description;
        $cat = $request->category;
        $good->categories = $cat;
        $good->save();
        $image = $request->file('image');

        if ($image) {
            // echo  'file found';
            $path = 'uploads/' . $good->id . '.jpg';
            $image->move('uploads', $good->id . '.jpg');
        }
        $good->image = $path;
        $good->save();

        return redirect('/good/show/' . $good->id);
    }

    public function destroy($id)
    {
        Good::destroy($id);

        return redirect('/good/');
        //$good = Good::find($id)->delete();
    }
}

