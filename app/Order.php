<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public static function allOrders(){
        return $data = Good
            ::join('orders', 'orders.good_id', '=', 'goods.id')
            ->select('orders.id', 'orders.email', 'orders.username', 'goods.name', 'orders.count')
            ->getQuery()
            ->get();
    }
}
