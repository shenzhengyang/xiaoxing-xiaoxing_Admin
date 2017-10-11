<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html >

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../../Public/Image/logo.png">
    <title>硬件位置</title>
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">-->
    <link rel='stylesheet prefetch' href='../../Public/Css/bootstrap.min.css'>
    <link rel='stylesheet' href='../../Public/Css/analysis.css'>
    <link rel='stylesheet' href='../../Public/Css/HomeCss/footer.css'>
    <script src='../../Public/Js/jquery.js'></script>
    <script src='../../Public/Js/bootstrap.min.js'></script>
    <script src='../../Public/Js/analysis.js'></script>
</head>

<body translate="no" >
<div id="wrapper">
    <div class="overlay"></div>
    <!-- Sidebar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
        <ul class="nav sidebar-nav">
            <li class="sidebar-brand">
                <a rel="nofollow" rel="noreferrer" href="<?php echo U('../index');?>">
                    孝行
                </a>
            </li>
            <!--<li>
                <a rel="nofollow"  href="<?php echo U('../index');?>"><i class="fa fa-fw fa-home"></i> 主页</a>
            </li>
            <li>
                <a rel="nofollow" rel="noreferrer"href="<?php echo U('dataAnalysis');?>"><i class="fa fa-fw fa-folder"></i> 硬件位置（地图）</a>
            </li>-->
            <li>
                <a rel="nofollow" rel="noreferrer"href="<?php echo U('youmeng');?>"><span class="glyphicon glyphicon-asterisk"></span> 友盟社区</a>
            </li>
            <!--<li>
                <a rel="nofollow" rel="noreferrer"href="<?php echo U('databases');?>"><span class="glyphicon glyphicon-hdd"></span> 更改数据库</a>
            </li>-->
            <li class="dropdown">
                <a rel="nofollow" rel="noreferrer"href="#" class="dropdown-toggle" data-toggle="dropdown" ><span class="glyphicon glyphicon-hdd"></span> 更改数据库 <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header">数据库数据表</li>
                    <li><a rel="nofollow" rel="noreferrer"href="<?php echo U('rail');?>">围栏数据</a></li>
                    <li><a rel="nofollow" rel="noreferrer"href="<?php echo U('position');?>">定位数据</a></li>
                    <li><a rel="nofollow" rel="noreferrer"href="<?php echo U('equipment');?>">设备列表</a></li>
                    <li><a rel="nofollow" rel="noreferrer"href="<?php echo U('equip');?>">设备绑定手机列表</a></li>
                    <li><a rel="nofollow" rel="noreferrer"href="<?php echo U('feedback');?>">反馈信息列表</a></li>
                    <li><a rel="nofollow" rel="noreferrer"href="<?php echo U('user');?>">用户信息列表</a></li>
                    <li><a rel="nofollow" rel="noreferrer"href="<?php echo U('chiyao');?>">吃药信息列表</a></li>
                    <!--<li><a rel="nofollow" rel="noreferrer"href="#">One more separated link</a></li>-->
                </ul>
            </li>
            <!--<li>
                <a rel="nofollow" rel="noreferrer"href="#"><i class="fa fa-fw fa-cog"></i> Third page</a>
            </li>-->
            <li class="dropdown">
                <a rel="nofollow" rel="noreferrer"href="#" class="dropdown-toggle" data-toggle="dropdown" ><i class="fa fa-fw fa-plus"></i> 其他分析 <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header">数据库数据表</li>
                    <li><a rel="nofollow" rel="noreferrer"href="<?php echo U('mapV');?>">硬件分布图</a></li>
                    <li><a rel="nofollow" rel="noreferrer"href="<?php echo U('equipment');?>">equipment</a></li>
                    <li><a rel="nofollow" rel="noreferrer"href="<?php echo U('position');?>">position</a></li>
                    <li><a rel="nofollow" rel="noreferrer"href="<?php echo U('rail');?>">rail</a></li>
                    <!--<li><a rel="nofollow" rel="noreferrer"href="#">One more separated link</a></li>-->
                </ul>
            </li>
            <li class="dropdown">
                <a rel="nofollow" rel="noreferrer"href="#" class="dropdown-toggle" data-toggle="dropdown" ><span class="glyphicon glyphicon-user"></span> 我的账号 <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header">账户信息</li>
                    <li><a rel="nofollow" rel="noreferrer"href="<?php echo U('User/user');?>"><?php echo '欢迎'.session('username').'!'; ?></a></li>
                    <li><a rel="nofollow" rel="noreferrer"href="<?php echo U('User/changepass');?>">修改密码</a></li>
                    <li><a rel="nofollow" rel="noreferrer"href="<?php echo U('Index/loginOut');?>">退出账户</a></li>
                    <!--<li><a rel="nofollow" rel="noreferrer"href="#">One more separated link</a></li>-->
                </ul>
            </li>
            <!--<li>
                <a rel="nofollow" rel="noreferrer"href="<?php echo U('User/user');?>"><span class="glyphicon glyphicon-user"></span>  我的账户</a>
            </li>-->

            <!--<li>
                <a rel="nofollow" rel="noreferrer"href="#"><i class="fa fa-fw fa-bank"></i> Page four</a>
            </li>
            <li>
                <a rel="nofollow" rel="noreferrer"href="#"><i class="fa fa-fw fa-dropbox"></i> Page 5</a>
            </li>-->
            <!--<li>
                <a rel="nofollow" rel="noreferrer"href="<?php echo U('About/about');?>"><i class="fa fa-fw fa-twitter"></i>联系我们</a>
            </li>-->
        </ul>
    </nav>
    <!-- /#sidebar-wrapper -->
    <!-- Page Content -->
    <div id="page-content-wrapper">
        <button type="button" class="hamburger is-closed animated fadeInLeft" data-toggle="offcanvas">
            <span class="hamb-top"></span>
            <span class="hamb-middle"></span>
            <span class="hamb-bottom"></span>
        </button>
    </div>
    <!-- /#page-content-wrapper -->
</div>
<!-- /#wrapper -->
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=LDtNUc8nseb2rXcVMt3Vkz3664eQUChf"></script>
<script src="http://mapv.baidu.com/build/mapv.min.js"></script>
<script src="http://apps.bdimg.com/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
<!-- ECharts单文件引入 -->
<script src="http://echarts.baidu.com/build/dist/echarts-all.js"></script>
<style type="text/css">
    *{
        padding:0px;
        margin:0px;
    }
    html{height:100%}
    body{height:100%;margin:0px;padding:0px}
    #container{
        margin-top: -70px;
        height:100%;
        background-color: #FFFFFF;
    }
    #map{
        width:100%;
        height:100%;
    }
</style>
<!--硬件分布图-->
<div id="container">
    <div id="map"></div>
    <!--<canvas id="canvas"></canvas>-->
</div>
<script src="../../Public/Js/HomeJs/mapV.js"></script>
<!-- 为ECharts准备一个具备大小（宽高）的Dom -->
<div class="container-fluid" style="height:100%;background-color: #FFFFFF;">
    <div id="equip_status" style="height:100%"></div>
</div>
<div class="container-fluid" style="height:100%;background-color: #FFFFFF;">
    <div id="equip_battery" style="height:100%"></div>
</div>
<!--硬件状态雷达图-->
<script type="text/javascript">
    var myChart = echarts.init(document.getElementById('equip_status'));
    $.post('../EquipStatus/echart_equipStatus',null,function(data){

        var option = {
            title : {
                text: '预算 vs 开销（Budget vs spending）',
                subtext: '纯属虚构'
            },
            tooltip : {
                trigger: 'axis'
            },
            legend: {
                orient : 'vertical',
                x : 'right',
                y : 'bottom',
                data:data.legend
            },
            toolbox: {
                show : true,
                feature : {
                    mark : {show: true},
                    dataView : {show: true, readOnly: false},
                    restore : {show: true},
                    saveAsImage : {show: true}
                }
            },
            polar : [
                {
                    indicator : [
                        { text: '速度（speed）', max: 10},
                        { text: '电量（battery）', max: 100},
                        { text: '是否在围栏中（inrail）', max: 1},
                        { text: '围栏半径（radius）', max: 200},
                        { text: '设备关联药品数量（medision number）', max: 10}
                    ]
                }
            ],
            calculable : true,
            series : [
                {
                    name: '预算 vs 开销（Budget vs spending）',
                    type: 'radar',
                    data : data.series
                }
            ]
        };
        myChart.setOption(option);
    })
</script>
<!--硬件电量动态变换图-->
<script type="text/javascript">
    var myChart_equip_battery1 = echarts.init(document.getElementById('equip_battery'));
    $.post('../EquipStatus/echart_battery',null,function(mdata){


        var option_equip_battery1 = {
            title : {
                text: '动态数据',
                subtext: '纯属虚构'
            },
            tooltip : {
                trigger: 'axis'
            },
            legend: {
                data:mdata.legend
            },
            toolbox: {
                show : true,
                feature : {
                    mark : {show: true},
                    dataView : {show: true, readOnly: false},
                    magicType : {show: true, type: ['line', 'bar']},
                    restore : {show: true},
                    saveAsImage : {show: true}
                }
            },
            dataZoom : {
                show : false,
                start : 0,
                end : 100
            },
            xAxis : [
                {
                    type : 'category',
                    boundaryGap : true,
                    data : mdata.xAxis
                }
            ],
            yAxis : [
                {
                    type : 'value',
                    scale: true,
                    name : '价格',
                    boundaryGap: [0.2, 0.2]
                }
            ],
            series : mdata.series
        };
        myChart_equip_battery1.setOption(option_equip_battery1);
    });
    var lastData = 11;
    var axisData;
    var timeTicket;
    clearInterval(timeTicket);
    function getNowFormatDate() {
        var date = new Date();
        var seperator1 = "-";
        var seperator2 = ":";
        var month = date.getMonth() + 1;
        var strDate = date.getDate();
        if (month >= 1 && month <= 9) {
            month = "0" + month;
        }
        if (strDate >= 0 && strDate <= 9) {
            strDate = "0" + strDate;
        }
        var currentdate = date.getFullYear() + seperator1 + month + seperator1 + strDate
                + " " + date.getHours() + seperator2 + date.getMinutes()
                + seperator2 + date.getSeconds();
        return currentdate;
    }
    timeTicket = setInterval(function (){
        /*lastData += Math.random() * ((Math.round(Math.random() * 10) % 2) == 0 ? 1 : -1);
        lastData = lastData.toFixed(1) - 0;
        axisData = getNowFormatDate();*/
        $.post('../EquipStatus/echart_battery_addData',null,function(mdata){

            // 动态数据接口 addData
            myChart_equip_battery1.addData(mdata);
        });
    }, 2100);


</script>
<!--footer-->
<footer class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <span>Copyright &copy; <a href="#">孝行团队</a></span> |
                <span>联系方式：<a href="#" target="_blank">xiaoxing_TM@163.com</a></span>
            </div>
        </div>
    </div>
</footer>
</body>
</html>