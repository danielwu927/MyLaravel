<!DOCTYPE html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>后台管理操作</title>
    <!-- BOOTSTRAP 引导 STYLES-->
    <link href="css/bootstrap01.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC 样式 STYLES-->
    <link href="css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN 风格 STYLES-->
    <link href="css/custom.css" rel="stylesheet" />
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
                <img src="img/logo-whut.png" width="400" height="50"/></a>
            </div>
        </nav>
        <!-- navbar -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">                          
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="img/admin.jpg" class="user-image" alt="User Image">

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
                        <a class="active-menu" href="home.html"><i class="fa fa-dashboard "></i>主面板</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-desktop "></i>新闻与通知<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="panel-tabs.html"><i class="fa fa-bell"></i>新闻中心</a>
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
                                <a href="#"><i class="fa fa-file-text"></i>登记问卷邀请</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-file-text"></i>问卷邀请列表</a>
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
                                <a href="xt_parameter.html"><i class="fa fa-gear"></i>系统参数</a>
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
                        <h1 class="page-head-line">新建角色</h1>
                        <h1 class="page-subhead-line">您可以创建新的角色。</h1>
                    </div>
                </div> <!-- row -->
                <div class="content body">
                    <a class="btn btn-primary btn-flat" id="creat_newuser">查看角色列表</a>
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
        </div><!-- page-wrapper  -->
    </div><!-- wrapper  -->

   
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY 脚本 SCRIPTS -->
    <script src="js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="js/jquery.metisMenu.js"></script>
       <!-- CUSTOM SCRIPTS -->
    <script src="js/custom01.js"></script>
    

</body>
</html>




















