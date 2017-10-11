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
                <a rel="nofollow" rel="noreferrer"href="#" class="dropdown-toggle" data-toggle="dropdown" ><i class="fa fa-fw fa-plus"></i> 数据分析 <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header">数据分析图</li>
                    <li><a rel="nofollow" rel="noreferrer"href="<?php echo U('echart_equip');?>">硬件相关</a></li>
                    <li><a rel="nofollow" rel="noreferrer"href="<?php echo U('echart_chiyao');?>">药品相关</a></li>
                    <li><a rel="nofollow" rel="noreferrer"href="<?php echo U('echart_user');?>">用户相关</a></li>
                    <!--<li><a rel="nofollow" rel="noreferrer"href="<?php echo U('rail');?>">rail</a></li>-->
                    <!--<li><a rel="nofollow" rel="noreferrer"href="#">One more separated link</a></li>-->
                </ul>
            </li>
            <li class="dropdown">
                <a rel="nofollow" rel="noreferrer"href="#" class="dropdown-toggle" data-toggle="dropdown" ><span class="glyphicon glyphicon-user"></span> 我的账号 <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header">账户信息</li>
                    <li><a rel="nofollow" rel="noreferrer"href="<?php echo U('User/user');?>"><?php echo '欢迎'.session('username_admin').'!'; ?></a></li>
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
<style type="text/css">
    *{
        padding:0px;
        margin:0px;
    }
    html{height:100%}
    body{height:100%;margin:0px;padding:0px;margin-top: -70px;}
</style>
<!-- ECharts单文件引入 -->
<script src="http://echarts.baidu.com/build/dist/echarts-all.js"></script>
<!-- 为ECharts准备一个具备大小（宽高）的Dom -->
<div class="container-fluid" style="height:100%;background-color: #FFFFFF;">
    <div id="main" style="height:100%;padding: 100px;"></div>
</div>
<div class="container-fluid" style="height:100%;background-color: #FFFFFF;">
    <div id="echart_event_river" style="padding: 100px;height:100%"></div>
</div>
<div class="container-fluid" style="height:100%;background-color: #FFFFFF;">
    <div id="echart_wordCloud" style="padding: 100px;height:100%"></div>
</div>
<script type="text/javascript">
    var myChart = echarts.init(document.getElementById('main'));
    $.post('../Chiyao/chiyao_equipList_json',null,function(data){
        var option = {
            title : {
                text: '设备药品关联图',
                subtext: '设备药品关联'
            },
            tooltip : {
                trigger: 'item',
                formatter: function (params) {
                    if (params.indicator2) {    // is edge
                        return params.indicator2 + ' ' + params.name + ' ' + params.indicator;
                    } else {    // is node
                        return params.name
                    }
                }
            },
            toolbox: {
                show : true,
                feature : {
                    restore : {show: true},
                    magicType: {show: true, type: ['force', 'chord']},
                    dataView : {show: true, readOnly: false},
                    saveAsImage : {show: true}
                }
            },
            legend: {

                data:data.data
            },
            series : [
                {
                    name: '设备药品关联图',
                    type: 'chord',
                    sort: 'ascending',
                    sortSub: 'descending',
                    ribbonType: false,
                    radius: '60%',
                    itemStyle: {
                        normal: {
                            label: {
                                rotate: true
                            }
                        }
                    },
                    minRadius: 7,
                    maxRadius: 20,
                    // 使用 nodes links 表达和弦图
                    nodes: data.nodes,
                    links: data.links
                }]
        };
        myChart.setOption(option);
    });
</script>
<!--药品的事件河流图-->
<script type="text/javascript">
    var myChart_event_river = echarts.init(document.getElementById('echart_event_river'));
    $.post('../Chiyao/chiyao_event_river',null,function(mdata){
        var option_event_river = {
            title : {
                text: '药品事件河流图',
                subtext: '吃药时间'
            },
            tooltip : {
                trigger: 'item',
                enterable: true
            },
            legend: {
                data:mdata.legend
            },
            toolbox: {
                show : true,
                feature : {
                    mark : {show: true},
                    restore : {show: true},
                    dataView : {show: true, readOnly: false},
                    saveAsImage : {show: true}
                }
            },
            xAxis : [
                {
                    type : 'time',
                    boundaryGap: [0.05,0.1]
                }
            ],
            series :mdata.series
        };

        myChart_event_river.setOption(option_event_river);
    });
</script>
<!--药品频率的字符云图-->
<script type="text/javascript">
    var myChart_wordCloud = echarts.init(document.getElementById('echart_wordCloud'));
    $.post('../Chiyao/chiyao_wordCloud',null,function(mdata){
        var option_wordCloud = {
            title: {
                text: '药品频率字符云',
                subtext: '药品频率'
            },
            tooltip: {
                show: true
            },
            toolbox: {
                show : true,
                feature : {
                    mark : {show: true},
                    restore : {show: true},
                    dataView : {show: true, readOnly: false},
                    saveAsImage : {show: true}
                }
            },
            series: [{
                name: '药品频率',
                type: 'wordCloud',
                size: ['80%', '80%'],
                textRotation : [0, 45, 90, -45],
                textPadding: 0,
                autoSize: {
                    enable: true,
                    minSize: 14
                },
                data: mdata
            }]
        };
        myChart_wordCloud.setOption(option_wordCloud);
    });
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