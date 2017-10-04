@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Categories</div>
                    <div class="panel-body">
                        @foreach($errors->all() as $error)
                        <ul>
                            <li>{{$error}}</li>
                        </ul>
                        @endforeach
                    </div>

                    <div class="panel-body">
                        <form action="/categories/store" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <table class="table">
                                <tr>
                                    <td>name</td>
                                    <td><input type="text" name="name"></td>
                                </tr>
                                <tr>
                                    <td>description</td>
                                    <td><input type="text" name="description"></td>
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
