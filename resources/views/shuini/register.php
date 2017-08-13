
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<title>用户注册</title>
<link rel="stylesheet" type="text/css" href="css/normalize.css" />
<link rel="stylesheet" type="text/css" href="css/demo.css" />
<!--必要样式-->
<link rel="stylesheet" type="text/css" href="css/component.css" />
<!--[if IE]>
<script src="js/html5.js"></script>
<![endif]-->
</head>
<body>
        <div class="container demo-1">
            <div class="content">
                <div id="large-header" class="large-header">
                    <canvas id="demo-canvas"></canvas>    <!--定义图形-->
                    <div class="logo_box">
                        <h3>欢迎注册</h3>
                        <form action="#" name="f" method="post">
                            <div class="input_outer" style="margin:10px;border:0;padding:0;">
                                <span class="u_user"></span>
                                <input name="logname" style="color:whitesmoke" class="text" type="text" id="userID" value="" placeholder="请输入用户名">
                            </div>
                            <div class="input_outer" style="margin:10px;border:0;padding:0;">
                                <span class="us_uer"></span>
                                <input name="logpass" style="color:whitesmoke" class="text" type="email" id="email" value="" placeholder="请输入邮箱">
                            </div>
                            
                            <div class="input_outer" style="margin:10px;border:0;padding:0;">
                                <span class="u_user"></span>
                                <input name="logname" style="color:whitesmoke" class="text" type="text" id="username" value="" placeholder="请输入课题组（如XXX水泥厂）">
                            </div>
                            <div class="input_outer" style="margin:10px;border:0;padding:0;">
                                <span class="u_user"></span>
                                <input name="logname" style="color:whitesmoke" class="text" type="password" id="password" value="" placeholder="请输入密码">
                            </div>
                            <div class="input_outer" style="margin:10px;border:0;padding:0;">
                                <span class="u_user"></span>
                                <input name="logname" style="color:whitesmoke" class="text" type="password" id="repassword" value="" placeholder="请确认密码">
                            </div>
                            <div class="input_outer" style="margin:10px;border:0;padding:0;">
                                <span class="u_user"></span>
                                <input name="logname" style="color:whitesmoke" class="text" id="check" placeholder="请输入描述信息，加速管理员审核">
            
                            </div>
                            <div class="row">
                                <div class="col-xs-8"><a href="../auth/login.blade.php" class="text-center" style="color:#FFFFFF">已有账户</a></div>
                               
                                    <div style="text-align:center;">
                                    <div  class="friend-link" style="width:150px;margin:0 auto;"><span><button class="act-but submit btn-flat btn-block btn-primary btn" href="javascript:;" style="color: #FFFFFF ">确认注册</button></span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /container -->
        <script src="js/TweenLite.min.js"></script>
        <script src="js/EasePack.min.js"></script>
        <script src="js/rAF.js"></script>
        <script src="js/demo-1.js"></script>
    </body>
</html>