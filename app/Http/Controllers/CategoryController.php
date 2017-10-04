<?php

namespace App\Http\Controllers;

use App\Category;
use App\Good;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //вывод всех товаров
    public function index()
    {
        $categories = Category::all();
        $data['categories'] = $categories;
        return view('categories.index', $data);
    }

    public function show($id)
    {
        $category = Category::find($id); //нашли товар по id
        $data['category'] = $category;
        return view('categories.show', $data);
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        //validacia
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',

        ]);

        $category = new Category();
        $category->cat_name = $request->name;
        $category->description = $request->input('description');
        $category->save();


        return redirect('/categories/show/' . $category->id);
    }

    public function edit($id)
    {

        $category = Category::find($id); //нашли товар по id
        $data['category'] = $category;
        return view('categories.edit', $data);
    }

    public function update($id, Request $request)
    {

        //validacia
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required'
        ]);

        $category = Category::find($id);
        $category->cat_name = $request->name;
        $category->description = $request->input('description');
        $category->save();

        return redirect('/categories/show/' . $category->id);
    }

    public function destroy($id)
    {
        Category::destroy($id);
        return redirect('/categories/');
        //$good = Good::find($id)->delete();
    }


}
