<!DOCTYPE html>
<head>
    <meta charset="utf-8" />

    <title>问卷填写</title>

</head>
<body>

{{--@extends("../layouts/admin")--}}
{{--@section("content")--}}
    <script src="https://cdn.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
    <script src="https://cdn.jotfor.ms/static/jotform.forms.js?3.3.2528" type="text/javascript"></script>
    <script src="https://js.jotform.com/vendor/postMessage.js?3.3.2528" type="text/javascript"></script>
    <script src="https://js.jotform.com/WidgetsServer.js?v=1510143778144" type="text/javascript"></script>
    <script type="text/javascript">
        JotForm.init(function(){
            setTimeout(function() {
                $('input_19').hint('单位 万吨/年');
            }, 20);
            setTimeout(function() {
                $('input_20').hint('单位 万吨/年');
            }, 20);
            setTimeout(function() {
                $('input_23').hint('单位 kWh/t');
            }, 20);
            setTimeout(function() {
                $('input_24').hint('单位 kgce/t');
            }, 20);
            setTimeout(function() {
                $('input_25').hint('单位 kWh/t');
            }, 20);
            setTimeout(function() {
                $('input_26').hint('单位 kgce/t');
            }, 20);
            setTimeout(function() {
                $('input_27').hint('单位 kWh/t');
            }, 20);
            setTimeout(function() {
                $('input_28').hint('单位 kgce/t');
            }, 20);
            setTimeout(function() {
                $('input_29').hint('单位 kWh/t');
            }, 20);
            JotForm.alterTexts({"alphabetic":"睡到发生的发生的","alphanumeric":"這個表格只能容納字母與數字","ccDonationMinLimitError":"Minimum amount is {minAmount} {currency}","ccInvalidCVC":"CVC number is invalid.","ccInvalidExpireDate":"Expire date is invalid.","ccInvalidNumber":"Credit Card Number is invalid.","ccMissingDetails":"請填入信用卡資料","ccMissingDonation":"Please enter numeric values for donation amount.","ccMissingProduct":"Please select at least one product.","characterLimitError":"Too many Characters.  The limit is","characterMinLimitError":"Too few characters. The minimum is","confirmClearForm":"再次確定是否要清除所有填寫資料","confirmEmail":"E-mail 並不符合","currency":"This field can only contain currency values.","cyrillic":"This field can only contain cyrillic characters","dateInvalid":"日期無效。日期格式為{format}","dateInvalidSeparate":"This date is not valid. Enter a valid {element}.","dateLimited":"This date is unavailable.","disallowDecimals":"Please enter a whole number.","email":"輸入一個有效的Email地址","fillMask":"Field value must fill mask.","freeEmailError":"Free email accounts are not allowed","generalError":"错误！烦请更正后再继续。","generalPageError":"There are errors on this page. Please fix them before continuing.","gradingScoreError":"分數的總和應該只能少於或多於","incompleteFields":"蘇","inputCarretErrorA":"輸入的內容不應小於最小值","inputCarretErrorB":"输入不能超过限定的最大值","lessThan":"您的分數應該少於或等於","maxDigitsError":"The maximum digits allowed is","maxSelectionsError":"The maximum number of selections allowed is","minSelectionsError":"The minimum required number of selections is","multipleFileUploads_emptyError":"找不到檔案，請重新選擇","multipleFileUploads_fileLimitError":"Only {fileLimit} file uploads allowed.","multipleFileUploads_minSizeError":"{file} is too small, minimum file size is {minSizeLimit}.","multipleFileUploads_onLeave":"The files are being uploaded, if you leave now the upload will be cancelled.","multipleFileUploads_sizeError":"{file} is too large, maximum file size is {sizeLimit}.","multipleFileUploads_typeError":"{file} has invalid extension. Only {extensions} are allowed.","nextButtonText":"下一部","numeric":"這個表格只能容納數值","pastDatesDisallowed":"日期不应过时","pleaseWait":"请等待...","prevButtonText":"Previous","progressMiddleText":"of","required":"This field is required.","requireEveryCell":"Every cell is required.","requireEveryRow":"每行都是必须的","requireOne":"At least one field required.","seeAllText":"See All","submissionLimit":"Sorry! Only one entry is allowed.  Multiple submissions are disabled for this form.","submitButtonText":"提交","uploadExtensions":"您只能上傳以下檔案：","uploadFilesize":"檔案大小不能超過","uploadFilesizemin":"File size cannot be smaller than:","url":"This field can only contain a valid URL","wordLimitError":"Too many words. The limit is","wordMinLimitError":"Too few words.  The minimum is"});
            JotForm.clearFieldOnHide="disable";
            JotForm.submitError="jumpToFirstError";
            /*INIT-END*/
        });

        JotForm.prepareCalculationsOnTheFly([null,{"name":"heading","qid":"1","text":"2015水泥企业信息调查","type":"control_head"},{"name":"submit2","qid":"2","text":"提交问卷","type":"control_button"},{"name":"input3","qid":"3","text":"企业名称","type":"control_textbox"},{"name":"input4","qid":"4","text":"企业所在地址","type":"control_textbox"},{"name":"input5","qid":"5","text":"填表联系人","type":"control_textbox"},{"name":"input6","qid":"6","text":"联系电话","type":"control_textbox"},{"name":"input7","qid":"7","text":"生产线名称","type":"control_textbox"},{"name":"input8","qid":"8","text":"生产线设计规模","type":"control_textbox"},{"name":"input9","qid":"9","text":"年运转天数","type":"control_textbox"},null,null,{"name":"input12","qid":"12","text":"资源消耗","type":"control_head"},null,null,{"name":"input15","qid":"15","text":"熟料烧成原材料    (含替代原料)","type":"control_widget"},null,{"name":"input17","qid":"17","text":"燃料(含替代燃料)","type":"control_widget"},{"name":"input18","qid":"18","text":"\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t水泥制成用原材料 (含替代原料)   \t\t\t\t\t\t\t\t\t\t","type":"control_widget"},{"name":"input19","qid":"19","text":"熟料产量","type":"control_textbox"},{"name":"input20","qid":"20","text":"水泥产量","type":"control_textbox"},null,{"name":"input22","qid":"22","text":"能源消耗","type":"control_head"},{"name":"input23","qid":"23","text":"生料粉磨工段电耗","type":"control_textbox"},{"name":"input24","qid":"24","text":"可比熟料综合煤耗","type":"control_textbox"},{"name":"input25","qid":"25","text":"可比熟料综合电耗","type":"control_textbox"},{"name":"input26","qid":"26","text":"可比熟料综合能耗","type":"control_textbox"},{"name":"input27","qid":"27","text":"可比水泥综合电耗","type":"control_textbox"},{"name":"input28","qid":"28","text":"可比水泥总和能耗","type":"control_textbox"},{"name":"input29","qid":"29","text":"单位熟料余热发电量","type":"control_textbox"},{"name":"input30","qid":"30","text":"分頁工具","type":"control_pagebreak"},{"name":"input31","qid":"31","text":"废气排放","type":"control_head"},null,{"name":"input33","qid":"33","text":"颗粒物","type":"control_matrix"},null,{"name":"input35","qid":"35","text":"污染气体","type":"control_matrix"},{"name":"Kgt","qid":"36","text":"喷氨\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tkg/t熟料\t\t","type":"control_textbox"},{"name":"input37","qid":"37","text":"脱硝工艺","type":"control_checkbox"},{"name":"input38","qid":"38","text":"分頁工具","type":"control_pagebreak"},null,{"name":"input40","qid":"40","text":"主要设备","type":"control_head"},{"name":"input41","qid":"41","text":"设备情况","type":"control_matrix"},null,{"name":"input43","qid":"43","text":"窑 规格","type":"control_textbox"},{"name":"input44","qid":"44","text":"＊备注：若无计算值，可空缺","type":"control_text"},{"name":"input45","qid":"45","text":"＊备注：若无计算值，可空缺","type":"control_text"},{"name":"input46","qid":"46","text":"＊备注：若无计算值，可空缺","type":"control_text"},{"name":"input47","qid":"47","text":"＊备注：若无计算值，可空缺","type":"control_text"},{"name":"input48","qid":"48","text":"＊备注：若无计算值，可空缺","type":"control_text"},{"name":"input49","qid":"49","text":"分頁工具","type":"control_pagebreak"},{"name":"input50","qid":"50","text":"分頁工具","type":"control_pagebreak"}]);
        setTimeout(function() {
            JotForm.paymentExtrasOnTheFly([null,{"name":"heading","qid":"1","text":"2015水泥企业信息调查","type":"control_head"},{"name":"submit2","qid":"2","text":"提交问卷","type":"control_button"},{"name":"input3","qid":"3","text":"企业名称","type":"control_textbox"},{"name":"input4","qid":"4","text":"企业所在地址","type":"control_textbox"},{"name":"input5","qid":"5","text":"填表联系人","type":"control_textbox"},{"name":"input6","qid":"6","text":"联系电话","type":"control_textbox"},{"name":"input7","qid":"7","text":"生产线名称","type":"control_textbox"},{"name":"input8","qid":"8","text":"生产线设计规模","type":"control_textbox"},{"name":"input9","qid":"9","text":"年运转天数","type":"control_textbox"},null,null,{"name":"input12","qid":"12","text":"资源消耗","type":"control_head"},null,null,{"name":"input15","qid":"15","text":"熟料烧成原材料    (含替代原料)","type":"control_widget"},null,{"name":"input17","qid":"17","text":"燃料(含替代燃料)","type":"control_widget"},{"name":"input18","qid":"18","text":"\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t水泥制成用原材料 (含替代原料)   \t\t\t\t\t\t\t\t\t\t","type":"control_widget"},{"name":"input19","qid":"19","text":"熟料产量","type":"control_textbox"},{"name":"input20","qid":"20","text":"水泥产量","type":"control_textbox"},null,{"name":"input22","qid":"22","text":"能源消耗","type":"control_head"},{"name":"input23","qid":"23","text":"生料粉磨工段电耗","type":"control_textbox"},{"name":"input24","qid":"24","text":"可比熟料综合煤耗","type":"control_textbox"},{"name":"input25","qid":"25","text":"可比熟料综合电耗","type":"control_textbox"},{"name":"input26","qid":"26","text":"可比熟料综合能耗","type":"control_textbox"},{"name":"input27","qid":"27","text":"可比水泥综合电耗","type":"control_textbox"},{"name":"input28","qid":"28","text":"可比水泥总和能耗","type":"control_textbox"},{"name":"input29","qid":"29","text":"单位熟料余热发电量","type":"control_textbox"},{"name":"input30","qid":"30","text":"分頁工具","type":"control_pagebreak"},{"name":"input31","qid":"31","text":"废气排放","type":"control_head"},null,{"name":"input33","qid":"33","text":"颗粒物","type":"control_matrix"},null,{"name":"input35","qid":"35","text":"污染气体","type":"control_matrix"},{"name":"Kgt","qid":"36","text":"喷氨\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tkg/t熟料\t\t","type":"control_textbox"},{"name":"input37","qid":"37","text":"脱硝工艺","type":"control_checkbox"},{"name":"input38","qid":"38","text":"分頁工具","type":"control_pagebreak"},null,{"name":"input40","qid":"40","text":"主要设备","type":"control_head"},{"name":"input41","qid":"41","text":"设备情况","type":"control_matrix"},null,{"name":"input43","qid":"43","text":"窑 规格","type":"control_textbox"},{"name":"input44","qid":"44","text":"＊备注：若无计算值，可空缺","type":"control_text"},{"name":"input45","qid":"45","text":"＊备注：若无计算值，可空缺","type":"control_text"},{"name":"input46","qid":"46","text":"＊备注：若无计算值，可空缺","type":"control_text"},{"name":"input47","qid":"47","text":"＊备注：若无计算值，可空缺","type":"control_text"},{"name":"input48","qid":"48","text":"＊备注：若无计算值，可空缺","type":"control_text"},{"name":"input49","qid":"49","text":"分頁工具","type":"control_pagebreak"},{"name":"input50","qid":"50","text":"分頁工具","type":"control_pagebreak"}]);}, 20);
    </script>
    <link href="https://cdn.jotfor.ms/static/formCss.css?3.3.2528" rel="stylesheet" type="text/css" />
    <link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/nova.css?3.3.2528" />
    <link type="text/css" media="print" rel="stylesheet" href="https://cdn.jotfor.ms/css/printForm.css?3.3.2528" />
    <link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/themes/CSS/566a91c2977cdfcd478b4567.css?"/>
    <style type="text/css">
        .form-label-left{
            width:150px;
        }
        .form-line{
            padding-top:12px;
            padding-bottom:12px;
        }
        .form-label-right{
            width:150px;
        }
        .form-all{
            width:690px;
            color:#555 !important;
            font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Verdana, sans-serif;
            font-size:14px;
        }
    </style>

    <style type="text/css" id="form-designer-style">
        /* Injected CSS Code */
        .form-label.form-label-auto {

            display: inline-block;
            float: left;
            text-align: left;

        } /*__INSPECT_SEPERATOR__*/
        /* Injected CSS Code */
    </style>
<div align="center">
    <form   class="jotform-form" action="/getdata" method="post" name="form_73111913322444" id="73111913322444" accept-charset="utf-8">
        <input type="hidden" name="formID" value="73111913322444" />
        <input type="hidden" name="_token" value="<?php  echo csrf_token(); ?>" />
        <div class="form-all">
            <ul class="form-section page-section">
                <li id="cid_1" class="form-input-wide" data-type="control_head">
                    <div class="form-header-group ">
                        <div class="header-text httal htvam">
                            <h2 id="header_1" class="form-header" data-component="header">
                                2015水泥企业信息调查
                            </h2>
                        </div>
                    </div>
                </li>
                <li class="form-line" data-type="control_textbox" id="id_3">
                    <label class="form-label form-label-left form-label-auto" id="label_3" for="input_3"> 企业名称 </label>
                    <div id="cid_3" class="form-input">
                        <input type="text" id="input_3" name="q3_input3" data-type="input-textbox" class="form-textbox" size="20" value="" data-component="textbox" />
                    </div>
                </li>
                <li class="form-line" data-type="control_textbox" id="id_4">
                    <label class="form-label form-label-left form-label-auto" id="label_4" for="input_4"> 企业所在地址 </label>
                    <div id="cid_4" class="form-input">
                        <input type="text" id="input_4" name="q4_input4" data-type="input-textbox" class="form-textbox" size="20" value="" data-component="textbox" />
                    </div>
                </li>
                <li class="form-line" data-type="control_textbox" id="id_5">
                    <label class="form-label form-label-left form-label-auto" id="label_5" for="input_5"> 填表联系人 </label>
                    <div id="cid_5" class="form-input">
                        <input type="text" id="input_5" name="q5_input5" data-type="input-textbox" class="form-textbox" size="20" value="" data-component="textbox" />
                    </div>
                </li>
                <li class="form-line" data-type="control_textbox" id="id_6">
                    <label class="form-label form-label-left form-label-auto" id="label_6" for="input_6"> 联系电话 </label>
                    <div id="cid_6" class="form-input">
                        <input type="text" id="input_6" name="q6_input6" data-type="input-textbox" class="form-textbox" size="20" value="" data-component="textbox" />
                    </div>
                </li>
                <li class="form-line" data-type="control_textbox" id="id_7">
                    <label class="form-label form-label-left form-label-auto" id="label_7" for="input_7"> 生产线名称 </label>
                    <div id="cid_7" class="form-input">
                        <input type="text" id="input_7" name="q7_input7" data-type="input-textbox" class="form-textbox" size="20" value="" data-component="textbox" />
                    </div>
                </li>
                <li class="form-line" data-type="control_textbox" id="id_8">
                    <label class="form-label form-label-left form-label-auto" id="label_8" for="input_8"> 生产线设计规模 </label>
                    <div id="cid_8" class="form-input">
                        <input type="text" id="input_8" name="q8_input8" data-type="input-textbox" class="form-textbox" size="20" value="" data-component="textbox" />
                    </div>
                </li>
                <li class="form-line" data-type="control_textbox" id="id_9">
                    <label class="form-label form-label-left form-label-auto" id="label_9" for="input_9"> 年运转天数 </label>
                    <div id="cid_9" class="form-input">
                        <input type="text" id="input_9" name="q9_input9" data-type="input-textbox" class="form-textbox" size="20" value="" data-component="textbox" />
                    </div>
                </li>
                <li class="form-line" data-type="control_text" id="id_44">
                    <div id="cid_44" class="form-input-wide">
                        <div id="text_44" class="form-html" data-component="text">
                            <p>＊备注：若无计算值，可空缺</p>
                        </div>
                    </div>
                </li>
                <li id="cid_49" class="form-input-wide" data-type="control_pagebreak">
                    <div class="form-pagebreak" data-component="pagebreak">
                        <div class="form-pagebreak-back-container">
                            <button id="form-pagebreak-back_49" type="button" class="form-pagebreak-back " data-component="pagebreak-back">
                                返回
                            </button>
                        </div>
                        <div class="form-pagebreak-next-container">
                            <button id="form-pagebreak-next_49" type="button" class="form-pagebreak-next " data-component="pagebreak-next">
                                下一页
                            </button>
                        </div>
                        <div style="clear:both;" class="pageInfo form-sub-label" id="pageInfo_49">
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="form-section page-section" style="display:none;">
                <li id="cid_12" class="form-input-wide" data-type="control_head">
                    <div class="form-header-group ">
                        <div class="header-text httal htvam">
                            <h2 id="header_12" class="form-header" data-component="header">
                                资源消耗
                            </h2>
                        </div>
                    </div>
                </li>
                <li class="form-line" data-type="control_widget" id="id_15">
                    <label class="form-label form-label-left form-label-auto" id="label_15" for="input_15"> 熟料烧成原材料 (含替代原料) </label>
                    <div id="cid_15" class="form-input">
                        <div style="width:100%;text-align:Left;" data-component="widget-field">
                            <iframe frameborder="0" scrolling="no" allowtransparency="true" data-type="iframe" class="custom-field-frame" id="customFieldFrame_15" src="" style="border:none;width:300px;height:140px;" data-width="300" data-height="140">
                            </iframe>
                            <div class="widget-inputs-wrapper">
                                <input id="input_15" class="form-hidden form-widget  " type="hidden" name="q15_input15" value="" />
                                <input id="widget_settings_15" class="form-hidden form-widget-settings" type="hidden" value="%5B%7B%22name%22%3A%22cols%22%2C%22value%22%3A%22%E5%8E%9F%E6%9D%90%E6%96%99%E5%90%8D%E7%A7%B0%3A120%2C%E6%B6%88%E8%80%97%E6%83%85%E5%86%B5(%E4%B8%87%E5%90%A8%2F%E5%B9%B4)%3A180%22%7D%2C%7B%22name%22%3A%22headerColor%22%2C%22value%22%3A%22black%22%7D%2C%7B%22name%22%3A%22contentColor%22%2C%22value%22%3A%22black%22%7D%2C%7B%22name%22%3A%22addRowButtonText%22%2C%22value%22%3A%22%E6%B7%BB%E5%8A%A0%22%7D%2C%7B%22name%22%3A%22btnTheme%22%2C%22value%22%3A%22Default%22%7D%5D" data-version="2" />
                            </div>
                            <script type="text/javascript">
                                setTimeout(function()
                                {
                                    var _cFieldFrame = document.getElementById("customFieldFrame_15");
                                    _cFieldFrame.onload = function()
                                    {
                                        widgetFrameLoaded(15, {
                                            "formID": 73111913322444
                                        })
                                    };
                                    _cFieldFrame.src = "//widgets.jotform.io/dynMatrix/?qid=15&ref=" + encodeURIComponent(window.location.protocol + "//" + window.location.host);
                                    _cFieldFrame.addClassName("custom-field-frame-rendered");
                                }, 0);
                            </script>
                        </div>
                    </div>
                </li>
                <li class="form-line" data-type="control_widget" id="id_17">
                    <label class="form-label form-label-left form-label-auto" id="label_17" for="input_17"> 燃料(含替代燃料) </label>
                    <div id="cid_17" class="form-input">
                        <div style="width:100%;text-align:Left;" data-component="widget-field">
                            <iframe frameborder="0" scrolling="no" allowtransparency="true" data-type="iframe" class="custom-field-frame" id="customFieldFrame_17" src="" style="border:none;width:300px;height:140px;" data-width="300" data-height="140">
                            </iframe>
                            <div class="widget-inputs-wrapper">
                                <input id="input_17" class="form-hidden form-widget  " type="hidden" name="q17_input17" value="" />
                                <input id="widget_settings_17" class="form-hidden form-widget-settings" type="hidden" value="%5B%7B%22name%22%3A%22cols%22%2C%22value%22%3A%22%E7%87%83%E6%96%99%E5%90%8D%E7%A7%B0%3A120%2C%E6%B6%88%E8%80%97%E6%83%85%E5%86%B5(%E4%B8%87%E5%90%A8%2F%E5%B9%B4)%3A180%22%7D%2C%7B%22name%22%3A%22headerColor%22%2C%22value%22%3A%22black%22%7D%2C%7B%22name%22%3A%22borderColor%22%2C%22value%22%3A%22%2388d%22%7D%2C%7B%22name%22%3A%22contentColor%22%2C%22value%22%3A%22black%22%7D%2C%7B%22name%22%3A%22addRowButtonText%22%2C%22value%22%3A%22%E6%B7%BB%E5%8A%A0%22%7D%2C%7B%22name%22%3A%22btnTheme%22%2C%22value%22%3A%22Default%22%7D%5D" data-version="2" />
                            </div>
                            <script type="text/javascript">
                                setTimeout(function()
                                {
                                    var _cFieldFrame = document.getElementById("customFieldFrame_17");
                                    _cFieldFrame.onload = function()
                                    {
                                        widgetFrameLoaded(17, {
                                            "formID": 73111913322444
                                        })
                                    };
                                    _cFieldFrame.src = "//widgets.jotform.io/dynMatrix/?qid=17&ref=" + encodeURIComponent(window.location.protocol + "//" + window.location.host);
                                    _cFieldFrame.addClassName("custom-field-frame-rendered");
                                }, 0);
                            </script>
                        </div>
                    </div>
                </li>
                <li class="form-line" data-type="control_textbox" id="id_19">
                    <label class="form-label form-label-left form-label-auto" id="label_19" for="input_19"> 熟料产量 </label>
                    <div id="cid_19" class="form-input">
                        <input type="text" id="input_19" name="q19_input19" data-type="input-textbox" class="form-textbox" size="20" value="" placeholder="单位 万吨/年" data-component="textbox" />
                    </div>
                </li>
                <li class="form-line" data-type="control_widget" id="id_18">
                    <label class="form-label form-label-left form-label-auto" id="label_18" for="input_18"> 水泥制成用原材料 (含替代原料) </label>
                    <div id="cid_18" class="form-input">
                        <div style="width:100%;text-align:Left;" data-component="widget-field">
                            <iframe frameborder="0" scrolling="no" allowtransparency="true" data-type="iframe" class="custom-field-frame" id="customFieldFrame_18" src="" style="border:none;width:300px;height:140px;" data-width="300" data-height="140">
                            </iframe>
                            <div class="widget-inputs-wrapper">
                                <input id="input_18" class="form-hidden form-widget  " type="hidden" name="q18_input18" value="" />
                                <input id="widget_settings_18" class="form-hidden form-widget-settings" type="hidden" value="%5B%7B%22name%22%3A%22cols%22%2C%22value%22%3A%22%E6%9D%90%E6%96%99%E5%90%8D%E7%A7%B0%3A120%2C%E6%B6%88%E8%80%97%E6%83%85%E5%86%B5(%E4%B8%87%E5%90%A8%2F%E5%B9%B4)%3A180%22%7D%2C%7B%22name%22%3A%22headerColor%22%2C%22value%22%3A%22black%22%7D%2C%7B%22name%22%3A%22borderColor%22%2C%22value%22%3A%22%2388d%22%7D%2C%7B%22name%22%3A%22contentColor%22%2C%22value%22%3A%22black%22%7D%2C%7B%22name%22%3A%22addRowButtonText%22%2C%22value%22%3A%22%E6%B7%BB%E5%8A%A0%22%7D%2C%7B%22name%22%3A%22btnTheme%22%2C%22value%22%3A%22Default%22%7D%5D" data-version="2" />
                            </div>
                            <script type="text/javascript">
                                setTimeout(function()
                                {
                                    var _cFieldFrame = document.getElementById("customFieldFrame_18");
                                    _cFieldFrame.onload = function()
                                    {
                                        widgetFrameLoaded(18, {
                                            "formID": 73111913322444
                                        })
                                    };
                                    _cFieldFrame.src = "//widgets.jotform.io/dynMatrix/?qid=18&ref=" + encodeURIComponent(window.location.protocol + "//" + window.location.host);
                                    _cFieldFrame.addClassName("custom-field-frame-rendered");
                                }, 0);
                            </script>
                        </div>
                    </div>
                </li>
                <li class="form-line" data-type="control_textbox" id="id_20">
                    <label class="form-label form-label-left form-label-auto" id="label_20" for="input_20"> 水泥产量 </label>
                    <div id="cid_20" class="form-input">
                        <input type="text" id="input_20" name="q20_input20" data-type="input-textbox" class="form-textbox" size="20" value="" placeholder="单位 万吨/年" data-component="textbox" />
                    </div>
                </li>
                <li class="form-line" data-type="control_text" id="id_45">
                    <div id="cid_45" class="form-input-wide">
                        <div id="text_45" class="form-html" data-component="text">
                            <p>＊备注：若无计算值，可空缺</p>
                        </div>
                    </div>
                </li>
                <li id="cid_50" class="form-input-wide" data-type="control_pagebreak">
                    <div class="form-pagebreak" data-component="pagebreak">
                        <div class="form-pagebreak-back-container">
                            <button id="form-pagebreak-back_50" type="button" class="form-pagebreak-back " data-component="pagebreak-back">
                                返回
                            </button>
                        </div>
                        <div class="form-pagebreak-next-container">
                            <button id="form-pagebreak-next_50" type="button" class="form-pagebreak-next " data-component="pagebreak-next">
                                下一页
                            </button>
                        </div>
                        <div style="clear:both;" class="pageInfo form-sub-label" id="pageInfo_50">
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="form-section page-section" style="display:none;">
                <li id="cid_22" class="form-input-wide" data-type="control_head">
                    <div class="form-header-group ">
                        <div class="header-text httal htvam">
                            <h2 id="header_22" class="form-header" data-component="header">
                                能源消耗
                            </h2>
                        </div>
                    </div>
                </li>
                <li class="form-line" data-type="control_textbox" id="id_23">
                    <label class="form-label form-label-left form-label-auto" id="label_23" for="input_23"> 生料粉磨工段电耗 </label>
                    <div id="cid_23" class="form-input">
                        <input type="text" id="input_23" name="q23_input23" data-type="input-textbox" class="form-textbox" size="20" value="" placeholder="单位 kWh/t" data-component="textbox" />
                    </div>
                </li>
                <li class="form-line" data-type="control_textbox" id="id_24">
                    <label class="form-label form-label-left form-label-auto" id="label_24" for="input_24"> 可比熟料综合煤耗 </label>
                    <div id="cid_24" class="form-input">
                        <input type="text" id="input_24" name="q24_input24" data-type="input-textbox" class="form-textbox" size="20" value="" placeholder="单位 kgce/t" data-component="textbox" />
                    </div>
                </li>
                <li class="form-line" data-type="control_textbox" id="id_25">
                    <label class="form-label form-label-left form-label-auto" id="label_25" for="input_25"> 可比熟料综合电耗 </label>
                    <div id="cid_25" class="form-input">
                        <input type="text" id="input_25" name="q25_input25" data-type="input-textbox" class="form-textbox" size="20" value="" placeholder="单位 kWh/t" data-component="textbox" />
                    </div>
                </li>
                <li class="form-line" data-type="control_textbox" id="id_26">
                    <label class="form-label form-label-left form-label-auto" id="label_26" for="input_26"> 可比熟料综合能耗 </label>
                    <div id="cid_26" class="form-input">
                        <input type="text" id="input_26" name="q26_input26" data-type="input-textbox" class="form-textbox" size="20" value="" placeholder="单位 kgce/t" data-component="textbox" />
                    </div>
                </li>
                <li class="form-line" data-type="control_textbox" id="id_27">
                    <label class="form-label form-label-left form-label-auto" id="label_27" for="input_27"> 可比水泥综合电耗 </label>
                    <div id="cid_27" class="form-input">
                        <input type="text" id="input_27" name="q27_input27" data-type="input-textbox" class="form-textbox" size="20" value="" placeholder="单位 kWh/t" data-component="textbox" />
                    </div>
                </li>
                <li class="form-line" data-type="control_textbox" id="id_28">
                    <label class="form-label form-label-left form-label-auto" id="label_28" for="input_28"> 可比水泥总和能耗 </label>
                    <div id="cid_28" class="form-input">
                        <input type="text" id="input_28" name="q28_input28" data-type="input-textbox" class="form-textbox" size="20" value="" placeholder="单位 kgce/t" data-component="textbox" />
                    </div>
                </li>
                <li class="form-line" data-type="control_textbox" id="id_29">
                    <label class="form-label form-label-left form-label-auto" id="label_29" for="input_29"> 单位熟料余热发电量 </label>
                    <div id="cid_29" class="form-input">
                        <input type="text" id="input_29" name="q29_input29" data-type="input-textbox" class="form-textbox" size="20" value="" placeholder="单位 kWh/t" data-component="textbox" />
                    </div>
                </li>
                <li class="form-line" data-type="control_text" id="id_46">
                    <div id="cid_46" class="form-input-wide">
                        <div id="text_46" class="form-html" data-component="text">
                            <p>＊备注：若无计算值，可空缺</p>
                        </div>
                    </div>
                </li>
                <li id="cid_30" class="form-input-wide" data-type="control_pagebreak">
                    <div class="form-pagebreak" data-component="pagebreak">
                        <div class="form-pagebreak-back-container">
                            <button id="form-pagebreak-back_30" type="button" class="form-pagebreak-back " data-component="pagebreak-back">
                                返回
                            </button>
                        </div>
                        <div class="form-pagebreak-next-container">
                            <button id="form-pagebreak-next_30" type="button" class="form-pagebreak-next " data-component="pagebreak-next">
                                下一页
                            </button>
                        </div>
                        <div style="clear:both;" class="pageInfo form-sub-label" id="pageInfo_30">
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="form-section page-section" style="display:none;">
                <li id="cid_31" class="form-input-wide" data-type="control_head">
                    <div class="form-header-group ">
                        <div class="header-text httal htvam">
                            <h2 id="header_31" class="form-header" data-component="header">
                                废气排放
                            </h2>
                        </div>
                    </div>
                </li>
                <li class="form-line" data-type="control_matrix" id="id_33">
                    <label class="form-label form-label-left form-label-auto" id="label_33" for="input_33"> 颗粒物 </label>
                    <div id="cid_33" class="form-input">
                        <table summary="" cellpadding="4" cellspacing="0" class="form-matrix-table" data-component="matrix">
                            <tbody>
                            <tr>
                                <th style="border:none;">

                                </th>
                                <th class="form-matrix-column-headers form-matrix-column_0">
                                    年排放量，吨/年
                                </th>
                                <th class="form-matrix-column-headers form-matrix-column_1">
                                    排放浓度，mg／m3
                                </th>
                                <th class="form-matrix-column-headers form-matrix-column_2">
                                    除尘方式
                                </th>
                            </tr>
                            <tr>
                                <th style="text-align:left;" class="form-matrix-row-headers">
                                    窑头
                                </th>
                                <td style="text-align:center;" class="form-matrix-values">
                                    <input id="input_33_0_0" type="number" class="form-number-input form-textbox" name="q33_input33[0][]" style="width:60px;" size="5" value="" />
                                </td>
                                <td style="text-align:center;" class="form-matrix-values">
                                    <input id="input_33_0_1" type="number" class="form-number-input form-textbox" name="q33_input33[0][]" style="width:60px;" size="5" value="" />
                                </td>
                                <td style="text-align:center;" class="form-matrix-values">
                                    <input id="input_33_0_2" type="number" class="form-number-input form-textbox" name="q33_input33[0][]" style="width:60px;" size="5" value="" />
                                </td>
                            </tr>
                            <tr>
                                <th style="text-align:left;" class="form-matrix-row-headers">
                                    窑尾
                                </th>
                                <td style="text-align:center;" class="form-matrix-values">
                                    <input id="input_33_1_0" type="number" class="form-number-input form-textbox" name="q33_input33[1][]" style="width:60px;" size="5" value="" />
                                </td>
                                <td style="text-align:center;" class="form-matrix-values">
                                    <input id="input_33_1_1" type="number" class="form-number-input form-textbox" name="q33_input33[1][]" style="width:60px;" size="5" value="" />
                                </td>
                                <td style="text-align:center;" class="form-matrix-values">
                                    <input id="input_33_1_2" type="number" class="form-number-input form-textbox" name="q33_input33[1][]" style="width:60px;" size="5" value="" />
                                </td>
                            </tr>
                            <tr>
                                <th style="text-align:left;" class="form-matrix-row-headers">
                                    水泥磨
                                </th>
                                <td style="text-align:center;" class="form-matrix-values">
                                    <input id="input_33_2_0" type="number" class="form-number-input form-textbox" name="q33_input33[2][]" style="width:60px;" size="5" value="" />
                                </td>
                                <td style="text-align:center;" class="form-matrix-values">
                                    <input id="input_33_2_1" type="number" class="form-number-input form-textbox" name="q33_input33[2][]" style="width:60px;" size="5" value="" />
                                </td>
                                <td style="text-align:center;" class="form-matrix-values">
                                    <input id="input_33_2_2" type="number" class="form-number-input form-textbox" name="q33_input33[2][]" style="width:60px;" size="5" value="" />
                                </td>
                            </tr>
                            <tr>
                                <th style="text-align:left;" class="form-matrix-row-headers">
                                    煤磨
                                </th>
                                <td style="text-align:center;" class="form-matrix-values">
                                    <input id="input_33_3_0" type="number" class="form-number-input form-textbox" name="q33_input33[3][]" style="width:60px;" size="5" value="" />
                                </td>
                                <td style="text-align:center;" class="form-matrix-values">
                                    <input id="input_33_3_1" type="number" class="form-number-input form-textbox" name="q33_input33[3][]" style="width:60px;" size="5" value="" />
                                </td>
                                <td style="text-align:center;" class="form-matrix-values">
                                    <input id="input_33_3_2" type="number" class="form-number-input form-textbox" name="q33_input33[3][]" style="width:60px;" size="5" value="" />
                                </td>
                            </tr>
                            <tr>
                                <th style="text-align:left;" class="form-matrix-row-headers">
                                    包装机
                                </th>
                                <td style="text-align:center;" class="form-matrix-values">
                                    <input id="input_33_4_0" type="number" class="form-number-input form-textbox" name="q33_input33[4][]" style="width:60px;" size="5" value="" />
                                </td>
                                <td style="text-align:center;" class="form-matrix-values">
                                    <input id="input_33_4_1" type="number" class="form-number-input form-textbox" name="q33_input33[4][]" style="width:60px;" size="5" value="" />
                                </td>
                                <td style="text-align:center;" class="form-matrix-values">
                                    <input id="input_33_4_2" type="number" class="form-number-input form-textbox" name="q33_input33[4][]" style="width:60px;" size="5" value="" />
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </li>
                <li class="form-line" data-type="control_matrix" id="id_35">
                    <label class="form-label form-label-left form-label-auto" id="label_35" for="input_35"> 污染气体 </label>
                    <div id="cid_35" class="form-input">
                        <table summary="" cellpadding="4" cellspacing="0" class="form-matrix-table" data-component="matrix">
                            <tbody>
                            <tr>
                                <th style="border:none;">

                                </th>
                                <th class="form-matrix-column-headers form-matrix-column_0">
                  <span style="display: inline !important;">
                    年排放量，吨/年
                  </span>
                                </th>
                                <th class="form-matrix-column-headers form-matrix-column_1">
                  <span style="display: inline !important;">
                    排放浓度，mg／m3
                  </span>
                                </th>
                            </tr>
                            <tr>
                                <th style="text-align:left;" class="form-matrix-row-headers">
                                    二氧化硫
                                </th>
                                <td style="text-align:center;" class="form-matrix-values">
                                    <input id="input_35_0_0" type="number" class="form-number-input form-textbox" name="q35_input35[0][]" style="width:60px;" size="5" value="" />
                                </td>
                                <td style="text-align:center;" class="form-matrix-values">
                                    <input id="input_35_0_1" type="number" class="form-number-input form-textbox" name="q35_input35[0][]" style="width:60px;" size="5" value="" />
                                </td>
                            </tr>
                            <tr>
                                <th style="text-align:left;" class="form-matrix-row-headers">
                                    氮氧化物
                                </th>
                                <td style="text-align:center;" class="form-matrix-values">
                                    <input id="input_35_1_0" type="number" class="form-number-input form-textbox" name="q35_input35[1][]" style="width:60px;" size="5" value="" />
                                </td>
                                <td style="text-align:center;" class="form-matrix-values">
                                    <input id="input_35_1_1" type="number" class="form-number-input form-textbox" name="q35_input35[1][]" style="width:60px;" size="5" value="" />
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </li>
                <li class="form-line" data-type="control_textbox" id="id_36">
                    <label class="form-label form-label-left form-label-auto" id="label_36" for="input_36"> 喷氨 kg/t熟料 </label>
                    <div id="cid_36" class="form-input">
                        <input type="text" id="input_36" name="q36_Kgt" data-type="input-textbox" class="form-textbox" size="20" value="" data-component="textbox" />
                    </div>
                </li>
                <li class="form-line" data-type="control_checkbox" id="id_37">
                    <label class="form-label form-label-left form-label-auto" id="label_37" for="input_37_0"> 脱硝工艺 </label>
                    <div id="cid_37" class="form-input">
                        <div class="form-single-column" data-component="checkbox">
            <span class="form-checkbox-item" style="clear:left;">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox" id="input_37_0" name="q37_input37[]" value="SNCR" />
              <label id="label_input_37_0" for="input_37_0"> SNCR </label>
            </span>
                            <span class="form-checkbox-item" style="clear:left;">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox" id="input_37_1" name="q37_input37[]" value="分级燃烧" />
              <label id="label_input_37_1" for="input_37_1"> 分级燃烧 </label>
            </span>
                            <span class="form-checkbox-item" style="clear:left;">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox" id="input_37_2" name="q37_input37[]" value="1+2" />
              <label id="label_input_37_2" for="input_37_2"> 1+2 </label>
            </span>
                            <span class="form-checkbox-item" style="clear:left;">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox" id="input_37_3" name="q37_input37[]" value="其他" />
              <label id="label_input_37_3" for="input_37_3"> 其他 </label>
            </span>
                        </div>
                    </div>
                </li>
                <li class="form-line" data-type="control_text" id="id_47">
                    <div id="cid_47" class="form-input-wide">
                        <div id="text_47" class="form-html" data-component="text">
                            <p>＊备注：若无计算值，可空缺</p>
                        </div>
                    </div>
                </li>
                <li id="cid_38" class="form-input-wide" data-type="control_pagebreak">
                    <div class="form-pagebreak" data-component="pagebreak">
                        <div class="form-pagebreak-back-container">
                            <button id="form-pagebreak-back_38" type="button" class="form-pagebreak-back " data-component="pagebreak-back">
                                返回
                            </button>
                        </div>
                        <div class="form-pagebreak-next-container">
                            <button id="form-pagebreak-next_38" type="button" class="form-pagebreak-next " data-component="pagebreak-next">
                                下一页
                            </button>
                        </div>
                        <div style="clear:both;" class="pageInfo form-sub-label" id="pageInfo_38">
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="form-section page-section" style="display:none;">
                <li id="cid_40" class="form-input-wide" data-type="control_head">
                    <div class="form-header-group ">
                        <div class="header-text httal htvam">
                            <h2 id="header_40" class="form-header" data-component="header">
                                主要设备
                            </h2>
                        </div>
                    </div>
                </li>
                <li class="form-line" data-type="control_matrix" id="id_41">
                    <label class="form-label form-label-left form-label-auto" id="label_41" for="input_41"> 设备情况 </label>
                    <div id="cid_41" class="form-input">
                        <table summary="" cellpadding="4" cellspacing="0" class="form-matrix-table" data-component="matrix">
                            <tbody>
                            <tr>
                                <th style="border:none;">

                                </th>
                                <th class="form-matrix-column-headers form-matrix-column_0">
                                    粉磨方式
                                </th>
                                <th class="form-matrix-column-headers form-matrix-column_1">
                                    规格型号
                                </th>
                                <th class="form-matrix-column-headers form-matrix-column_2">
                                    数量
                                </th>
                            </tr>
                            <tr>
                                <th style="text-align:left;" class="form-matrix-row-headers">
                                    生料磨
                                </th>
                                <td style="text-align:center;" class="form-matrix-values">
                                    <input id="input_41_0_0" class="form-textbox" type="text" size="5" name="q41_input41[0][]" value="" />
                                </td>
                                <td style="text-align:center;" class="form-matrix-values">
                                    <input id="input_41_0_1" class="form-textbox" type="text" size="5" name="q41_input41[0][]" value="" />
                                </td>
                                <td style="text-align:center;" class="form-matrix-values">
                                    <input id="input_41_0_2" class="form-textbox" type="text" size="5" name="q41_input41[0][]" value="" />
                                </td>
                            </tr>
                            <tr>
                                <th style="text-align:left;" class="form-matrix-row-headers">
                                    水泥磨
                                </th>
                                <td style="text-align:center;" class="form-matrix-values">
                                    <input id="input_41_1_0" class="form-textbox" type="text" size="5" name="q41_input41[1][]" value="" />
                                </td>
                                <td style="text-align:center;" class="form-matrix-values">
                                    <input id="input_41_1_1" class="form-textbox" type="text" size="5" name="q41_input41[1][]" value="" />
                                </td>
                                <td style="text-align:center;" class="form-matrix-values">
                                    <input id="input_41_1_2" class="form-textbox" type="text" size="5" name="q41_input41[1][]" value="" />
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </li>
                <li class="form-line" data-type="control_textbox" id="id_43">
                    <label class="form-label form-label-left form-label-auto" id="label_43" for="input_43"> 窑 规格 </label>
                    <div id="cid_43" class="form-input">
                        <input type="text" id="input_43" name="q43_input43" data-type="input-textbox" class="form-textbox" size="20" value="" data-component="textbox" />
                    </div>
                </li>
                <li class="form-line" data-type="control_button" id="id_2">
                    <div id="cid_2" class="form-input-wide">
                        <div style="margin-left:156px;" class="form-buttons-wrapper">
                            <button id="input_2" type="submit" class="form-submit-button" data-component="button">
                                提交问卷
                            </button>
                        </div>
                    </div>
                </li>
                <li class="form-line" data-type="control_text" id="id_48">
                    <div id="cid_48" class="form-input-wide">
                        <div id="text_48" class="form-html" data-component="text">
                            <p>＊备注：若无计算值，可空缺</p>
                        </div>
                    </div>
                </li>
                <li style="display:none">
                    Should be Empty:
                    <input type="text" name="website" value="" />
                </li>
            </ul>
        </div>
        <script>
            JotForm.showJotFormPowered = "new_footer";
        </script>
        <input type="hidden" id="simple_spc" name="simple_spc" value="73111913322444" />
        <script type="text/javascript">
            document.getElementById("si" + "mple" + "_spc").value = "73111913322444-73111913322444";
        </script>
        <script src="https://cdn.jotfor.ms/js/widgetResizer.js?REV=3.3.2528" type="text/javascript"></script>
        <div class="formFooter-heightMask">
        </div>
        {{--<div class="formFooter">--}}
        {{--<a href="https://www.jotform.com/?utm_source=formfooter&utm_medium=banner&utm_term=73111913322444&utm_content=jotform_logo&utm_campaign=powered_by_jotform_signup_cf_old" target="_blank" class="formFooter-logoLink"><img class="formFooter-logo" src="https://cdn.jotfor.ms/assets/img/logo/logo-new@1x.png" alt="" style="height: 44px;"></a>--}}
        {{--<div class="formFooter-rightSide">--}}
        {{--<span class="formFooter-text">--}}
        {{--Now create your own JotForm - It's free!--}}
        {{--</span>--}}
        {{--<a class="formFooter-button" href="https://www.jotform.com/?utm_source=formfooter&utm_medium=banner&utm_term=73111913322444&utm_content=jotform_button&utm_campaign=powered_by_jotform_signup_cf_old" target="_blank">Create your own JotForm</a>--}}
        {{--</div>--}}
        {{--</div>--}}
    </form>
    <script type="text/javascript">JotForm.ownerView=true;</script>
</div>
{{--@endsection--}}
</body>
</html>
