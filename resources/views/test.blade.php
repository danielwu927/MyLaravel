@extends('welcome')

@section('content')

测试表达提交，多条件查询<br/>

    <form  class="form-inline" role="form" name="chaxun" action="/query"  method="get">
        <div class="form-group">

            <input type="hidden" name="_token" value="{{ csrf_token() }}" />

            <label class="sr-only" for="name">用户名</label>
        <input type="text" name="username"><br/>

        <label class="sr-only" for="name">邮箱</label>
        <input type="text" name="email"><br/>

            <label class="sr-only" for="name">角色</label>
            <input type="text" name="role"><br/>



        <button type="submit" class="btn btn-default" >提交</button>
        </div>
    </form>

<h2>另一个测试表单</h2>
{!! Form::open(array('action' => 'DaLao@multiConditionQuery')) !!}
<div class="form-group">
    {!! Form::label('title', '用户名:') !!}
    {!! Form::text('title', '默认值嘛？', ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('邮箱', 'Body:') !!}
    {!! Form::textarea('body', "文本框默认值？", ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit('提交', ['class' => 'btn btn-primary form-control']) !!}
</div>

{!! Form::close() !!}
@endsection