<?php

namespace App\Http\Controllers;

use App\Category;
use App\Good;
use App\Order;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {

        return view('admin.index');
    }

    public function change(){
        return view('admin.change');
    }

    public function update(Request $request){
        $this->validate( $request, [
            'email'        => 'email',
        ] );

       $user = User::find(1);
        $user->email = $request->email;
        $user->save();
        Auth::logout();
        return view('store.all');
    }

    public function orders(){
        $orders = Order::allOrders();
        $data['orders'] = $orders;
        return view('admin.orders', $data);

    }
}