@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div style="display: inline-block;margin-right: 10px"><a href="/cart/"><img src="../uploads/cart.png"
                                                                                        width="20" height="20">
                    Корзина
                    <span class="badge">{{Session::has('cart') ? Session::get('cart')->totalQty : ''}}</span>

                </a></div>        </div>
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Имя: {{$good->name}}</div>

                    <div class="panel-body">
                        <table class="table">

                            <tr>
                                <div class="element"><img src="../{{$good->image}}" width="200" height="200"></div>
                                <div>Цена: {{$good->price}} $</div>
                                <div>Описание: {{$good->description}}</div>
                                <div>Категория: {{$cat->cat_name}}</div>
                                <td>
                                    <div class="element"><a href="/add-to-cart/{{$good->id}}">
                                        <button>
                                            Заказать
                                        </button>
                                    </a>
                                    </div>

                                </td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
