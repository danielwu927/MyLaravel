@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome，{{Auth::user()->username}}</div>

                <div class="panel-body">
                    欢迎登录！
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
