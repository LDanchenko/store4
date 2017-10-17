<?php

namespace App\Http\Controllers;

use App\Category;
use App\Good;
use App\Cart;
use App\Order;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
    public function index(Request $request)
    {
        $goods = Good::getAllGoods();
        $data['goods'] = $goods;
        $categories = Category::all();
        $data['categories'] = $categories;
        $session = $request->session()->get('key');

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

    public function addToCart(Request $request){
      //  $id = $request->id;
       // Cart::add('293ad', 'Product 1', 1, 9.99);
       // return redirect()->to('/');
        dd('ok');
    }

   /* public function AddToCart(Request $request, $id)
    {

        $product = Good::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null; //если есть массив сессий
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
        //тут еще надо сообщение
        return redirect()->to('/');
    }*/

    public function getCart()
    {

        if (!Session::has('cart')) { //если ничего не добавлено в массив сессий
            return view('store.cart');

        }
        $oldCart = Session::get('cart');//если есть, берем старые данные
        $cart = new Cart($oldCart);
        $data['products'] = $cart->items;
        $data['totalPrice'] = $cart->totalPrice;
        return view('store.cart', $data);

    }

    public function makeOrder()
    {
        if (!Session::has('cart')) { //если ничего не добавлено в массив сессий
            return view('store.cart');
        }
        $oldCart = Session::get('cart');//если есть, берем старые данные
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        //подставить в форму email если авторизирован
        $email = "";
        if (Auth::user()) {
            $email = Auth::user()->email;
        }
        return view('store.order', ['total' => $total, 'email' => $email]);
    }


    public function save(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'email' => 'required',
        ]);

        $oldCart = Session::get('cart');//если есть, берем старые данные
        $cart = new Cart($oldCart);
        $data['products'] = $cart->items;
        foreach ($data as $key => $value) {
            foreach ($value as $value1) {
                $order = new Order();
                $order->count = $value1['qty'];
                $order->good_id = $value1['item']->id;
                $order->email = $request->email;
                $order->username = $request->username;
                $order->save();
            }
        }

        Session::forget('cart');

        $user = User::find(1);
        $to= $user->email;
        $subject = 'Заказ';

        $message = 'Поступил новый заказ';

        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/html; charset=utf8';
        $headers[] = 'To: Receiver' .$to;

        $result = mail($to, $subject, $message, implode("\r\n", $headers));


       return redirect()->to('/cart')->with('message', 'Заказ оформлен, ожидайте звонка!');
    }
    public function clear(){
        Session::forget('cart');
        return redirect()->to('/cart');
    }

}


