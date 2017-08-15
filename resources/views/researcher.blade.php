<!DOCTYPE html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>问卷调查系统</title>
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
                <a class="navbar-brand" href="#">问卷调查系统</a>
            </div>

            <div class="header-right">
                <img src="/img/logo-whut.png" width="400" height="50"/></a>
            </div>
        </nav>
        <!-- navbar -->


        <!-- navbar-default  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">新建问卷模板</h1>
                        <h1 class="page-subhead-line">您可以创建新的问卷模板。</h1>
                    </div>
                </div> <!-- row -->
                <div class="content body">
                <a href="questionnaire_template.php" class="btn btn-primary btn-flat" id="check_template">查看模板列表</a>
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




















