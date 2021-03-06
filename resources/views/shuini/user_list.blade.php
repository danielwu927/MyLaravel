<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>后台管理操作</title>
    <!-- BOOTSTRAP 引导 STYLES-->
    <link href="/css/bootstrap01.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="/css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC 样式 STYLES-->
    <link href="/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN 风格 STYLES-->
    <link href="/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE 谷歌字体 FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">后台管理</a>
            </div>

            <div class="header-right">
                <img src="/img/logo-whut.png" width="400" height="50"/></a>
            </div>
        </nav>
        <!-- navbar -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="/img/admin.jpg" class="user-image" alt="User Image">

                            <div class="inner-text" style="font-size:28px">
                                <span style="color:#F00">admin</span>
                            <br />
                            <ul class="dropdown-menu">
                        
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="javascript:void(0);" class="btn btn-default btn-flat" id="btnUserInfo">用户信息</a>
                                </div>
                                <div class="pull-right">
                                    <a href="javascript:void(0);" class="btn btn-default btn-flat" id="btnSignOut">注销</a>
                                </div>
                            </li>
                            </ul>
               
                            <small style="font-size:17px">SUPER </small>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a class="active-menu" href="admin_home.blade.php"><i class="fa fa-dashboard "></i>主面板</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-desktop "></i>新闻与通知<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="news_list.php"><i class="fa fa-bell"></i>新闻中心</a>
                            </li>
                            <li>
                                <a href="notice_list.php"><i class="fa fa-bell "></i>通知中心</a>
                            </li>                                                     
                        </ul>
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-bar-chart-o"></i>问卷管理<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="new_create_questionnaire_template.php"><i class="fa fa-file-excel-o"></i>新建问卷模板</a>
                            </li>
                            <li>
                                <a href="questionnaire_template.php"><i class="fa fa-file-excel-o"></i>问卷模板列表</a>
                            </li>                                                     
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-file-sound-o"></i>问卷邀请管理<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="register_questionnaire_invite.php"><i class="fa fa-file-text"></i>登记问卷邀请</a>
                            </li>
                            <li>
                                <a href="questionnaire_invite.php"><i class="fa fa-file-text"></i>问卷邀请列表</a>
                            </li>                          
                        </ul>
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-group"></i>用户管理<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">                           
                             <li>
                                <a href="create_user.php"><i class="fa fa-user"></i>创建用户</a>
                             </li>
                             <li>
                                <a href="/admin/user_list"><i class="fa fa-user"></i>用户列表</a>
                            </li>                          
                        </ul>
                    </li>                    
                    <li>
                        <a href="#"><i class="fa fa-unlock-alt"></i>权限管理 <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="port_list.php"><i class="fa fa-key"></i>接口列表</a>
                            </li>
                             <li>
                                <a href="new_create_port.php"><i class="fa fa-key"></i>新建接口</a>
                            </li>
                            <li>
                                <a href="role_list.php"><i class="fa fa-key"></i>角色列表</a>
                            </li>
                            <li>
                                <a href="new_create_role.php"><i class="fa fa-key"></i>新建角色</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-gears"></i>系统控制面板<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="system_parameter.php"><i class="fa fa-gear"></i>系统参数</a>
                            </li>
                        </ul>
                    </li>                  
                </ul>
            </div>
        </nav>
        <!-- navbar-default  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">用户列表</h1>
                        <h1 class="page-subhead-line">您可以创建管理用户。</h1>

                    </div>
                </div> <!-- row -->
                <div class="content body">
                    <a href="create_user.php" class="btn btn-primary btn-flat" id="new_create_user">新建用户</a><br><br>
                    <div class="box box-body box-primary">
                    <div id="usersTable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                        <div class="row">
                            <div class="col-sm-6">

                            </div>

                        </div>


                        <form class="form-horizontal"   name="chaxun" action="/query"  method="get">
                            <fieldset>

                                <input type="hidden" name="_token" value="{{csrf_token()}}" />
                                <div id="legend" class="">
                                    <legend class="">用户查询</legend>
                                </div>

                                <table  class="table">
                                    <tr>
                                        <td>
                                            <div class="control-group">

                                                <!-- Text input-->
                                                <label class="control-label"  for="input01">邮箱</label>
                                                <div class="controls">
                                                    <input type="text" name="email"  placeholder="" class="input-xlarge">
                                                    <p class="help-block"></p>
                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="control-group">

                                                <!-- Text input-->
                                                <label class="control-label"   for="input01">用户名</label>
                                                <div class="controls">
                                                    <input type="text"  name="username" placeholder="" class="input-xlarge">
                                                    <p class="help-block"></p>
                                                </div>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td> <div class="control-group">

                                                <!-- Text input-->
                                                <label class="control-label"  for="input01">描述信息</label>
                                                <div class="controls">
                                                    <input type="text"   name="description" placeholder="" class="input-xlarge">
                                                    <p class="help-block"></p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="control-group">
                                                <label class="control-label"></label>

                                                <!-- Button -->
                                                <div class="controls">
                                                    <button  type="submit" class="btn btn-primary">查询</button>
                                                </div>
                                            </div>

                                        </td>

                                    </tr>
                                </table>

                            </fieldset>
                        </form>



                        {{--测试表达提交，多条件查询<br/>--}}

                        {{--<form  class="form-inline" role="form" name="chaxun" action="/query"  method="get" >--}}
                            {{--<div class="form-group">--}}

                                {{--<input type="hidden" name="_token" value="{{csrf_token()}}" />--}}

                                {{--<label >用户名</label>--}}
                                {{--<input type="text" name="username"><br/>--}}

                                {{--<label >邮箱</label>--}}
                                {{--<input type="text" name="email"><br/>--}}

                                {{--<label class="sr-only" for="name">角色</label>--}}
                                {{--<input type="text" name="role"><br/>--}}



                                {{--<button type="submit" class="btn btn-default" >查询</button>--}}
                            {{--</div>--}}
                        {{--</form>--}}



                        <div class="row">
                            <div class="col-sm-12">
                                <table id="usersTable" class="table table-hover table-responsive dataTable no-footer" role="grid" aria-describedby="usersTable_info" style="width: 1015px;">
                                <thead>
                                <tr role="row">
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 154px;">帐号</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 166px;">角色</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 130px;">描述信息</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 227px;">邮箱</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 81px;">状态</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 180px;">操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                <tr role="row" class="odd">
                                    <td>{{$user->username}}</td>
                                    <td>{{$user->role}}</td>
                                    <td>{{$user->description}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->status==1?'已激活':'冻结'}}</td>
                                    <td><button class="btn btn-active btn-xs btn-delete btn-flat" data-id="admin">冻结</button>
                                    <button class="btn btn-primary btn-xs btn-modify btn-flat" data-id="admin"  onclick="mod_user({{$user->id}})">修改</button>
                                    <button class="btn btn-danger btn-xs btn-delete btn-flat" data-id="admin"  onclick="del_user({{$user->id}})">删除</button></td>
                                </tr>
                                @endforeach
                                <div class="col-sm-7" align="right"> {!! $users->links() !!}
                                </div>

                                <!--
                                       <tr role="row" class="even">
                                    <td>ktzcy</td><td>课题组成员</td>
                                    <td>-1</td><td>1718@qq.com</td>
                                    <td>已激活</td>
                                    <td><button class="btn btn-danger btn-xs btn-freeze btn-flat" data-id="ktzcy">冻结</button> 
                                    <button class="btn btn-primary btn-xs btn-modify btn-flat" data-id="ktzcy">修改</button>                                       
                                    <button class="btn btn-danger btn-xs btn-delete btn-flat" data-id="ktzcy">删除</button></td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td>linbaoxian</td>
                                    <td>水泥厂用户</td>
                                    <td>-1</td>
                                    <td>linbaoxian@163.com</td>
                                    <td>已激活</td>
                                    <td><button class="btn btn-danger btn-xs btn-freeze btn-flat" data-id="linbaoxian">冻结</button> 
                                    <button class="btn btn-primary btn-xs btn-modify btn-flat" data-id="linbaoxian">修改</button>                                       
                                    <button class="btn btn-danger btn-xs btn-delete btn-flat" data-id="linbaoxian">删除</button></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td>sanxiashuini</td><td>水泥厂用户</td>
                                    <td>-1</td>
                                    <td>178791827@qq.com</td>
                                    <td>已激活</td>
                                    <td><button class="btn btn-danger btn-xs btn-freeze btn-flat" data-id="sanxiashuini">冻结</button> 
                                    <button class="btn btn-primary btn-xs btn-modify btn-flat" data-id="sanxiashuini">修改</button>                                       
                                    <button class="btn btn-danger btn-xs btn-delete btn-flat" data-id="sanxiashuini">删除</button></td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td>wang</td>
                                    <td>项目组负责人1</td>
                                    <td>-1</td>
                                    <td>178791827@qq.com</td>
                                    <td>已激活</td>
                                    <td><button class="btn btn-danger btn-xs btn-freeze btn-flat" data-id="wang">冻结</button> 
                                    <button class="btn btn-primary btn-xs btn-modify btn-flat" data-id="wang">修改</button>                                       
                                    <button class="btn btn-danger btn-xs btn-delete btn-flat" data-id="wang">删除</button></td>
                                </tr>
-->
                                </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                {{--<div class="dataTables_info" id="usersTable_info" role="status" aria-live="polite">第 1 页 / 总 1 页</div>--}}
                            </div>
                            <div class="col-sm-7" align="right">
                                <div class="dataTables_paginate paging_simple_numbers" id="usersTable_paginate">
                                    {{--<ul class="pagination"><li class="paginate_button previous disabled" id="usersTable_previous">--}}
                                    {{--<a href="#" aria-controls="usersTable" data-dt-idx="0" tabindex="0">下一页</a></li>--}}
                                    {{--<li class="paginate_button active"><a href="#" aria-controls="usersTable" data-dt-idx="1" tabindex="0">1</a></li>--}}
                                    {{--<li class="paginate_button next disabled" id="usersTable_next"><a href="#" aria-controls="usersTable" data-dt-idx="2" tabindex="0">上一页</a></li>--}}
                                    {{--</ul>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div><!--page-inner  -->
        </div><!-- page-wrapper  -->
    </div><!-- wrapper  -->

   
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY 脚本 SCRIPTS -->
    <script src="/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="/js/jquery.metisMenu.js"></script>
       <!-- CUSTOM SCRIPTS -->
    <script src="/js/custom01.js"></script>
    <script>

        function  del_user(id) {
            if (confirm('您确定要删除这个用户吗？'))
                window.location="/admin/del_user/"+id  ;
        }

        function mod_user(id){
            window.location="/admin/mod_user/"+id ;
        }
    </script>

</body>
</html>




















