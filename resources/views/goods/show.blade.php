@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Goods</div>

                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>Category</th>
                                <th>Controls</th>
                            </tr>

                            <tr>
                                <td>{{$good->id}}}</td>
                                <td>{{$good->name}}}</td>
                                <td>{{$good->price}}</td>
                                <td>{{$good->description}}</td>
                                    <td>{{$cat->cat_name}}</td>

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

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
