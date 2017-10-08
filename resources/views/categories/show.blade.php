@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Categories</div>

                    <div class="panel-body">
                        <table class="table">
                            <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                                <th>Controls</th>
                            </tr>

                                <tr>
                                    <td>{{$category->id}}</td>
                                    <td>{{$category->cat_name}}</td>
                                    <td>{{$category->description}}</td>

                                    <td>
                                        <a href="/categories/destroy/{{$category->id}}">
                                            <button>
                                                Удалить
                                            </button>
                                        </a>
                                        <a href="/categories/edit/{{$category->id}}">
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
