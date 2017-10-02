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
                                <th></th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Price</th>
                                <th>Controls</th>
                            </tr>
                            @foreach($goods as $good)
                                <tr>
                                 <td>   <a href="/good/show/{{$good->id}}">Посмотреть</a>
                                 </td>
                                    <td>{{$good->id}}}</td>
                                    <td>{{$good->name}}}</td>
                                    <td>{{$good->price}}</td>
                                    <td>
                                        <button>
                                            Удалить
                                        </button>
                                        <button>
                                            Редактировать
                                        </button>
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
