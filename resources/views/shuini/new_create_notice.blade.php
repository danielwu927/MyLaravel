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
                            <a href="user_list.blade.php"><i class="fa fa-user"></i>用户列表</a>
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
                    <h1 class="page-head-line">新建通知</h1>
                    <h1 class="page-subhead-line">您可以创建通知，通知会按照创建时间和优先级进行显示。</h1>
                </div>
            </div> <!-- row -->
            <div class="content body">
                <a href="notice_list.php" class="btn btn-primary btn-flat" id="return">返回</a>
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">填写通知信息</h3>
                    </div>
                    <form role="form" method="post" action="{{url('create_notice/create')}}">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="title">标题</label>
                                <input class="form-control" id="title" placeholder="请输入新闻标题" type="text">
                            </div>
                            <div class="form-group">
                                <label for="content">内容</label>
                                <input class="form-control" id="content" placeholder="请输入新闻内容" type="text">
                            </div>
                            <div class="form-group">
                                <label for="level">重要等级</label>
                                <select class="form-control" id="level">
                                    <option value="3">重要</option>
                                    <option value="2">临时</option>
                                    <option value="1">普通</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="beginTime">生效时间</label>
                                <input class="form-control" id="beginTime" placeholder="请输入生效时间" type="text">
                            </div>
                            <div class="form-group">
                                <label for="endTime">失效时间</label>
                                <input class="form-control" id="endTime" placeholder="请输入失效时间" type="text">
                            </div>
                        </div>
                        <div class="box-footer" align="right">
                            <input class="btn btn-primary btn-flat" id="submit" value="发布" type="button">
                        </div>
                    </form>
                </div>
            </div><!--content-->
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


</body>
</html>




















