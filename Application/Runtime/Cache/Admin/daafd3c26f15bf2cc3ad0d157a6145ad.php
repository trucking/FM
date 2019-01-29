<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 2.3.1
Version: 1.3
Author: KeenThemes
Website: http://www.keenthemes.com/preview/?theme=metronic
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <title>班车管理系统 | 国药集团威奇达药业有限公司</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="/FM/Application/Admin/View/media/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="/FM/Application/Admin/View/media/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
    <link href="/FM/Application/Admin/View/media/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="/FM/Application/Admin/View/media/css/style-metro.css" rel="stylesheet" type="text/css"/>
    <link href="/FM/Application/Admin/View/media/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="/FM/Application/Admin/View/media/css/style-responsive.css" rel="stylesheet" type="text/css"/>
    <link href="/FM/Application/Admin/View/media/css/default.css" rel="stylesheet" type="text/css" id="style_color"/>
    <link href="/FM/Application/Admin/View/media/css/uniform.default.css" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="/FM/Application/Admin/View/media/css/jquery.gritter.css" rel="stylesheet" type="text/css"/>
    <link href="/FM/Application/Admin/View/media/css/daterangepicker.css" rel="stylesheet" type="text/css" />
    <link href="/FM/Application/Admin/View/media/css/fullcalendar.css" rel="stylesheet" type="text/css"/>
    <link href="/FM/Application/Admin/View/media/css/jqvmap.css" rel="stylesheet" type="text/css" media="screen"/>
    <link href="/FM/Application/Admin/View/media/css/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- END PAGE LEVEL STYLES -->
    <link rel="shortcut icon" href="/FM/Application/Admin/View/media/image/favicon.ico" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
<!-- BEGIN HEADER -->
<div class="header navbar navbar-inverse navbar-fixed-top">
    <!-- BEGIN TOP NAVIGATION BAR -->
    <div class="navbar-inner">
        <div class="container-fluid">
            <!-- BEGIN LOGO -->

            <a class="brand">
                <span class="logo-title"> 班车管理系统</span>
            </a>
            <!-- END LOGO -->
            <!-- END TOP NAVIGATION MENU -->
        </div>
    </div>
    <!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->
<!-- BEGIN CONTAINER -->
<div class="page-container">
<!-- BEGIN SIDEBAR -->
<div class="page-sidebar nav-collapse collapse">
    <!-- BEGIN SIDEBAR MENU -->
    <ul class="page-sidebar-menu">
        <li>
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            <div class="sidebar-toggler hidden-phone"></div>
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
        </li>
        <li>
            <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
            <form class="sidebar-search">
                <div class="input-box">
                    <a href="javascript:;" class="remove"></a>
                    <input type="text" placeholder="搜索..." />
                    <input type="button" class="submit" value=" " />
                </div>
            </form>
            <!-- END RESPONSIVE QUICK SEARCH FORM -->
        </li>
        <li class="">
            <a href="/FM/admin.php/Index/LoginTo">
                <i class="icon-home"></i>
                <span class="title">系统管理</span>
            </a>
        </li>
        <li class="start active ">
            <a href="javascript:;">
                <i class="icon-cogs"></i>
                <span class="title">班车管理</span>
            </a>
        </li>
        <li class="">
            <a href="javascript:;">
                <i class="icon-bookmark-empty"></i>
                <span class="title">路线管理</span>
            </a>
        </li>

    </ul>
    <!-- END SIDEBAR MENU -->
</div>
<!-- END SIDEBAR -->
<!-- BEGIN PAGE -->
<div class="page-content">
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <div id="portlet-config" class="modal hide">
        <div class="modal-header">
            <button data-dismiss="modal" class="close" type="button"></button>
            <h3>界面设置</h3>
        </div>
        <div class="modal-body">
            Widget settings form goes here
        </div>
    </div>
    <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <!-- BEGIN PAGE CONTAINER-->
    <div class="container-fluid">
        <!-- BEGIN PAGE HEADER-->
        <div class="row-fluid">
            <div class="span12">
                <!-- BEGIN STYLE CUSTOMIZER -->
                <div class="color-panel hidden-phone">
                    <div class="color-mode-icons icon-color"></div>
                    <div class="color-mode-icons icon-color-close"></div>
                    <div class="color-mode">
                        <p>系统颜色</p>
                        <ul class="inline">
                            <li class="color-black current color-default" data-style="default"></li>
                            <li class="color-blue" data-style="blue"></li>
                            <li class="color-brown" data-style="brown"></li>
                            <li class="color-purple" data-style="purple"></li>
                            <li class="color-grey" data-style="grey"></li>
                            <li class="color-white color-light" data-style="light"></li>
                        </ul>
                        <label>
                            <span>层</span>
                            <select class="layout-option m-wrap small">
                                <option value="fluid" selected>流式</option>
                                <option value="boxed">箱式</option>
                            </select>
                        </label>
                        <label>
                            <span>标题栏</span>
                            <select class="header-option m-wrap small">
                                <option value="fixed" selected>固定</option>
                                <option value="default">默认</option>
                            </select>
                        </label>
                        <label>
                            <span>侧边栏</span>
                            <select class="sidebar-option m-wrap small">
                                <option value="fixed">固定</option>
                                <option value="default" selected>默认</option>
                            </select>
                        </label>
                        <label>
                            <span>底部</span>
                            <select class="footer-option m-wrap small">
                                <option value="fixed">固定</option>
                                <option value="default" selected>默认</option>
                            </select>
                        </label>
                    </div>
                </div>
                <!-- END BEGIN STYLE CUSTOMIZER -->
                <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                <h3 class="page-title">
                    班车管理 <small>班车的信息维护与记录</small>
                </h3>
                <!-- END PAGE TITLE & BREADCRUMB-->
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#table1" data-toggle="tab">班车列表</a></li>
                    <li><a href="#table2" data-toggle="tab">卫生评分</a></li>
                    <li><a href="#table3" data-toggle="tab">班车车长投票</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="table1">
                        <div class="control-group">
                            <div class="row-fluid">
                                <div class="span6">
                                    <div class="portlet box green">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="icon-picture">
                                                    班车列表
                                                </i>
                                            </div>
                                        </div>
                                        <div class="portlet-body">
                                            <table class="table table-condensed table-hover">
                                                <thead>
                                                <tr>
                                                    <th>序号</th>
                                                    <th>车牌号</th>
                                                    <th>车长</th>
                                                    <th>电话</th>
                                                    <th>状态</th>
                                                    <th>操作</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php if(is_array($busList)): foreach($busList as $key=>$list): ?><tr>
                                                    <td><?php echo ($list["id"]); ?></td>
                                                    <td><?php echo ($list["no"]); ?></td>
                                                    <td><?php echo ($list["master"]); ?></td>
                                                    <td><?php echo ($list["tel"]); ?></td>
                                                    <?php if($list["state"] == '1'): ?><td>
                                                        <span class="label label-success">在用</span>
                                                        </td>
                                                        <?php else: ?>
                                                        <td>
                                                        <span class="label label-danger">停用</span>
                                                        </td><?php endif; ?>
                                                    <td>
                                                        <button class="btn blue mini">修改</button>
                                                        <?php if($list["state"] == '1'): ?><button class="btn gray mini">停用</button>
                                                        <?php else: ?>
                                                        <button class="btn green mini">启用</button><?php endif; ?>

                                                        <button class="btn red mini">删除</button>
                                                    </td>
                                                </tr><?php endforeach; endif; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="table2">
                        <div>
                            <a class="btn green" data-toggle="modal" href="#addUser"><i class="icon-plus"></i>新增用户</a>
                        </div>
                        <p></p>
                        <div class="row-fluid">
                            <div class="span6">
                                <div class="portlet box green">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="icon-picture">
                                                用户信息
                                            </i>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <table class="table table-condensed table-hover">
                                            <thead>
                                            <tr>
                                                <th>序号</th>
                                                <th>用户名</th>
                                                <th>操作</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>zhansan</td>
                                                <td>
                                                    <button class="btn blue mini">修改</button>
                                                    <button class="btn red mini">删除</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>lisi</td>
                                                <td>
                                                    <button class="btn blue mini">修改</button>
                                                    <button class="btn red mini">删除</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>lisi</td>
                                                <td>
                                                    <button class="btn blue mini">修改</button>
                                                    <button class="btn red mini">删除</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>lisi</td>
                                                <td>
                                                    <button class="btn blue mini">修改</button>
                                                    <button class="btn red mini">删除</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>lisi</td>
                                                <td>
                                                    <button class="btn blue mini">修改</button>
                                                    <button class="btn red mini">删除</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>lisi</td>
                                                <td>
                                                    <button class="btn blue mini">修改</button>
                                                    <button class="btn red mini">删除</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>lisi</td>
                                                <td>
                                                    <button class="btn blue mini">修改</button>
                                                    <button class="btn red mini">删除</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>lisi</td>
                                                <td>
                                                    <button class="btn blue mini">修改</button>
                                                    <button class="btn red mini">删除</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>lisi</td>
                                                <td>
                                                    <button class="btn blue mini">修改</button>
                                                    <button class="btn red mini">删除</button>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="table3">
                        权限管理
                    </div>
                </div>

            </div>
        </div>
        <!-- END PAGE HEADER-->

    </div>
    <!-- END PAGE CONTAINER-->
</div>
<!-- END PAGE -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="footer">
    <div class="footer-inner">
        2018 &copy; 雁过无声
    </div>
    <div class="footer-tools">
			<span class="go-top">
			<i class="icon-angle-up"></i>
			</span>
    </div>
</div>
<!-- END FOOTER -->
<div id="addUser" class="modal hide fade" tabindex="-1" data-focus-on="input:first">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        <h3>用户注册</h3>
    </div>
    <div class="row-fluid">
        <div class="span12">
            <label class="span2 offset3">用户名：</label>
            <div class="span2">
                <input class="m-wrap small" placeholder="用户名" type="text">
            </div>
        </div>
        <div class="span12">
            <label class="span2 offset3">密码：</label>
            <div class="span2">
                <input class="m-wrap small" placeholder="密码" type="password">
            </div>
        </div>

        <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn">关闭</button>
            <button type="button" class="btn green">添加</button>
        </div>
    </div>

</div>
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<script src="/FM/Application/Admin/View/media/js/jquery-1.10.1.min.js" type="text/javascript"></script>
<script src="/FM/Application/Admin/View/media/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="/FM/Application/Admin/View/media/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="/FM/Application/Admin/View/media/js/bootstrap.min.js" type="text/javascript"></script>
<!--[if lt IE 9]>
<script src="/FM/Application/Admin/View/media/js/excanvas.min.js"></script>
<script src="/FM/Application/Admin/View/media/js/respond.min.js"></script>
<![endif]-->
<script src="/FM/Application/Admin/View/media/js/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="/FM/Application/Admin/View/media/js/jquery.blockui.min.js" type="text/javascript"></script>
<script src="/FM/Application/Admin/View/media/js/jquery.cookie.min.js" type="text/javascript"></script>
<script src="/FM/Application/Admin/View/media/js/jquery.uniform.min.js" type="text/javascript" ></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="/FM/Application/Admin/View/media/js/jquery.vmap.js" type="text/javascript"></script>
<script src="/FM/Application/Admin/View/media/js/jquery.vmap.russia.js" type="text/javascript"></script>
<script src="/FM/Application/Admin/View/media/js/jquery.vmap.world.js" type="text/javascript"></script>
<script src="/FM/Application/Admin/View/media/js/jquery.vmap.europe.js" type="text/javascript"></script>
<script src="/FM/Application/Admin/View/media/js/jquery.vmap.germany.js" type="text/javascript"></script>
<script src="/FM/Application/Admin/View/media/js/jquery.vmap.usa.js" type="text/javascript"></script>
<script src="/FM/Application/Admin/View/media/js/jquery.vmap.sampledata.js" type="text/javascript"></script>
<script src="/FM/Application/Admin/View/media/js/jquery.flot.js" type="text/javascript"></script>
<script src="/FM/Application/Admin/View/media/js/jquery.flot.resize.js" type="text/javascript"></script>
<script src="/FM/Application/Admin/View/media/js/jquery.pulsate.min.js" type="text/javascript"></script>
<script src="/FM/Application/Admin/View/media/js/date.js" type="text/javascript"></script>
<script src="/FM/Application/Admin/View/media/js/daterangepicker.js" type="text/javascript"></script>
<script src="/FM/Application/Admin/View/media/js/jquery.gritter.js" type="text/javascript"></script>
<script src="/FM/Application/Admin/View/media/js/fullcalendar.min.js" type="text/javascript"></script>
<script src="/FM/Application/Admin/View/media/js/jquery.easy-pie-chart.js" type="text/javascript"></script>
<script src="/FM/Application/Admin/View/media/js/jquery.sparkline.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="/FM/Application/Admin/View/media/js/app.js" type="text/javascript"></script>
<script src="/FM/Application/Admin/View/media/js/index.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
    jQuery(document).ready(function() {
        App.init(); // initlayout and core plugins
        Index.init();
        Index.initJQVMAP(); // init index page's custom scripts
        Index.initCalendar(); // init index page's custom scripts
        Index.initCharts(); // init index page's custom scripts
        Index.initChat();
        Index.initMiniCharts();
        Index.initDashboardDaterange();
        Index.initIntro();
    });
</script>
<!-- END JAVASCRIPTS -->
</body>
</html>