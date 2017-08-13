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
                        <a class="active-menu" href="admin_home.php"><i class="fa fa-dashboard "></i>主面板</a>
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




















