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

                            {{Auth::user()->username}}

                            <div class="inner-text" style="font-size:28px">
                                <span style="color:#F00">admin</span>


                            <br />
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            <ul class="dropdown-menu">
                        
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-right">
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        注销
                                    </a>

                                </div>
                            </li>
                            </ul>

                            </div>
                       </div>
                    </li>
                    <li>
                        <a class="active-menu" href="home"><i class="fa fa-dashboard "></i>主面板</a>
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
                        <h1 class="page-head-line">主面板</h1>
                        <h1 class="page-subhead-line">您可以通过以下的快捷方式快速访问系统。</h1>

                    </div>
                </div> <!-- row -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="main-box mb-dull">
                            <a href="#">
                                <i class="fa fa-group fa-5x"></i>
                                <a href="user_list.blade.php"><h5>用户管理</h5></a>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="main-box mb-dull">
                            <a href="#">
                                <i class="fa fa-bar-chart-o fa-5x"></i>
                                <a href="questionnaire_template.php"><h5 >问卷模板管理</h5></a>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="main-box mb-dull">
                            <a href="#">
                                <i class="fa fa-unlock-alt fa-5x"></i>
                                <a href="port_list.php"><h5>权限控制</h5></a>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="main-box mb-dull">
                            <a href="#">
                                <i class="fa fa-gears fa-5x"></i>
                                <a href="system_parameter.php"><h5>系统管理</h5></a>
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
    </div><!-- wrapper  -->

   
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY 脚本 SCRIPTS -->

    <script src="../js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="../js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../js/jquery.metisMenu.js"></script>
       <!-- CUSTOM SCRIPTS -->
    <script src="../js/custom01.js"></script>

    


</body>
</html>
