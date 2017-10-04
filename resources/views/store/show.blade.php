@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
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
