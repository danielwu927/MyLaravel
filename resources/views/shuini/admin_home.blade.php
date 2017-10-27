<!DOCTYPE html>
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
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='/text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">后台管理</a>
            </div>
            <div class="header-right">
                <img src="/img/logo-whut.png" width="400" height="60"/></a>
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
                                <span onclick="fun()" style="color:#F00">admin</span>
                            <br />
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">欢迎继续使用
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a class="active-menu" onclick="fun0()"><i class="fa fa-dashboard "></i>主面板</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-desktop "></i>新闻与通知<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a onclick="fun1()"><i class="fa fa-bell"></i>新闻中心</a>
                            </li>
                            <li>
                                <a onclick="fun2()"><i class="fa fa-bell "></i>通知中心</a>
                            </li>                                                     
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o"></i>问卷管理<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a onclick="fun3()"><i class="fa fa-file"></i>新建问卷模板</a>
                            </li>
                            <li>
                                <a onclick="fun4()"><i class="fa fa-file"></i>问卷模板列表</a>
                            </li>                                                     
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-file-sound-o"></i>问卷邀请管理<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a onclick="fun5()"><i class="fa fa-file-text"></i>登记问卷邀请</a>
                            </li>
                            <li>
                                <a onclick="fun6()"><i class="fa fa-file-text"></i>问卷邀请列表</a>
                            </li>                          
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-group"></i>用户管理<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">                           
                             <li>
                                <a onclick="fun7()"><i class="fa fa-user"></i>创建用户</a>
                            </li>
                             <li>
                                <a onclick="fun8()"><i class="fa fa-user"></i>用户列表</a>
                            </li>                          
                        </ul>
                    </li>                    
                    <li>
                        <a href="#"><i class="fa fa-unlock-alt"></i>权限管理 <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a onclick="fun9()"><i class="fa fa-key"></i>接口列表</a>
                            </li>
                             <li>
                                <a onclick="fun10()"><i class="fa fa-key"></i>新建接口</a>
                            </li>
                            <li>
                                <a onclick="fun11()"><i class="fa fa-key"></i>角色列表</a>
                            </li>
                            <li>
                                <a onclick="fun12()"><i class="fa fa-key"></i>新建角色</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-gears"></i>系统控制面板<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a onclick="fun13()"><i class="fa fa-gear"></i>系统参数</a>
                            </li>
                        </ul>
                    </li>                  
                </ul>
            </div>
        </nav>
        <div id="linealParent"><!--定义一个父容器存放需要刷新的子容器-->
            <!--后台首页局部-->   
            <div id="homePart">
                <!-- navbar-default  -->
                <div id="page-wrapper">
                    <div id="page-inner">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="page-head-line">主面板</h1>
                                <h1 class="page-subhead-line">您可以通过以下的快捷方式快速访问系统。</h1>

                            </div>
                        </div> <!-- row -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="main-box mb-dull">
                                    <a href="#">
                                        <i class="fa fa-group fa-5x"></i>
                                        <a onclick="fun8()"><h5>用户管理</h5></a>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="main-box mb-dull">
                                    <a href="#">
                                        <i class="fa fa-bar-chart-o fa-5x"></i>
                                        <a onclick="fun4()"><h5 >问卷模板管理</h5></a>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="main-box mb-dull">
                                    <a href="#">
                                        <i class="fa fa-unlock-alt fa-5x"></i>
                                        <a onclick="fun9()"><h5>权限控制</h5></a>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="main-box mb-dull">
                                    <a href="#">
                                        <i class="fa fa-gears fa-5x"></i>
                                        <a onclick="fun13()"><h5>系统管理</h5></a>
                                    </a>
                                </div>
                            </div>
                        </div><!-- row -->
                        
                        <div class="row">
                            <div class="col-md-3 col-sm-6"><!--占位-->
                            </div>
                            <div class="col-md-6" >
                                <div id="carousel-example" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner"><!--重叠-->
                                        <div class="item active" align="center">
                                            <img src="/img/header/slider06.jpg">
                                        </div>
                                        <div class="item" align="center">
                                            <img src="/img/header/slider07.jpg">
                                        </div>
                                        <div class="item" align="center">
                                            <img src="/img/header/slider08.jpg">
                                        </div>
                                        <div class="item" align="center">
                                            <img src="/img/header/slider09.jpg">
                                        </div>
                                    </div><!--carousel-->
                                    <!--PREVIUS-NEXT BUTTONS-->
                                    <a class="left carousel-control" href="#carousel-example" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                    </a>
                                    <a class="right carousel-control" href="#carousel-example" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                    </a>
                                </div><!--carousel-->
                            </div><!--col-md-6-->
                        </div><!-- row -->
                                  
                    </div><!--page-inner  -->
                </div><!-- page-wrapper  -->
            </div>
            <!--新建新闻局部-->
            <div id="newCreateNew" style="display:none;">
                <div id="page-wrapper">
                    <div id="page-inner">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="page-head-line">新建新闻</h1>
                                <h1 class="page-subhead-line">您可以创建新闻，新闻会按照创建时间和优先级进行显示。</h1>
                            </div>
                        </div> <!-- row -->
                        <div class="content body">
                            <a onclick="fun1()" class="btn btn-primary btn-flat" id="return">返回</a>
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title">填写新闻信息</h3>
                                </div>
                                <form role="form">
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
                                            <label for="url">跳转地址</label>
                                            <input class="form-control" id="url" placeholder="请输入新闻点击跳转地址" type="text">
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
                                            <input class="form-control form_datetime" id="beginTime" placeholder="请选择新闻生效时间" readonly="" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label for="endTime">失效时间</label>
                                            <input class="form-control form_datetime" id="endTime" placeholder="请选择新闻失效时间" readonly="" type="text">
                                        </div>
                                    </div>
                                    <div class="box-footer" align="right">
                                        <input class="btn btn-primary btn-flat" id="submit" value="发布" type="button">
                                    </div>
                                </form>
                            </div>
                        </div><!--content-->
                    </div><!--page-inner  -->
                </div>
            </div>
            <!--新建通知局部-->
            <div id="newCreateNotice" style="display:none;">
                <div id="page-wrapper">
                    <div id="page-inner">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="page-head-line">新建通知</h1>
                                <h1 class="page-subhead-line">您可以创建通知，通知会按照创建时间和优先级进行显示。</h1>
                            </div>
                        </div> <!-- row -->
                        <div class="content body">
                            <a onclick="fun2()" class="btn btn-primary btn-flat" id="return">返回</a>
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title">填写通知信息</h3>
                                </div>
                                <form role="form">
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
                </div>
            </div>
            <!--新闻中心局部-->
            <div id="newList" style="display:none;">
                <div id="page-wrapper">
                    <div id="page-inner">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="page-head-line">新闻列表</h1>
                                <h1 class="page-subhead-line">您可以创建新闻，新闻会按照创建时间和优先级进行显示。</h1>
                            </div>
                        </div> <!-- row -->
                        <div class="content body">
                            <a onclick="fun14()" class="btn btn-primary btn-flat" id="createNew_news">新建新闻</a>
                            <div class="box box-body box-primary">
                                <div id="newsTable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="newsTable" class="table table-hover table-responsive dataTable no-footer" role="grid" aria-describedby="newsTable_info" style="width: 1015px;">
                                                <thead>
                                                    <tr role="row">
                                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 117px;">标题</th>
                                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 79px;">新闻等级</th>
                                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 174px;">生效时间</th>
                                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 174px;">失效时间</th>
                                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 184px;">发布时间</th>
                                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 60px;">状态</th>
                                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 150px;">操作</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr role="row" class="odd">
                                                        <td>2018水泥模板</td>
                                                        <td>重要</td>
                                                        <td>2017/7/28 下午2:25 </td>
                                                        <td>2020/2/11 上午8:00 </td>
                                                        <td>2017/7/28 下午2:25 </td>
                                                        <td>显示中</td>
                                                        <td><button class="btn btn-primary btn-xs btn-detail btn-flat" data-id="74">查看</button>                                    
                                                        <button class="btn btn-primary btn-xs btn-flat btn-pause" data-id="74">暂停</button>                                    
                                                        <button class="btn btn-danger btn-xs btn-delete btn-flat" data-id="74">删除</button></td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td>2019问卷模板</td>
                                                        <td>重要</td>
                                                        <td>2016/6/8 下午1:25 </td>
                                                        <td>2016/7/9 上午8:00 </td>
                                                        <td>2016/6/14 上午10:15 </td>
                                                        <td>显示中</td>
                                                        <td><button class="btn btn-primary btn-xs btn-detail btn-flat" data-id="72">查看</button>                                    
                                                        <button class="btn btn-primary btn-xs btn-flat btn-pause" data-id="72">暂停</button>                                    
                                                        <button class="btn btn-danger btn-xs btn-delete btn-flat" data-id="72">删除</button></td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td>2018问卷模板</td>
                                                        <td>重要</td>
                                                        <td>2016/6/8 上午10:36 </td>
                                                        <td>2016/7/9 上午8:00 </td>
                                                        <td>2016/6/8 上午10:36 </td>
                                                        <td>显示中</td>
                                                        <td><button class="btn btn-primary btn-xs btn-detail btn-flat" data-id="71">查看</button>                                    
                                                        <button class="btn btn-primary btn-xs btn-flat btn-pause" data-id="71">暂停</button>                                    
                                                        <button class="btn btn-danger btn-xs btn-delete btn-flat" data-id="71">删除</button></td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td>2015信息简表</td>
                                                        <td>重要</td>
                                                        <td>2016/6/6 下午3:07 </td>
                                                        <td>2017/6/3 上午8:00 </td>
                                                        <td>2016/6/6 下午3:07 </td>
                                                        <td>显示中</td>
                                                        <td><button class="btn btn-primary btn-xs btn-detail btn-flat" data-id="69">查看</button>                                    
                                                        <button class="btn btn-primary btn-xs btn-flat btn-pause" data-id="69">暂停</button>                                    
                                                        <button class="btn btn-danger btn-xs btn-delete btn-flat" data-id="69">删除</button></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div class="dataTables_info" id="newsTable_info" role="status" aria-live="polite">第 1 页 / 总 1 页</div>
                                        </div>
                                        <div class="col-sm-7" align="right">
                                            <div class="dataTables_paginate paging_simple_numbers" id="newsTable_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button previous disabled" id="newsTable_previous"><a href="#" aria-controls="newsTable" data-dt-idx="0" tabindex="0">下一页</a></li>
                                                <li class="paginate_button active"><a href="#" aria-controls="newsTable" data-dt-idx="1" tabindex="0">1</a></li>
                                                <li class="paginate_button next disabled" id="newsTable_next"><a href="#" aria-controls="newsTable" data-dt-idx="2" tabindex="0">上一页</a></li>
                                            </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--content body-->
                    </div><!--page-inner  -->
                </div>
            </div>
            <!--通知中心局部-->
            <div id="noticeList" style="display:none;">
                <div id="page-wrapper">
                    <div id="page-inner">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="page-head-line">通知列表</h1>
                                <h1 class="page-subhead-line">您可以发布最新通知，也可以管理往常通知。</h1>
                            </div>
                        </div> <!-- row -->
                        <div class="content body">
                        <a onclick="fun15()" class="btn btn-primary btn-flat" id="createNew_inform">新建通知</a>
                        <div class="box box-body box-primary">
                            <div id="newsTable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="newsTable" class="table table-hover table-responsive dataTable no-footer" role="grid" aria-describedby="newsTable_info" style="width: 1015px;">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 117px;">标题</th>
                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 79px;">通知等级</th>
                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 174px;">生效时间</th>
                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 174px;">失效时间</th>
                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 184px;">发布时间</th>
                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 60px;">状态</th>
                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 150px;">操作</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr role="row" class="odd">
                                                <td>2018水泥模板</td>
                                                <td>重要</td>
                                                <td>2017/7/28 下午2:25 </td>
                                                <td>2020/2/11 上午8:00 </td>
                                                <td>2017/7/28 下午2:25 </td>
                                                <td>显示中</td>
                                                <td><button class="btn btn-primary btn-xs btn-detail btn-flat" data-id="74">查看</button>                                    
                                                <button class="btn btn-primary btn-xs btn-flat btn-pause" data-id="74">暂停</button>                                    
                                                <button class="btn btn-danger btn-xs btn-delete btn-flat" data-id="74">删除</button></td>
                                            </tr>
                                          
                                            <tr role="row" class="odd">
                                                <td>2018问卷模板</td>
                                                <td>重要</td>
                                                <td>2016/6/8 上午10:36 </td>
                                                <td>2016/7/9 上午8:00 </td>
                                                <td>2016/6/8 上午10:36 </td>
                                                <td>显示中</td>
                                                <td><button class="btn btn-primary btn-xs btn-detail btn-flat" data-id="71">查看</button>                                     
                                                <button class="btn btn-primary btn-xs btn-flat btn-pause" data-id="71">暂停</button>                                    
                                                <button class="btn btn-danger btn-xs btn-delete btn-flat" data-id="71">删除</button></td>
                                            </tr>
                                        </tbody>
                                        </table>
                                    </div>
                                </div><!--row-->
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="dataTables_info" id="newsTable_info" role="status" aria-live="polite">第 1 页 / 总 1 页</div>
                                    </div>
                                    <div class="col-sm-7" align="right">
                                        <div class="dataTables_paginate paging_simple_numbers" id="newsTable_paginate">
                                        <ul class="pagination">
                                            <li class="paginate_button previous disabled" id="newsTable_previous"><a href="#" aria-controls="newsTable" data-dt-idx="0" tabindex="0">下一页</a></li>
                                            <li class="paginate_button active"><a href="#" aria-controls="newsTable" data-dt-idx="1" tabindex="0">1</a></li>
                                            <li class="paginate_button next disabled" id="newsTable_next"><a href="#" aria-controls="newsTable" data-dt-idx="2" tabindex="0">上一页</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div><!--row-->
                            </div>
                        </div>
                        </div><!--content body-->
                    </div><!--page-inner  -->
                </div>
            </div>    
            <!--系统参数局部-->
            <div id="systemParameter" style="display: none;">
                <div id="page-wrapper">
                    <div id="page-inner">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="page-head-line">系统参数控制</h1>
                                <h1 class="page-subhead-line">您可以查看,刷新及更新系统相关参数。</h1>
                            </div>
                        </div> <!-- row -->
                        <div class="content body">
                            <div class="box box-body box-primary">
                            <table class="table table-hover table-responsive">
                            <tbody>
                            <tr>
                                <th>#</th>
                                <th>说明</th>
                                <th>操作</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>刷新系统ACL，一般用于增加或删除访问接口的情况</td>
                                <td><button class="btn btn-danger btn-xs btn-flat" id="refreshACL">刷新ACL列表</button></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>退出所有当前登录的用户</td>
                                <td><button class="btn btn-danger btn-xs btn-flat" id="signOutAll">退出登录用户</button></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>创建问卷索引</td>
                                <td><button class="btn btn-danger btn-xs btn-flat" id="createWjIndex">创建索引</button></td>
                            </tr>
                            </tbody>
                            </table>
                            </div>
                        </div>
                    </div><!--page-inner  -->
                </div>
            </div>
            <!--创建用户局部-->
            <div id="createUser" style="display: none;">
                <div id="page-wrapper">
                    <div id="page-inner">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="page-head-line">创建新用户</h1>
                                <h1 class="page-subhead-line">您可以在此处创建新用户。</h1>
                            </div>
                        </div> <!-- row -->
                       
                        <div class="content body">
                            <a onclick="fun8()" class="btn btn-primary btn-flat" id="check_user_list">查看用户列表</a>
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title">填写用户信息</h3>
                                </div>
                                <form role="form">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="accountId">用户名</label>
                                            <input class="form-control" id="accountId" placeholder="请输入用户名" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">密码</label>
                                            <input class="form-control" id="password" placeholder="请输入初始密码" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label for="description">描述</label>
                                            <input class="form-control" id="description" placeholder="请输入相关描述信息" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">邮箱</label>
                                            <input class="form-control" id="email" placeholder="请输入邮箱" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label for="status">选择用户状态</label>
                                            <select class="form-control" id="status">
                                                <option value="1">激活</option>
                                                <option value="2">冻结</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="factoryId">选择用户所在水泥厂</label>
                                            <select class="form-control" id="factoryId">
                                                <option value="-1">测试用水泥厂</option>
                                                <option value="1">1</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="roleList">用户角色</label>
                                            <div id="roleList">
                                                <table class="table table-responsive">
                                                <tbody>
                                                    <tr>
                                                        <td><input value="19" name="role" type="checkbox">管理员</td>
                                                        <td><input value="20" name="role" type="checkbox">项目组负责人</td>
                                                        <td><input value="22" name="role" type="checkbox">水泥厂用户</td>
                                                    </tr>
                                                    <tr>
                                                        <td><input value="23" name="role" type="checkbox">课题组负责人</td>
                                                        <td><input value="24" name="role" type="checkbox">专家组</td>
                                                        <td><input value="25" name="role" type="checkbox">课题组成员</td>
                                                    </tr>
                                                </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-footer" align="right">
                                        <input class="btn btn-primary btn-flat" id="submit" value="创建用户" type="button">
                                    </div>
                                </form>
                            </div>
                        </div><!--content body-->
                    </div><!--page-inner  -->
                </div>
            </div>
            <!--用户列表局部-->
            <div id="userList" style="display: none;">
                <div id="page-wrapper">
                    <div id="page-inner">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="page-head-line">用户列表</h1>
                                <h1 class="page-subhead-line">您可以创建管理用户。</h1>
                            </div>
                        </div> <!-- row -->
                        <div class="content body">
                            <a onclick="fun7()" class="btn btn-primary btn-flat" id="new_create_user">新建用户</a><br><br>
                            <div class="box box-body box-primary">
                                <div id="usersTable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="dataTables_length" id="usersTable_length">
                                                <label>每页 <select name="usersTable_length" aria-controls="usersTable" class="form-control input-sm">
                                                <option value="10">10</option>
                                                <option value="20">20</option>
                                                <option value="50">50</option></select> 条</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div id="usersTable_filter" class="dataTables_filter" align="right">
                                                <label>搜索:<input class="form-control input-sm" placeholder="" aria-controls="usersTable" type="search"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="usersTable" class="table table-hover table-responsive dataTable no-footer" role="grid" aria-describedby="usersTable_info" style="width: 1015px;">
                                            <thead>
                                            <tr role="row">
                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 154px;">帐号</th>
                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 166px;">描述</th>
                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 130px;">所在水泥厂</th>
                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 227px;">邮箱</th>
                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 81px;">状态</th>
                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 180px;">操作</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr role="row" class="odd">
                                                <td>admin</td>
                                                <td>拥有最大权限</td>
                                                <td>-1</td>
                                                <td>11111@qq.com</td>
                                                <td>已激活</td>
                                                <td><button class="btn btn-danger btn-xs btn-freeze btn-flat" data-id="admin">冻结</button> 
                                                <button class="btn btn-primary btn-xs btn-modify btn-flat" data-id="admin">修改</button>                                       
                                                <button class="btn btn-danger btn-xs btn-delete btn-flat" data-id="admin">删除</button></td>
                                            </tr>
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
                                            <tr role="row" class="even">
                                                <td>zhang</td>
                                                <td>水泥厂用户1</td>
                                                <td>-1</td>
                                                <td>178791827@qq.com</td>
                                                <td>已激活</td>
                                                <td><button class="btn btn-danger btn-xs btn-freeze btn-flat" data-id="zhang">冻结</button> 
                                                <button class="btn btn-primary btn-xs btn-modify btn-flat" data-id="zhang">修改</button>                                       
                                                <button class="btn btn-danger btn-xs btn-delete btn-flat" data-id="zhang">删除</button></td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td>zhao</td>
                                                <td>项目组负责人2</td>
                                                <td>-1</td>
                                                <td>11@163.com</td>
                                                <td>已激活</td>
                                                <td><button class="btn btn-danger btn-xs btn-freeze btn-flat" data-id="zhao">冻结</button> 
                                                <button class="btn btn-primary btn-xs btn-modify btn-flat" data-id="zhao">修改</button>                                       
                                                <button class="btn btn-danger btn-xs btn-delete btn-flat" data-id="zhao">删除</button></td>
                                            </tr>
                                                <tr role="row" class="even">
                                                <td>zhouran</td>
                                                <td>课题组负责人8</td>
                                                <td>-1</td>
                                                <td>178791827@qq.com</td>
                                                <td>已激活</td>
                                                <td><button class="btn btn-danger btn-xs btn-freeze btn-flat" data-id="zhouran">冻结</button> 
                                                <button class="btn btn-primary btn-xs btn-modify btn-flat" data-id="zhouran">修改</button>                                       
                                                <button class="btn btn-danger btn-xs btn-delete btn-flat" data-id="zhouran">删除</button></td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td>zhuanjia</td>
                                                <td>专家</td>
                                                <td>-1</td>
                                                <td>121212@qq.com</td>
                                                <td>已激活</td>
                                                <td><button class="btn btn-danger btn-xs btn-freeze btn-flat" data-id="zhuanjia">冻结</button> 
                                                <button class="btn btn-primary btn-xs btn-modify btn-flat" data-id="zhuanjia">修改</button>                                       
                                                <button class="btn btn-danger btn-xs btn-delete btn-flat" data-id="zhuanjia">删除</button></td>
                                            </tr>
                                            </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div class="dataTables_info" id="usersTable_info" role="status" aria-live="polite">第 1 页 / 总 1 页</div>
                                        </div>
                                        <div class="col-sm-7" align="right">
                                            <div class="dataTables_paginate paging_simple_numbers" id="usersTable_paginate">
                                                <ul class="pagination"><li class="paginate_button previous disabled" id="usersTable_previous">
                                                <a href="#" aria-controls="usersTable" data-dt-idx="0" tabindex="0">下一页</a></li>
                                                <li class="paginate_button active"><a href="#" aria-controls="usersTable" data-dt-idx="1" tabindex="0">1</a></li>
                                                <li class="paginate_button next disabled" id="usersTable_next"><a href="#" aria-controls="usersTable" data-dt-idx="2" tabindex="0">上一页</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--page-inner  -->
                </div>
            </div>
            <!--接口列表局部-->
            <div id="portList" style="display: none;">
                <div id="page-wrapper">
                    <div id="page-inner">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="page-head-line">接口列表</h1>
                                <h1 class="page-subhead-line">您可以创建新的接口，也可以查看接口列表。</h1>
                            </div>
                        </div> <!-- row -->
                        <div class="content body">
                            <a onclick="fun10()" class="btn btn-primary btn-flat" id="createNew_port">创建接口</a>
                            <div class="box box-body box-primary">
                                <div id="privilegeTable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                    <div class="row">
                                        <div class="col-sm-6"></div>
                                        <div class="col-sm-6"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="privilegeTable" class="table table-hover table-responsive dataTable no-footer" role="grid" aria-describedby="privilegeTable_info" style="width: 1015px;">
                                            <thead>
                                            <tr role="row"><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 469px;">url</th>
                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 81px;">method</th>
                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 372px;">描述</th>
                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 63px;">操作</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr role="row" class="odd">
                                                <td>/user/info.html</td>
                                                <td>GET</td>
                                                <td>获取用户缩略信息</td>
                                                <td><button class="btn btn-danger btn-xs btn-delete btn-flat" data-id="3">删除</button></td>
                                            </tr>
                                            <tr role="row" class="even">
                                               <td>/main/home.html</td>
                                               <td>GET</td>
                                               <td>访问后台系统home页面</td>
                                               <td><button class="btn btn-danger btn-xs btn-delete btn-flat" data-id="4">删除</button></td>
                                            </tr>                  
                                            </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div class="dataTables_info" id="privilegeTable_info" role="status" aria-live="polite">Showing 1 to 10 of 46 entries</div>
                                        </div>
                                        <div class="col-sm-7" align="right">
                                            <div class="dataTables_paginate paging_simple_numbers" id="privilegeTable_paginate">
                                                <ul class="pagination">
                                                    <li class="paginate_button previous disabled" id="privilegeTable_previous"><a href="#" aria-controls="privilegeTable" data-dt-idx="0" tabindex="0">Previous</a></li>
                                                    <li class="paginate_button active"><a href="#" aria-controls="privilegeTable" data-dt-idx="1" tabindex="0">1</a></li>
                                                    <li class="paginate_button "><a href="#" aria-controls="privilegeTable" data-dt-idx="2" tabindex="0">2</a></li>
                                                    <li class="paginate_button "><a href="#" aria-controls="privilegeTable" data-dt-idx="3" tabindex="0">3</a></li>
                                                    <li class="paginate_button "><a href="#" aria-controls="privilegeTable" data-dt-idx="4" tabindex="0">4</a></li>
                                                    <li class="paginate_button "><a href="#" aria-controls="privilegeTable" data-dt-idx="5" tabindex="0">5</a></li>
                                                    <li class="paginate_button next" id="privilegeTable_next"><a href="#" aria-controls="privilegeTable" data-dt-idx="6" tabindex="0">Next</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--content-->
                    </div><!--page-inner  -->
                </div>    
            </div>
            <!--新建接口局部-->
            <div id="newCreatePort" style="display: none;">
                <div id="page-wrapper">
                    <div id="page-inner">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="page-head-line">新建接口</h1>
                                <h1 class="page-subhead-line">您可以创建新的REST访问接口。</h1>
                            </div>
                        </div> <!-- row -->
                        <div class="content body">
                            <a onclick="fun9()" class="btn btn-primary btn-flat" id="check_portlist">查看接口列表</a>
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title">填写接口信息</h3>
                                </div>
                                <form role="form">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="url">接口地址</label>
                                            <input class="form-control" id="url" placeholder="请输入REST接口的url" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label for="method">方法类型</label>
                                            <div id="method">
                                                <input value="GET" name="method" type="checkbox"> GET
                                                <input value="POST" name="method" type="checkbox"> POST
                                                <input value="PUT" name="method" type="checkbox"> PUT
                                                <input value="DELETE" name="method" type="checkbox"> DELETE
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="description">接口描述</label>
                                            <input class="form-control" id="description" placeholder="请输入接口的描述信息" type="text">
                                        </div>
                                    </div>
                                    <div class="box-footer" align="right">
                                        <input class="btn btn-primary btn-flat" id="submit" value="创建" type="button">
                                    </div>
                                </form>
                            </div>
                        </div><!--content-->
                    </div><!--page-inner  -->
                </div>
            </div>
            <!--角色列表局部-->
            <div id="roleList" style="display: none;">
                <div id="page-wrapper">
                    <div id="page-inner">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="page-head-line">角色列表</h1>
                                <h1 class="page-subhead-line">您可以创建新的角色，也可以查看角色列表。</h1>
                            </div>
                        </div> <!-- row -->
                        <div class="content body">
                            <a onclick="fun12()" class="btn btn-primary btn-flat" id="new_create_user">新建角色</a>
                            <div class="box box-body box-primary">
                                <div id="roleTable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                    <div class="row">
                                        <div class="col-sm-6"></div>
                                        <div class="col-sm-6"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="roleTable" class="table table-hover table-responsive dataTable no-footer" role="grid" aria-describedby="roleTable_info" style="width: 1049px;">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 290px;">名字</th>
                                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 465px;">描述</th>
                                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 246px;">操作</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr role="row" class="odd">
                                                    <td>管理员</td>
                                                    <td>拥有最大权限</td>
                                                    <td>
                                                        <button class="btn btn-primary btn-xs btn-modify btn-flat" data-id="19">修改</button>                                
                                                        <button class="btn btn-danger btn-xs btn-delete btn-flat" data-id="19">删除</button>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td>项目组负责人</td>
                                                    <td>课题组（赵，王）</td>
                                                    <td>
                                                        <button class="btn btn-primary btn-xs btn-modify btn-flat" data-id="20">修改</button>                                
                                                        <button class="btn btn-danger btn-xs btn-delete btn-flat" data-id="20">删除</button>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="odd">
                                                    <td>水泥厂用户</td>
                                                    <td>填写问卷</td>
                                                    <td>
                                                        <button class="btn btn-primary btn-xs btn-modify btn-flat" data-id="22">修改</button>                                
                                                        <button class="btn btn-danger btn-xs btn-delete btn-flat" data-id="22">删除</button>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td>课题组负责人</td>
                                                    <td>负责项目组的输入查看</td>
                                                    <td>
                                                        <button class="btn btn-primary btn-xs btn-modify btn-flat" data-id="23">修改</button>                                
                                                        <button class="btn btn-danger btn-xs btn-delete btn-flat" data-id="23">删除</button>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="odd">
                                                    <td>专家组</td>
                                                    <td>只负责查看</td>
                                                    <td>
                                                        <button class="btn btn-primary btn-xs btn-modify btn-flat" data-id="24">修改</button>                                
                                                        <button class="btn btn-danger btn-xs btn-delete btn-flat" data-id="24">删除</button>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td>课题组成员</td>
                                                    <td>查看</td> 
                                                    <td>
                                                        <button class="btn btn-primary btn-xs btn-modify btn-flat" data-id="25">修改</button>                                
                                                        <button class="btn btn-danger btn-xs btn-delete btn-flat" data-id="25">删除</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div class="dataTables_info" id="roleTable_info" role="status" aria-live="polite">Showing 1 to 6 of 6 entries</div>
                                        </div>
                                        <div class="col-sm-7" align="right">
                                            <div class="dataTables_paginate paging_simple_numbers" id="roleTable_paginate">
                                                <ul class="pagination">
                                                    <li class="paginate_button previous disabled" id="roleTable_previous">
                                                        <a href="#" aria-controls="roleTable" data-dt-idx="0" tabindex="0">Previous</a>
                                                    </li>
                                                    <li class="paginate_button active">
                                                        <a href="#" aria-controls="roleTable" data-dt-idx="1" tabindex="0">1</a>
                                                    </li>
                                                    <li class="paginate_button next disabled" id="roleTable_next">
                                                        <a href="#" aria-controls="roleTable" data-dt-idx="2" tabindex="0">Next</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--content-->
                    </div><!--page-inner  -->
                </div>
            </div>
            <!--新建角色局部-->
            <div id="newCreateRole" style="display: none;">
                <div id="page-wrapper">
                    <div id="page-inner">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="page-head-line">新建角色</h1>
                                <h1 class="page-subhead-line">您可以创建新的角色。</h1>
                            </div>
                        </div> <!-- row -->
                        <div class="content body">
                            <a onclick="fun11()" class="btn btn-primary btn-flat" id="check_userlist">查看角色列表</a>
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title">填写角色信息</h3>
                                </div>
                                <form role="form">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="name">名称</label>
                                            <input class="form-control" id="name" placeholder="请输入角色名称" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label for="description">角色描述</label>
                                            <input class="form-control" id="description" placeholder="请输入角色描述信息" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label for="privilegeList">访问接口</label>
                                            <div id="privilegeList">
                                                <table class="table table-responsive">
                                                <tbody>
                                                    <tr>
                                                        <td><input value="3" name="privilege" type="checkbox">获取用户缩略信息[GET]</td>
                                                        <td><input value="4" name="privilege" type="checkbox">访问后台系统home页面[GET]</td>
                                                        <td><input value="5" name="privilege" type="checkbox">访问后台系统控制面板[GET]</td>
                                                    </tr>
                                                    <tr>
                                                        <td><input value="6" name="privilege" type="checkbox">访问新闻列表页面[GET]</td>
                                                        <td><input value="7" name="privilege" type="checkbox">加载新闻列表页数据[GET]</td>
                                                        <td><input value="8" name="privilege" type="checkbox">访问新建新闻页[GET]</td>
                                                    </tr>
                                                    <tr>
                                                        <td><input value="9" name="privilege" type="checkbox">发布新闻[POST]</td>
                                                        <td><input value="10" name="privilege" type="checkbox">删除新闻[DELETE]</td>
                                                        <td><input value="11" name="privilege" type="checkbox">获取新闻详情[GET]</td>
                                                    </tr>
                                                    <tr>
                                                        <td><input value="12" name="privilege" type="checkbox">切换新闻发布与暂停状态[PUT]</td>
                                                        <td><input value="13" name="privilege" type="checkbox">访问问卷模板创建页面[GET]</td>
                                                        <td><input value="14" name="privilege" type="checkbox">访问问卷模板列表页面[GET]</td>
                                                    </tr>
                                                    <tr>
                                                        <td><input value="15" name="privilege" type="checkbox">临时保存问卷模板，包含更新功能[POST]</td>
                                                        <td><input value="16" name="privilege" type="checkbox">临时保存问卷模板，包含更新功能[PUT]</td>
                                                        <td><input value="17" name="privilege" type="checkbox">获取问卷模板列表[GET]</td>
                                                    </tr>
                                                    <tr>
                                                        <td><input value="18" name="privilege" type="checkbox">删除问卷模板[DELETE]</td>
                                                        <td><input value="19" name="privilege" type="checkbox">发布问卷模板[PUT]</td>
                                                        <td><input value="20" name="privilege" type="checkbox">转到问卷模板详情页[GET]</td>
                                                    </tr>
                                                    <tr>
                                                        <td><input value="23" name="privilege" type="checkbox">进入新建用户界面[GET]</td>
                                                        <td><input value="24" name="privilege" type="checkbox">进入用户列表页面[GET]</td>
                                                        <td><input value="25" name="privilege" type="checkbox">获取用户列表数据[GET]</td>
                                                    </tr>
                                                    <tr>
                                                        <td><input value="26" name="privilege" type="checkbox">删除用户[DELETE]</td>
                                                        <td><input value="27" name="privilege" type="checkbox">新增用户[POST]</td>
                                                        <td><input value="28" name="privilege" type="checkbox">进入用户编辑页面[GET]</td>
                                                    </tr>
                                                    <tr>
                                                        <td><input value="29" name="privilege" type="checkbox">获取用户信息编辑页面数据[GET]</td>
                                                        <td><input value="30" name="privilege" type="checkbox">更新用户信息[PUT]</td>
                                                        <td><input value="31" name="privilege" type="checkbox">访问角色创建页面[GET]</td>
                                                    </tr>
                                                    <tr>
                                                        <td><input value="32" name="privilege" type="checkbox">创建角色[POST]</td>
                                                        <td><input value="33" name="privilege" type="checkbox">进去角色列表页面[GET]</td>
                                                        <td><input value="34" name="privilege" type="checkbox">获取角色列表数据[GET]</td>
                                                    </tr>
                                                    <tr>
                                                        <td><input value="35" name="privilege" type="checkbox">删除角色信息[DELETE]</td>
                                                        <td><input value="36" name="privilege" type="checkbox">进入角色编辑页面[GET]</td>
                                                        <td><input value="37" name="privilege" type="checkbox">获取角色编辑页面数据[GET]</td>
                                                    </tr>
                                                    <tr>
                                                        <td><input value="38" name="privilege" type="checkbox">更新角色信息[PUT]</td>
                                                        <td><input value="39" name="privilege" type="checkbox">进入接口创建页面[GET]</td>
                                                        <td><input value="40" name="privilege" type="checkbox">创建新接口[POST]</td>
                                                    </tr>
                                                    <tr>
                                                        <td><input value="41" name="privilege" type="checkbox">进入接口列表页面[GET]</td>
                                                        <td><input value="42" name="privilege" type="checkbox">获取接口列表数据[GET]</td>
                                                        <td><input value="43" name="privilege" type="checkbox">删除接口[DELETE]</td>
                                                    </tr>
                                                    <tr>
                                                        <td><input value="44" name="privilege" type="checkbox">进入系统参数控制页面[GET]</td>
                                                        <td><input value="45" name="privilege" type="checkbox">刷新ACL列表[GET]</td>
                                                        <td><input value="46" name="privilege" type="checkbox">强制退出其他用户[GET]</td>
                                                    </tr>
                                                    <tr>
                                                        <td><input value="47" name="privilege" type="checkbox">登记问卷邀请[GET]</td>
                                                        <td><input value="48" name="privilege" type="checkbox">问卷邀请登记列表[GET]</td>
                                                        <td><input value="50" name="privilege" type="checkbox">保存问卷[POST]</td>
                                                    </tr>
                                                    <tr>
                                                        <td><input value="51" name="privilege" type="checkbox">提交问卷[PUT]</td>
                                                        <td>&nbsp;</td>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-footer" align="right">
                                        <input class="btn btn-primary btn-flat" id="submit" value="创建" type="button">
                                    </div>
                                </form>
                            </div>
                        </div><!--content-->
                    </div><!--page-inner  -->
                </div>
            </div>
            <!--登记问卷邀请局部-->
            <div id="registerQuestionnaireInvite" style="display: none;">
                <div id="page-wrapper">
                    <div id="page-inner">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="page-head-line">登记模板</h1>
                                <h1 class="page-subhead-line">您可以登记已发放问卷的工厂信息。</h1>
                            </div>
                        </div> <!-- row -->              
                        <div class="row">
                            <div class="col-md-12">
                                <div class="box box-primary">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">登记已发问卷厂家</h3>
                                    </div>
                                    <form role="form" class="row">
                                        <div class="box-body">
                                            <div class="form-group">
                                                <span class="col-md-2" style="text-align:right">区域：</span>
                                                <select id="area" style="width:300px;" tabindex="-1" class="select2-hidden-accessible" aria-hidden="true">
                                                    <option value="-1">请选择</option>
                                                    <option value="0">华北地区京津冀蒙晋</option>
                                                    <option value="1">东北地区黑吉辽</option>
                                                    <option value="2">华东地区沪皖闽苏赣鲁浙</option>
                                                    <option value="5">西北地区陇宁青陕新</option>
                                                    <option value="4">西南地区渝川黔藏云</option>
                                                    <option value="3">中南地区粤桂琼豫鄂湘</option>
                                                </select>
                                                <span class="select2 select2-container select2-container--default" dir="ltr" style="width: 300px;">
                                                    <span class="selection">
                                                        <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-area-container">
                                                            <span class="select2-selection__rendered" id="select2-area-container" title="请选择">请选择</span>
                                                            <span class="select2-selection__arrow" role="presentation">
                                                                 <b role="presentation"></b>
                                                            </span>
                                                        </span>
                                                    </span>
                                                    <span class="dropdown-wrapper" aria-hidden="true"></span>
                                                </span>
                                            </div>
                                            <div class="form-group">
                                                <span class="col-md-2" style="text-align:right">省份：</span> 
                                                <select id="province_select" style="width:300px;" tabindex="-1" class="select2-hidden-accessible" aria-hidden="true">
                                                    <option value="-1">请选择</option>
                                                    <option>北京</option>
                                                    <option>天津</option>
                                                    <option>河北</option>
                                                    <option>山西</option>
                                                    <option>内蒙古</option>
                                                    <option>辽宁</option>
                                                    <option>吉林</option>
                                                    <option>黑龙江</option>
                                                    <option>上海</option>
                                                    <option>江苏</option>
                                                    <option>浙江</option>
                                                    <option>安徽</option>
                                                    <option>福建</option>
                                                    <option>江西</option>
                                                    <option>山东</option>
                                                    <option>河南</option>
                                                    <option>湖北</option>
                                                    <option>湖南</option>
                                                    <option>广东</option>
                                                    <option>广西</option>
                                                    <option>海南</option>
                                                    <option>重庆</option>
                                                    <option>四川</option>
                                                    <option>贵州</option>
                                                    <option>云南</option>
                                                    <option>西藏</option>
                                                    <option>陕西</option>
                                                    <option>甘肃</option>
                                                    <option>青海</option>
                                                    <option>宁夏</option>
                                                    <option>新疆</option>
                                                    <option>香港</option>
                                                    <option>澳门</option>
                                                </select>
                                                <span class="select2 select2-container select2-container--default" dir="ltr" style="width: 300px;">
                                                    <span class="selection">
                                                        <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-province_select-container">
                                                            <span class="select2-selection__rendered" id="select2-province_select-container" title="请选择">请选择</span>
                                                            <span class="select2-selection__arrow" role="presentation">
                                                                <b role="presentation"></b>
                                                            </span>
                                                        </span>
                                                    </span>
                                                    <span class="dropdown-wrapper" aria-hidden="true"></span>
                                                </span>
                                            </div>
                                            <div class="form-group">
                                                <span class="col-md-2" style="text-align:right">市区：</span> 
                                                <select id="city_select" style="width:300px;" tabindex="-1" class="select2-hidden-accessible" aria-hidden="true">
                                                    <option value="-1"> 请选择</option>
                                                </select>
                                                <span class="select2 select2-container select2-container--default" dir="ltr" style="width: 300px;">
                                                    <span class="selection">
                                                        <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-city_select-container">
                                                            <span class="select2-selection__rendered" id="select2-city_select-container" title=" 请选择"> 请选择</span>
                                                            <span class="select2-selection__arrow" role="presentation">
                                                                <b role="presentation"></b>
                                                            </span>
                                                        </span>
                                                    </span>
                                                    <span class="dropdown-wrapper" aria-hidden="true"></span>
                                                </span>
                                            </div>
                                            <div class="form-group">
                                                <span class="col-md-2" style="text-align:right">水泥厂：</span> 
                                                <select id="company_select" style="width:300px;" tabindex="-1" class="select2-hidden-accessible" aria-hidden="true">
                                                    <option value="-1">请选择</option>
                                                </select>
                                                <span class="select2 select2-container select2-container--default" dir="ltr" style="width: 300px;">
                                                    <span class="selection">
                                                        <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-company_select-container">
                                                            <span class="select2-selection__rendered" id="select2-company_select-container" title="请选择">请选择</span>
                                                            <span class="select2-selection__arrow" role="presentation">
                                                                <b role="presentation"></b>
                                                            </span>
                                                        </span>
                                                    </span>
                                                    <span class="dropdown-wrapper" aria-hidden="true"></span>
                                                </span>
                                            </div>
                                            <div class="form-group">
                                                <span class="col-md-2" style="text-align:right">问卷版本</span>
                                                <select id="wj_version" style="width:300px;" tabindex="-1" class="select2-hidden-accessible" aria-hidden="true">
                                                    <option value="-1"> 请选择</option>
                                                    <option value="0">2018水泥模板</option>
                                                </select>
                                                <span class="select2 select2-container select2-container--default" dir="ltr" style="width: 300px;">
                                                    <span class="selection">
                                                        <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-wj_version-container">
                                                            <span class="select2-selection__rendered" id="select2-wj_version-container" title=" 请选择"> 请选择</span><span class="select2-selection__arrow" role="presentation">
                                                                <b role="presentation"></b>
                                                            </span>
                                                        </span>
                                                    </span>
                                                    <span class="dropdown-wrapper" aria-hidden="true"></span>
                                                </span>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-2" style="text-align:right"  >
                                                    <input class="btn btn-primary btn-flat" id="submit" value="提交" type="button">
                                                </div>
                                            </div>
                                        </div><!--box-body-->
                                    </form>
                                </div><!--box-->
                            </div>
                        </div><!--row-->
                    </div><!--page-inner  -->
                </div>
            </div>
            <!--问卷邀请列表局部-->
            <div id="questionnaireInviteList" style="display: none;">
                <div id="page-wrapper">
                    <div id="page-inner">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="page-head-line">发放列表</h1>
                                <h1 class="page-subhead-line">您可以查看已发放问卷的工厂信息。</h1>
                            </div>
                        </div> <!-- row -->              
                        <div class="row">
                            <div class="col-md-12">
                                <div class="box">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">已发问卷厂家列表</h3>
                                    </div>
                                    <div class="box box-body box-primary">
                                        <div id="inviteList_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="dataTables_length" id="inviteList_length">
                                                        <label>每页 <select name="inviteList_length" aria-controls="inviteList" class="form-control input-sm">
                                                        <option value="10">10</option>
                                                        <option value="20">20</option>
                                                        <option value="50">50</option></select> 条</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6" align="right">
                                                    <div id="inviteList_filter" class="dataTables_filter">
                                                        <label>搜索:<input class="form-control input-sm" placeholder="" aria-controls="inviteList" type="search"></label>
                                                     </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <table id="inviteList" class="table table-hover table-responsive dataTable no-footer" role="grid" aria-describedby="inviteList_info" style="width: 1015px;">
                                                    <thead>
                                                        <tr role="row"><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 45px;">编号</th>
                                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 339px;">公司名称</th>
                                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 314px;">公司地址</th>
                                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 103px;">问卷名称</th>
                                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 52px;">邀请人</th>
                                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 111px;">操作</th></tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr role="row" class="odd">
                                                            <td>1</td>
                                                            <td>北京水泥厂有限责任公司</td>
                                                            <td>北京市昌平区马池口镇北小营村东</td>
                                                            <td>2015信息简表</td>
                                                            <td>zhao</td>
                                                            <td>
                                                                <button disabled="" class="btn btn-success btn-xs btn-flat btn-flat" data-id="1">已接收</button>
                                                                <button class="btn btn-primary btn-xs btn-modify btn-show" data-id="1">查看</button>
                                                            </td>
                                                        </tr>
                                                        <tr role="row" class="even">
                                                            <td>2</td>
                                                            <td>北京双山水泥集团水泥二厂</td>
                                                            <td>北京市房山区河北镇磁家务村东</td>
                                                            <td>2015信息简表</td>
                                                            <td>zhao</td>
                                                            <td>
                                                                <button disabled="" class="btn btn-success btn-xs btn-flat btn-flat" data-id="2">已接收</button>
                                                                <button class="btn btn-primary btn-xs btn-modify btn-show" data-id="2">查看</button>
                                                            </td>
                                                        </tr>
                                                        <tr role="row" class="odd"><td>13</td>
                                                            <td>天津振兴水泥有限公司</td>
                                                            <td>天津市北辰区引河桥北</td>
                                                            <td>2015信息简表</td>
                                                            <td>admin</td>
                                                            <td>
                                                                <button disabled="" class="btn btn-success btn-xs btn-flat btn-flat" data-id="13">已接收</button>
                                                                <button class="btn btn-primary btn-xs btn-modify btn-show" data-id="13">查看</button>
                                                            </td>
                                                        </tr>
                                     
                                                    </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="row">
                                                 <div class="col-sm-5">
                                                    <div class="dataTables_info" id="inviteList_info" role="status" aria-live="polite">第 1 页 / 总 1 页</div>
                                                 </div>
                                                 <div class="col-sm-7" align="right">
                                                     <div class="dataTables_paginate paging_simple_numbers" id="inviteList_paginate">
                                                     <ul class="pagination">
                                                         <li class="paginate_button previous disabled" id="inviteList_previous">
                                                             <a href="#" aria-controls="inviteList" data-dt-idx="0" tabindex="0">下一页</a>
                                                         </li>
                                                         <li class="paginate_button active">
                                                             <a href="#" aria-controls="inviteList" data-dt-idx="1" tabindex="0">1</a>
                                                         </li>
                                                         <li class="paginate_button next disabled" id="inviteList_next">
                                                             <a href="#" aria-controls="inviteList" data-dt-idx="2" tabindex="0">上一页</a>
                                                         </li>
                                                     </ul>
                                                     </div>
                                                 </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--page-inner  -->
                </div>
            </div>
            <!--新建问卷模板局部-->
            <div id="newCreateQuestionnaireTemplate" style="display: none;">
                <div id="page-wrapper">
                    <div id="page-inner">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="page-head-line">新建问卷模板</h1>
                                <h1 class="page-subhead-line">您可以创建新的问卷模板。</h1>
                            </div>
                        </div> <!-- row -->
                        <div class="content body">
                        <a onclick="fun4()" class="btn btn-primary btn-flat" id="check_template">查看问卷模板列表</a>
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">填写模板信息</h3>
                            </div>
                            <form role="form">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="name">问卷模板名称</label>
                                        <input class="form-control" id="name" placeholder="请输入模板名称" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label for="desc">问卷模板描述</label>
                                        <input class="form-control" id="desc" placeholder="问卷模板描述" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label for="beginTime">生效时间</label>
                                        <input class="form-control" id="beginTime" placeholder="问卷生效时间" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label for="endTime">失效时间</label>
                                        <input class="form-control" id="endTime" placeholder="问卷失效时间" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label for="pageUrl">pageUrl</label>
                                        <input class="form-control" id="pageUrl" placeholder="页面Url" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input id="publishedPerson" value="admin" type="hidden">
                                    </div>
                                </div>
                                <div class="box-footer" align="right">
                                    <input class="btn btn-primary btn-flat" id="submit" value="提交" type="button"> 
                                </div>
                            </form>
                        </div>
                        </div><!--content body-->
                    </div><!--page-inner  -->
                </div>
            </div>
            <!--问卷模板列表局部-->
            <div id="questionnaireTemplateList" style="display: none;">
                <div id="page-wrapper">
                    <div id="page-inner">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="page-head-line">问卷模板列表</h1>
                                <h1 class="page-subhead-line">您可以管理已经创建的问卷模板，或创建新的问卷模板。</h1>
                            </div>
                        </div> <!-- row -->
                       
                        <div class="content body">
                            <a onclick="fun3()" class="btn btn-primary btn-flat" id="createNew_template">创建新问卷模板</a><br><br>
                            <div class="box box-body box-primary">
                            <div id="wjTemplateTable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                            <div class="row"><div class="col-sm-6"></div>
                            <div class="col-sm-6"></div>
                            </div>
                            <div class="row">
                            <div class="col-sm-12">
                            <table id="wjTemplateTable" class="table table-hover table-responsive dataTable no-footer" role="grid" aria-describedby="wjTemplateTable_info" style="width: 1015px;">
                            <thead>
                                <tr role="row"><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 131px;">问卷名称</th>
                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 236px;">问卷描述</th>
                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 184px;">生效时间</th>
                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 194px;">失效时间</th>
                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 68px;">状态</th>
                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 142px;">操作</th></tr>
                            </thead>
                            <tbody>
                                <tr role="row" class="odd"><td>2015信息简表</td>
                                <td>2015</td><td>2016/6/1 上午8:00 </td>
                                <td>2017/6/3 上午8:00 </td>
                                <td>已发布</td>
                                <td><button class="btn btn-primary btn-xs btn-show btn-flat" data-id="81">查看问卷</button>                                       
                                <button class="btn btn-danger btn-xs btn-delete btn-flat" data-id="81">删除</button></td>
                                </tr>
                                <tr role="row" class="even">
                                <td>测试问卷</td>
                                <td>这是一个用来测试的问卷</td>
                                <td>2017/1/4 上午8:00 </td>
                                <td>2017/1/6 上午8:00 </td>
                                <td>已发布</td>
                                <td><button class="btn btn-primary btn-xs btn-show btn-flat" data-id="83">查看问卷</button>                                       
                                <button class="btn btn-danger btn-xs btn-delete btn-flat" data-id="83">删除</button></td>
                                </tr>
                                <tr role="row" class="odd">
                                <td>2018水泥模板</td>
                                <td>最新版本</td>
                                <td>2017/7/1 上午8:00 </td>
                                <td>2020/2/11 上午8:00 </td>
                                <td>已发布</td>
                                <td><button class="btn btn-primary btn-xs btn-show btn-flat" data-id="84">查看问卷</button>                                      
                                <button class="btn btn-danger btn-xs btn-delete btn-flat" data-id="84">删除</button></td>
                                </tr>
                            </tbody>
                            </table>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-sm-5">
                                <div class="dataTables_info" id="wjTemplateTable_info" role="status" aria-live="polite">第 1 页 / 总 1 页</div>
                            </div>
                            <div class="col-sm-7" align="right">
                                <div class="dataTables_paginate paging_simple_numbers" id="wjTemplateTable_paginate">
                                    <ul class="pagination">
                                    <li class="paginate_button previous disabled" id="wjTemplateTable_previous"><a href="#" aria-controls="wjTemplateTable" data-dt-idx="0" tabindex="0">上一页</a></li>
                                    <li class="paginate_button active"><a href="#" aria-controls="wjTemplateTable" data-dt-idx="1" tabindex="0">1</a></li>
                                    <li class="paginate_button next disabled" id="wjTemplateTable_next"><a href="#" aria-controls="wjTemplateTable" data-dt-idx="2" tabindex="0">下一页</a></li>
                                    </ul>
                                </div>
                            </div>
                            </div>
                            </div>
                        </div><!--content body-->
                    </div><!--page-inner  -->
                </div>
            </div>        
        </div>
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
    <script type="text/javascript">
        function fun(){
            var info=confirm("确认退出？");
            if(info==true)
                window.open("login");
        }//admin控制退出
        function fun0(){
            $("#linealParent").children().show();
            $("#linealParent #homePart").siblings().hide();
        }//后台局部显示首页
        function fun1(){
            $("#linealParent").children().show();
            $("#linealParent #newList").siblings().hide();
        }//新闻中心局部刷新       
        function fun2(){
            $("#linealParent").children().show();
            $("#linealParent #noticeList").siblings().hide();
        }//通知中心局部刷新
        function fun3(){
            $("#linealParent").children().show();
            $("#linealParent #newCreateQuestionnaireTemplate").siblings().hide();
        }//新建问卷模板局部刷新
        function fun4(){
            $("#linealParent").children().show();
            $("#linealParent #questionnaireTemplateList").siblings().hide();
        }//问卷模板列表局部刷新
        function fun5(){
            $("#linealParent").children().show();
            $("#linealParent #registerQuestionnaireInvite").siblings().hide();
        }//登记问卷邀请局部刷新
        function fun6(){
            $("#linealParent").children().show();
            $("#linealParent #questionnaireInviteList").siblings().hide();
        }//问卷邀请列表局部刷新
        function fun7(){
            $("#linealParent").children().show();
            $("#linealParent #createUser").siblings().hide();
        }//创建用户局部刷新
        function fun8(){
            $("#linealParent").children().show();
            $("#linealParent #userList").siblings().hide();
        }//用户列表局部刷新
        function fun9(){                
            $("#linealParent").children().show();
            $("#linealParent #portList").siblings().hide();
        }//接口列表局部刷新
        function fun10(){
            $("#linealParent").children().show();
            $("#linealParent #newCreatePort").siblings().hide();
        }//新建接口局部刷新
        function fun11(){
            $("#linealParent").children().show();
            $("#linealParent #roleList").siblings().hide();
        }//角色列表局部刷新
        function fun12(){
            $("#linealParent").children().show();
            $("#linealParent #newCreateRole").siblings().hide();
        }//新建角色局部刷新
        function fun13(){
            $("#linealParent").children().show();        
            $("#linealParent #systemParameter").siblings().hide();        
        }//系统参数局部刷新
        function fun14(){
            $("#linealParent").children().show();        
            $("#linealParent #newCreateNew").siblings().hide();    
        }//新建消息局部刷新
        function fun15(){
            $("#linealParent").children().show();        
            $("#linealParent #newCreateNotice").siblings().hide();    
        }//新建通知局部刷新
    </script>
</body>
</html>