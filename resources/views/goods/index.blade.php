@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Goods</div>
                    <div>
                        <a href="/good/create">
                            <button>Создать товар</button>
                        </a>
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Category</th>
                                <th>Controls</th>
                            </tr>
                            @foreach($goods as $good)
                                <tr>

                                    <td><a href="/good/show/{{$good->id}}">{{$good->id}}</a></td>
                                    <td><a href="/good/show/{{$good->id}}">{{$good->name}}</a></td>
                                    <td><a href="/good/show/{{$good->id}}">{{$good->price}}</a></td>
                                    <td><a href="/categories/">{{$good->cat_name}}</a></td>

                                    <td>
                                        <a href="/good/destroy/{{$good->id}}">
                                        <button>
                                            Удалить
                                        </button>
                                        </a>
                                        <a href="/good/edit/{{$good->id}}">
                                        <button>
                                            Редактировать
                                        </button>
                                        </a>
                                    </td>
                                </tr>

                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
