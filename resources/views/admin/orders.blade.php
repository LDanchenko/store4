@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Orders</div>

                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <th>ID</th>
                                <th>Email</th>
                                <th>Username</th>
                                <th>Good</th>
                                <th>Count</th>
                            </tr>
                            @foreach($orders as $order)
                                <tr>

                                    <td>{{$order->id}}</td>
                                    <td>{{$order->email}}</td>
                                    <td>{{$order->username}}</td>
                                    <td>{{$order->name}}</td>
                                    <td>{{$order->count}}</td>


                                </tr>

                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
