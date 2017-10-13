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
                <a rel="nofollow" rel="noreferrer"href="#" class="dropdown-toggle" data-toggle="dropdown" ><sapn class="glyphicon glyphicon-search"></sapn> 数据分析 <span class="caret"></span></a>
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
<link rel='stylesheet' href='../../Public/Css/HomeCss/hardwarePosition.css'>
<style type="text/css">
    html{height:100%}
    body{height:100%;margin:0px;padding:0px}
    #container{height:100%}
</style>
<div id="container">
    <iframe src="https://i.umeng.com/user/products" width="100%" height="100%" scrolling="false"></iframe>
</div>
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