<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	public static function selectIdbyName($name){
		return Category::where('cat_name', '=', $name)->get();
	}
}
