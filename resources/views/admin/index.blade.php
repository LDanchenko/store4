@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Adminpanel</div>

                    <div class="panel-body">

                    <div><a href="/good/">Goods</a></div>
                        <div><a href="/categories/">Categories</a></div>
                        <div><a href="/admin/orders/">Orders</a></div>
                        <div><a href="/admin/change/">Change email</a></div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
