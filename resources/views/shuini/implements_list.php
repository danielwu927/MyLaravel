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
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"></a>
                        <img src="/img/admin.jpg" class="user-image" alt="User Image">

                            <div class="inner-text" style="font-size:28px">
                                <span style="color:#F00">admin</span>
                            <br />
                            <ul class="dropdown-menu">                      
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="javascript:void(0);" class="btn btn-default btn-flat" id="btnUserInfo">用户信息
                                    </a>
                                </div>
                                <div class="pull-right">
                                    <a href="javascript:void(0);" class="btn btn-default btn-flat" id="btnSignOut">注销
                                    </a>
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
                                <a href=""><i class="fa fa-bell"></i>新闻中心</a>
                            </li>
                            <li>
                                <a href="notification.html"><i class="fa fa-bell "></i>通知中心</a>
                            </li>                                                     
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o"></i>问卷管理<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="invoice.html"><i class="fa fa-file-excel-o"></i>新建问卷模板</a>
                            </li>
                            <li>
                                <a href="pricing.html"><i class="fa fa-file-excel-o"></i>问卷模板列表</a>
                            </li>                                                     
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-file-sound-o"></i>问卷邀请管理<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="invoice.html"><i class="fa fa-file-text"></i>登记问卷邀请</a>
                            </li>
                            <li>
                                <a href="pricing.html"><i class="fa fa-file-text"></i>问卷邀请列表</a>
                            </li>                          
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-group"></i>用户管理<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">                           
                             <li>
                                <a href="form.html"><i class="fa fa-user"></i>创建用户</a>
                            </li>
                            <li>
                                <a href="form-advance.html"><i class="fa fa-user"></i>用户列表</a>
                            </li>                          
                        </ul>
                    </li>                    
                    <li>
                        <a href="#"><i class="fa fa-unlock-alt"></i>权限管理 <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#"><i class="fa fa-key"></i>接口列表</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-key"></i>新建接口</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-key"></i>角色列表</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-key"></i>新建角色</a>
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
                        <h1 class="page-head-line">接口列表</h1>
                        <h1 class="page-subhead-line">您可以创建新的接口，也可以查看接口列表。</h1>
                    </div>
                </div> <!-- row -->
                <div class="content body">
                    <a class="btn btn-primary btn-flat" id="createNew_port">创建接口</a>
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




















