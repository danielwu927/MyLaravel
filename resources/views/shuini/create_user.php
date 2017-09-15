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
    <div id="wrapper" >
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom:0">
            
            <div class="navbar-header">
                <a class="navbar-brand" href="#">后台管理</a>
            </div>

            <div class="header-right" >
                <img src="/img/logo-whut.png" width="400" height="50"/></a>
            </div>
        </nav>
        <!-- navbar -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li >
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
                        <h1 class="page-head-line">创建新用户</h1>
                        <h1 class="page-subhead-line">您可以在此处创建新用户。</h1>
                    </div>
                </div> <!-- row -->
               
                <div class="content body">
                    <a href="user_list.blade.php" class="btn btn-primary btn-flat" id="check_user_list">查看用户列表</a>
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




















