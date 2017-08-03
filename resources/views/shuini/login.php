
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<title>login</title>
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
                        <h3>欢迎您</h3>
                        <form action="#" name="f" method="post">
                            <div class="input_outer">
                                <span class="u_user"></span>
                                <input name="logname" class="text" type="text" id="new_userID" value="" placeholder="请输入账户">
                            </div>
                            <div class="input_outer">
                                <span class="us_uer"></span>
                                <input name="logpass" class="text" type="password" id="new_password" value="" placeholder="请输入密码">
                            </div>
                            <div class="input_outer">
                                <span class="u_user"></span>
                                <input name="logname" class="text" id="new_yanzhengma" placeholder="请输入验证码">
                                <a><img src="yanzhengma.php" id="yanzhengmaImg"></a>
                            </div>
                            <div class="row">
                                <div class="col-xs-8"><a href="register.php" class="text-center" style="color:#FFFFFF">注册新账户</a></div>
                               
                                    <div style="text-align:center;">
                                    <div  class="frend-link" style="width:100px;margin:0 auto;"><span><button class="act-but submit btn-flat btn-block btn-primary btn" href="javascript:;" style="color: #FFFFFF ">登录</button></span>
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