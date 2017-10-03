@extends('layouts.app')
<link rel="stylesheet" type="text/css" href="css/main.css"/>
@section('content')


    <h1>Все товары</h1>
    <div class="container_item">
        <div class="catalog">
            @foreach($goods as $good)
                <div class="item">
                    <div class="element"><img src="{{$good->image}}" width="200" height="200"></div>
                    <div><a href="/good/show/{{$good->id}}"> Имя: {{$good->name}}</a></div>
                    <div><a href="/good/show/{{$good->id}}">Цена: {{$good->price}} $</a></div>
                    <div><a href="/good/show/{{$good->id}}">Описание: {{$good->description}}</a></div>
                    <div><a href="/good/show/{{$good->id}}">Категория: {{$good->cat_name}}</a></div>


                    <div class="element">    <a href="/good/edit/{{$good->id}}">
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
