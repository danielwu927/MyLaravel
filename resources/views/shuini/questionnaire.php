<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>调研表</title>
    <style>
        #form_head table tr td input{
            border:none;
            border-bottom:black solid 1px;
        }
        #form_tail table tr td p#one input{
            width:70px;
            height:40px;
        }

    </style>


</head>
<body>
<form action="javascript:" method="get">
    <div id="form_head" align="center" valign="bottom">
        <caption><font size="6">水泥企业信息调研表</font></caption>
        <table  cellspacing="0" cellpadding="0" width="1000" bgcolor=""  >
            <tr >  <!--1-->
                <td>企业名称：<input type="text" name="com_name" /></td>
                <td>生产线名称：<input type="text" name="pro_name" /></td>
                <td>生产线设计规模：<input type="text" name="pro_scale" /></td>
                <td>年运转天数：<input type="text" name="run_day" /></td>
            </tr>
            <tr> <!--2-->
                <td colspan="2">企业所在地址：<input type="text" name="com_address"  size="50" /></td>
                <td>填表联系人：<input type="text" name="link_man" /></td>
                <td>联系电话：<input type="text" name="link_phone" /></td>

            </tr>
        </table>
    </div>
    <div id="form_one" align="center" valign="bottom">
        <table border="1" cellspacing="0" cellpadding="0" width="1000" bgcolor="">
            <tr align="center">
                <td rowspan="8" width="30" >资<br/>源<br/>消<br/>耗</td>
                <td rowspan="2" width="100">类别</td>
                <td colspan="6">熟料烧成用原材料（含替代原料）</td>
                <td colspan="3">燃料（含替代燃料）</td>
                <td rowspan="3">熟料产量</td>
            </tr>
            <tr align="center">
                <td>原料 1#</td>
                <td>原料 2#</td>
                <td>原料 3#</td>
                <td>原料 4#</td>
                <td>原料 5#</td>
                <td>原料 6#</td>
                <td>燃料 1#</td>
                <td>燃料 2#</td>
                <td>燃料 3#</td>
            </tr>
            <tr align="center">
                <td>原材料名称</td>
                <td><input type="text" name="熟料烧成原料1" placeholder="如：石灰石" size="9" /></td>
                <td><input type="text" name="熟料烧成原料2" size="9" /></td>
                <td><input type="text" name="熟料烧成原料3" size="9" /></td>
                <td><input type="text" name="熟料烧成原料4" size="9" /></td>
                <td><input type="text" name="熟料烧成原料5" size="9" /></td>
                <td><input type="text" name="熟料烧成原料6" size="9" /></td>
                <td><input type="text" name="熟料烧成燃料1" placeholder="如：原煤" size="9" /></td>
                <td><input type="text" name="熟料烧成燃料2" size="9" /></td>
                <td><input type="text" name="熟料烧成燃料3" size="9" /></td>
            </tr>
            <tr align="center">
                <td>资源消耗，<br/>万吨/年</td>
                <td><input type="text" name="烧成消耗原料1" size="9" /></td>
                <td><input type="text" name="烧成消耗原料2" size="9" /></td>
                <td><input type="text" name="烧成消耗原料3" size="9" /></td>
                <td><input type="text" name="烧成消耗原料4" size="9" /></td>
                <td><input type="text" name="烧成消耗原料5" size="9" /></td>
                <td><input type="text" name="烧成消耗原料6" size="9" /></td>
                <td><input type="text" name="烧成消耗燃料1" size="9" /></td>
                <td><input type="text" name="烧成消耗燃料2" size="9" /></td>
                <td><input type="text" name="烧成消耗燃料3" size="9" /></td>
                <td><input type="text" name="熟料产量" size="9" /></td>
            </tr>
            <tr align="center">
                <td rowspan="2">类别</td>
                <td colspan="9" align="center">水泥制成用原材料（含替代原料）</td>
                <td rowspan="3">水泥产量</td>
            </tr>
            <tr align="center">
                <td>原料 1#</td>
                <td>原料 2#</td>
                <td>原料 3#</td>
                <td>原料 4#</td>
                <td>原料 5#</td>
                <td>原料 6#</td>
                <td>原料 7#</td>
                <td>原料 8#</td>
                <td>原料 9#</td>
            </tr>
            <tr align="center">
                <td>原材料名称</td>
                <td><input type="text" name="制成原料1" placeholder="如：熟料" size="9" /></td>
                <td><input type="text" name="制成原料2" placeholder="天然石膏" size="9" /></td>
                <td><input type="text" name="制成原料3" placeholder="脱硫石膏" size="9" /></td>
                <td><input type="text" name="制成原料4" size="9" /></td>
                <td><input type="text" name="制成原料5" size="9" /></td>
                <td><input type="text" name="制成原料6" size="9" /></td>
                <td><input type="text" name="制成原料7" size="9" /></td>
                <td><input type="text" name="制成原料8" size="9" /></td>
                <td><input type="text" name="制成原料9" size="9" /></td>
            </tr>
            <tr width="100" align="center">
                <td>消耗情况，<br/>万吨/年</td>
                <td><input type="text" name="制成消耗原料1" size="9" /></td>
                <td><input type="text" name="制成消耗原料2" size="9" /></td>
                <td><input type="text" name="制成消耗原料3" size="9" /></td>
                <td><input type="text" name="制成消耗原料4" size="9" /></td>
                <td><input type="text" name="制成消耗原料5" size="9" /></td>
                <td><input type="text" name="制成消耗原料6" size="9" /></td>
                <td><input type="text" name="制成消耗原料7" size="9" /></td>
                <td><input type="text" name="制成消耗原料8" size="9" /></td>
                <td><input type="text" name="制成消耗原料9" size="9" /></td>
                <td><input type="text" name="水泥产量" size="9" /></td>
            </tr>
        </table>
    </div>
    <div id="form_two" align="center" valign="bottom">
        <table border="1" cellspacing="0" cellpadding="0" width="1000" bgcolor="">
            <tr align="center">
                <td rowspan="3" width="30">能<br/>源<br/>消<br/>耗</td>
                <td width="100">项目</td>
                <td>生料磨粉<br/>工段电耗</td>
                <td>可比熟料<br/>综合煤耗</td>
                <td>可比熟料<br/>综合电耗</td>
                <td>可比熟料<br/>综合能耗</td>
                <td>可比水泥<br/>综合电耗</td>
                <td>可比水泥<br/>综合能耗</td>
                <td>单位熟料<br/>余热发电量</td>
            </tr>
            <tr align="center">
                <td>单位</td>
                <td>kWh/t</td>
                <td>kgce/t</td>
                <td>kWh/t</td>
                <td>kgce/t</td>
                <td>kWh/t</td>
                <td>kgce/t</td>
                <td>kWh/t</td>
            </tr>
            <tr align="center">
                <td>数值</td>
                <td><input type="text" name="能源消耗值1" size="9" /></td>
                <td><input type="text" name="能源消耗值2" size="9" /></td>
                <td><input type="text" name="能源消耗值3" size="9" /></td>
                <td><input type="text" name="能源消耗值4" size="9" /></td>
                <td><input type="text" name="能源消耗值5" size="9" /></td>
                <td><input type="text" name="能源消耗值6" size="9" /></td>
                <td><input type="text" name="能源消耗值7" size="9" /></td>
            </tr>
        </table>
    </div>
    <div id="form_three" align="center" valign="bottom">
        <table border="1" cellspacing="0" cellpadding="0" width="1000" bgcolor="">
            <tr align="center">
                <td rowspan="5" width="30">废<br/>气<br/>排<br/>放</td>
                <td rowspan="2" width="100">项目</td>
                <td colspan="5">颗粒物</td>
                <td>SO₂</td>
                <td>NOx</td>
                <td>喷氮</td>
                <td colspan="3">脱硝工艺（划勾）</td>
            </tr>
            <tr align="center">
                <td>窑头</td>
                <td>窑尾</td>
                <td>水泥磨</td>
                <td>煤磨</td>
                <td>包装机</td>
                <td>窑尾</td>
                <td>窑尾</td>
                <td>kg/t熟料</td>
                <td width="25">1</td>
                <td>SNCR</td>
                <td><select name="SNCR">
                        <option value="空"></option>
                        <option value="选中">√</option>
                    </select>
                </td>
            </tr>
            <tr align="center">
                <td>年排放量，<br/>吨/年</td>
                <td><input type="text" name="废气排放量1" size="9" /></td>
                <td><input type="text" name="废气排放量2" size="9" /></td>
                <td><input type="text" name="废气排放量3" size="9" /></td>
                <td><input type="text" name="废气排放量4" size="9" /></td>
                <td><input type="text" name="废气排放量5" size="9" /></td>
                <td><input type="text" name="废气排放量6" size="9" /></td>
                <td><input type="text" name="废气排放量7" size="9" /></td>
                <td rowspan="2"><input type="text" name="废气排放_喷氮" size="9" /></td>
                <td>2</td>
                <td>分级燃烧</td>
                <td><select name="分级燃烧" size="1">
                        <option value="空"></option>
                        <option value="选中">√</option>
                    </select>
                </td>
            </tr>
            <tr align="center">
                <td>排放浓度，<br/>mg/m³</td>
                <td><input type="text" name="废气排放浓度1" size="9" /></td>
                <td><input type="text" name="废气排放浓度2" size="9" /></td>
                <td><input type="text" name="废气排放浓度3" size="9" /></td>
                <td><input type="text" name="废气排放浓度4" size="9" /></td>
                <td><input type="text" name="废气排放浓度5" size="9" /></td>
                <td><input type="text" name="废气排放浓度6" size="9" /></td>
                <td><input type="text" name="废气排放浓度7" size="9" /></td>
                <td>3</td>
                <td>1+2</td>
                <td><select name="1+2">
                        <option value="空"></option>
                        <option value="选中">√</option>
                    </select>
                </td>
            </tr>
            <tr align="center">
                <td>除尘设备<br/>（电/袋）</td>
                <td><input type="text" size="9" /></td>
                <td><input type="text" size="9" /></td>
                <td><input type="text" size="9" /></td>
                <td><input type="text" size="9" /></td>
                <td><input type="text" size="9" /></td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>4</td>
                <td>其它</td>
                <td><select name="其它">
                        <option value="空"></option>
                        <option value="选中">√</option>
                    </select>
                </td>
            </tr>
        </table>
    </div>
    <div id="form_four" align="center" valign="bottom">
        <table border="1" cellspacing="0" cellpadding="0" width="1000" bgcolor="">
            <tr align="center">
                <td rowspan="5" width="30">主<br/>要<br/>设<br/>备</td>
                <td rowspan="2" width="100">设备名称</td>
                <td colspan="3">生料磨</td>
                <td>窑</td>
                <td colspan="3">水泥磨</td>
            </tr>
            <tr align="center">
                <td>粉磨方式</td>
                <td>规格型号</td>
                <td>数量</td>
                <td>规格</td>
                <td>粉磨方式</td>
                <td>规格型号</td>
                <td>数量</td>
            </tr>
            <tr align="center">
                <td width="100">设备情况</td>
                <td><input type="text" name="石料磨粉磨方式" size="9" /></td>
                <td><input type="text" name="石料磨规格型号" size="9" /></td>
                <td><input type="text" name="石料磨数量" size="9" /></td>
                <td><input type="text" name="窑规格" size="9" /></td>
                <td><input type="text" name="水泥磨粉磨方式" size="9" /></td>
                <td><input type="text" name="水泥磨规格型号" size="9" /></td>
                <td><input type="text" name="水泥磨数量" size="9" /></td>
            </tr>
        </table>
    </div>
    <div id="form_tail" align="center" valign="bottom">
        <table border="0" cellspacing="0" cellpadding="0" width="1000" bgcolor="">
            <tr>
                <td align="left">*备注，若无改数据计算值，可空缺</td>
            </tr>
            <tr>
                <td><p align="right" id="one"><input type="submit" value="&nbsp;提&nbsp;&nbsp;&nbsp;交&nbsp;" />&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="&nbsp;重&nbsp;&nbsp;&nbsp;置&nbsp;" /></p></td>
            </tr>
        </table>
    </div>


</form>
</body>
</html>
