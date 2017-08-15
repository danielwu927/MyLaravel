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
                                <a href="user_list.php"><i class="fa fa-user"></i>用户列表</a>
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




















