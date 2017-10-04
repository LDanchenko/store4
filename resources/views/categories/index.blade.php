@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Category</div>
                    <div>
                        <a href="/categories/create">
                            <button>Создать категорию</button>
                        </a>
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Controls</th>
                            </tr>
                            @foreach($categories as $category)
                                <tr>

                                    <td><a href="/categories/show/{{$category->id}}">{{$category->id}}</a></td>
                                    <td><a href="/categories/show/{{$category->id}}">{{$category->cat_name}}</a></td>
                                    <td><a href="/categories/show/{{$category->id}}">{{$category->description}}</a></td>
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

                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
