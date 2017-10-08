@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Adminpanel</div>

                    <div class="panel-body">

                        <div> Change email </div>

                        @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        @endif
                        <form action="/admin/update" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <table class="table">

                                <tr>
                                    <td>email</td>
                                    <td><input type="email" name="email"></td>
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
