@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div style="display: inline-block;margin-right: 10px"> <a href="/basket/"><img src="../uploads/cart.png" width="20" height="20"> Корзина</a></div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Корзина</div>

                <div class="panel-body">
                    <table class="table">

                        <tr>
                            <div class="element"><img src="../{{$good->image}}" width="200" height="200"></div>
                            <div>Цена: {{$good->price}} $</div>
                            <div>Описание: {{$good->description}}</div>
                            <div>Категория: {{$cat->cat_name}}</div>
                            <td>
                                <a href="/good/destroy/{{$good->id}}">
                                    <button>
                                        Заказать
                                    </button>
                                </a>

                            </td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
