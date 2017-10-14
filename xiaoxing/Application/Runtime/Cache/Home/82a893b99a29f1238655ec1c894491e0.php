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

<body translate="yes" >
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
            <li>
                <a rel="nofollow"  href="<?php echo U('../index');?>"><i class="fa fa-fw fa-home"></i> 主页</a>
            </li>
            <li>
                <a rel="nofollow" rel="noreferrer"href="<?php echo U('dataAnalysis');?>"><i class="fa fa-fw fa-folder"></i> 硬件位置（地图）</a>
            </li>
            <li>
                <a rel="nofollow" rel="noreferrer"href="<?php echo U('shopping');?>"><i class="fa fa-fw fa-folder"></i> 在线商店</a>
            </li>
            <li>
                <a rel="nofollow" rel="noreferrer"href="<?php echo U('chiyao');?>"><i class="fa fa-fw fa-folder"></i> 吃药提醒</a>
            </li>
            <!--<li>
                <a rel="nofollow" rel="noreferrer"href="<?php echo U('youmeng');?>"><i class="fa fa-fw fa-file-o"></i> 友盟社区</a>
            </li>-->
            <!--<li>
                <a rel="nofollow" rel="noreferrer"href="#"><i class="fa fa-fw fa-cog"></i> Third page</a>
            </li>-->
            <!--<li class="dropdown">
                <a rel="nofollow" rel="noreferrer"href="#" class="dropdown-toggle" data-toggle="dropdown" ><i class="fa fa-fw fa-plus"></i> 其他分析 <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header">数据库数据表</li>
                    <li><a rel="nofollow" rel="noreferrer"href="<?php echo U('mapV');?>">硬件分布图</a></li>
                    <li><a rel="nofollow" rel="noreferrer"href="<?php echo U('equipment');?>">equipment</a></li>
                    <li><a rel="nofollow" rel="noreferrer"href="<?php echo U('position');?>">position</a></li>
                    <li><a rel="nofollow" rel="noreferrer"href="<?php echo U('rail');?>">rail</a></li>
                    &lt;!&ndash;<li><a rel="nofollow" rel="noreferrer"href="#">One more separated link</a></li>&ndash;&gt;
                </ul>
            </li>-->
            <!--<li>
                <a rel="nofollow" rel="noreferrer"href="#"><i class="fa fa-fw fa-bank"></i> Page four</a>
            </li>
            <li>
                <a rel="nofollow" rel="noreferrer"href="#"><i class="fa fa-fw fa-dropbox"></i> Page 5</a>
            </li>-->
            <li>
                <a rel="nofollow" rel="noreferrer"href="<?php echo U('About/about');?>"><i class="fa fa-fw fa-twitter"></i>联系我们</a>
            </li>
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
<!--<link rel='stylesheet' href='../../Public/Css/HomeCss/hardwarePosition.css'>-->
<link rel='stylesheet' href='../../Public/Css/TableCss/bootstrap-table.css'>
<link rel='stylesheet' href='../../Public/Js/TableJs/extensions/click-edit-row/bootstrap-table-click-edit-row.css'>
<script src="../../Public/Js/TableJs/TableManager/table_chiyao.js"></script>
<script src='../../Public/Js/TableJs/bootstrap-table.min.js'></script>
<script src='../../Public/Js/TableJs/bootstrap-table-locale-all.min.js'></script>
<script src='../../Public/Js/TableJs/locale/bootstrap-table-zh-CN.js'></script>
<script src='../../Public/Js/TableJs/extensions/click-edit-row/bootstrap-table-click-edit-row.js'></script>
<script src="../../Public/Js/TableJs/extensions/toolbar/bootstrap-table-toolbar.js"></script>
<style type="text/css">
    /*html{height:100%}*/
    body{background-color: #f2f2f2;margin:0px;padding:0px}
    #container{height:100%}
    .input-group{
        margin:10px auto;
    }
</style>
<div class="container" id="container">
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">新增吃药数据</h4>
                </div>
                <div class="modal-body">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-medision_name">药品名称</span>
                        <input type="text" class="form-control" placeholder="药品名称" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-time">时间</span>
                        <input type="text" class="form-control" placeholder="时间" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-equip_name">设备名称</span>
                        <input type="text" class="form-control" placeholder="设备名称" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-equip_id">设备编号</span>
                        <input type="text" class="form-control" placeholder="设备编号" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                    <button id="model_save" type="button" class="btn btn-primary">确定</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
            <!--table Toolbar-->
            <div id="toolbar">
                <button id="button_remove" class="btn btn-default">删除数据</button>
                <!-- Button trigger modal -->
                <button class="btn btn-default" data-toggle="modal" data-target="#myModal">新增数据</button>
            </div>
            <table class="table table-hover" id="table" data-toggle="table" data-url="../Chiyao/chiyao_json"
                   data-pagination=true data-page-list='[10, 25, 50, 100, All]' data-select-item-name='btSelectItem'
                   data-smart-display=true data-search="true" data-show-columns="true" data-show-refresh="true"
                   data-show-toggle="true" data-show-pagination-switch="true"
                   data-click-to-select="true" data-click-edit="true" data-unique-id="id"
                   data-toolbar="#toolbar"
                   data-advanced-search="true"
                   data-id-table="advancedTable">
                <thead>
                    <tr>
                        <th data-checkbox="true"></th>
                        <th data-field="id">id</th>
                        <th data-field="medision_name" data-editable="input">药品名称</th>
                        <th data-field="time" data-editable="input">吃药时间</th>
                        <th data-field="equip_name" data-editable="input">设备名</th>
                        <th data-field="equip_id" data-editable="input">设备编号</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
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