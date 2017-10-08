@extends('layouts.app')
<link rel="stylesheet" type="text/css" href="../css/main.css"/>
@section('content')


    <div style="display: inline-block; margin: 10px">
        <h1>  {{$cat->cat_name}} </h1>
    </div>
    <div> Описание категории: {{$cat->description}} </div>
    <div style="display: inline-block;margin-right: 10px"><a href="/cart/"><img src="../uploads/cart.png"
                                                                                width="20" height="20">
            Корзина
            <span class="badge">{{Session::has('cart') ? Session::get('cart')->totalQty : ''}}</span>

        </a></div>
    <div class="container_item">
        <div class="catalog">
            @foreach($goods as $good)
                <div class="item">

                    <div class="element"><img src="../{{$good->image}}" width="200" height="200"></div>
                    <div><a href="/show/{{$good->id}}"> Имя: {{$good->name}}</a></div>
                    <div><a href="/show/{{$good->id}}">Цена: {{$good->price}} $</a></div>
                    <div><a href="/show/{{$good->id}}">Описание: {{$good->description}}</a></div>


                    <div class="element"><a href="/good/edit/{{$good->id}}">
                            <button>
                                Заказать
                            </button>
                        </a>
                    </div>

                </div>
            @endforeach
        </div>
    </div>


@endsection
