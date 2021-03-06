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



        <!-- navbar-default  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">问卷模板列表</h1>
                        <h1 class="page-subhead-line">您可以管理已经创建的问卷模板，或创建新的问卷模板。</h1>
                    </div>
                </div> <!-- row -->
               
                <div class="content body">
                    <a href="new_create_questionnaire_template.php" class="btn btn-primary btn-flat" id="createNew_template">创建新模板</a><br><br>
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




















