@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome，{{Auth::user()->username}}</div>

                <div class="panel-body">
                    登录成功！3秒后自动进入页面...
                </div>
                <meta http-equiv="refresh" content="3;url=hello.php">

            </div>
        </div>
    </div>
</div>
@endsection
