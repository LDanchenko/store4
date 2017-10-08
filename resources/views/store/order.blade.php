@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Оформить заказ</div>

                <div class="panel-body">
                    @foreach($errors->all() as $error)
                        <ul>
                            <li>{{$error}}</li>
                        </ul>
                    @endforeach
                </div>

                <div class="panel-body">
                <div>Сумма заказа: {{$total}} $</div>

                    <form action="/cart/save" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <table class="table">
                            <tr>
                                <td>Введите имя:</td>
                                <td><input type="text" name="username"></td>
                            </tr>
                            <tr>
                                <td>Введите email:</td>
                                <td><input type="text" name="email" value="{{$email}}"></td>
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
