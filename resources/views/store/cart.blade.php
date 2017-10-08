@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Корзина</div>
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
                <div class="panel-body">

                   @if(Session::has('cart'))
                       <ul>
        @foreach($products as $product)
            <li>
                <span class="badge">  {{$product['qty']}} </span>
                {{$product['item']->name}}
                {{$product['item']->price}} $
                <br>

            </li>

            @endforeach
                       </ul>

                        <div> Общая стоимость {{$totalPrice}} $</div>

                        <div> <button><a href="/cart/makeOrder" >Оформить заказ </a></button> </div>
                    <br>
                        <div> <button><a href="/cart/clear" >Оичстить корзину </a></button> </div>

                    @else
                        <div> Нет товаров в корзине</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
