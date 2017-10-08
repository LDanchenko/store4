@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Goods</div>
                    <div class="panel-body">
                        @foreach($errors->all() as $error)
                        <ul>
                            <li>{{$error}}</li>
                        </ul>
                        @endforeach
                    </div>

                    <div class="panel-body">
                        <form action="/good/store" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <table class="table">
                                <tr>
                                    <td>name</td>
                                    <td><input type="text" name="name"></td>
                                </tr>
                                <tr>
                                    <td>price</td>
                                    <td><input type="text" name="price"></td>
                                </tr>
                                <tr>
                                    <td>description</td>
                                    <td><input type="text" name="description"></td>
                                </tr>
                                <tr>
                                    <td>categories</td>

                                    <td><select name="category">
                                            @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->cat_name}}
                                            @endforeach
                                        </select></td>

                                </tr>
                                <tr>
                                    <td>image</td>
                                    <td><input type="file" name="image"></td>
                                </tr>

                                <tr>
                                    <td></td>
                                    <td><input type="submit"></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
