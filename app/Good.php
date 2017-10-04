<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
    public static function getAllGoods(){
       return $data = Good
            ::join('categories', 'goods.categories', '=', 'categories.id')
            ->select('goods.id', 'goods.name', 'goods.price', 'goods.description', 'goods.image', 'categories.cat_name')
            ->getQuery() // Optional: downgrade to non-eloquent builder so we don't build invalid User objects.
            ->get();
    }

    public static function selectByCategory($id){
        return Good::where('categories', '=', $id)->get();
    }
}
