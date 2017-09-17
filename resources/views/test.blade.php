@extends('welcome')

@section('content')

测试表达提交，多条件查询<br/>

    <form  class="form-inline" role="form" name="chaxun" action="/query"  method="get">
        <div class="form-group">

            <input type="hidden" name="_token" value="{{csrf_token()}}" />

            {{--<label class="sr-only" for="username">用户名</label>--}}
       用户名 <input type="text" name="username"><br/>

        {{--<label class="sr-only" for="email">邮箱</label>--}}
        邮箱<input type="text" name="email"><br/>

            {{--<label class="sr-only" for="name">角色</label>--}}
            {{--<input type="text" name="role"><br/>--}}



        <button type="submit" class="btn btn-default" >提交</button>
        </div>
    </form>


@endsection