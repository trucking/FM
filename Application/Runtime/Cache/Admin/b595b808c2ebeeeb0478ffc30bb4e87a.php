<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>班车管理系统 | 国药集团威奇达药业有限公司</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="/fm/Application/Admin/View/media/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="/fm/Application/Admin/View/media/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="/fm/Application/Admin/View/media/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/fm/Application/Admin/View/media/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="/fm/Application/Admin/View/media/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="/fm/Application/Admin/View/media/assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <link href="/fm/Application/Admin/View/media/assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
    <link href="/fm/Application/Admin/View/media/assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="/fm/Application/Admin/View/media/assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="/fm/Application/Admin/View/media/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="/fm/Application/Admin/View/media/assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
    <link href="/fm/Application/Admin/View/media/assets/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />
    <link href="/fm/Application/Admin/View/media/assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->
<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
<div class="page-wrapper">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner ">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="index">
                <img src="/fm/Application/Admin/View/media/assets/pages/img/login/logo.png" alt="logo" class="logo-default" /> </a>
            <div class="menu-toggler sidebar-toggler">
                <span></span>
            </div>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
            <span></span>
        </a>
        <!-- END RESPONSIVE MENU TOGGLER -->
    </div>
    <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<!-- BEGIN HEADER & CONTENT DIVIDER -->
<div class="clearfix"> </div>
<!-- END HEADER & CONTENT DIVIDER -->
<!-- BEGIN CONTAINER -->
<div class="page-container">
<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
            <li class="sidebar-toggler-wrapper hide">
                <div class="sidebar-toggler">
                    <span></span>
                </div>
            </li>
            <li class="sidebar-search-wrapper">


            </li>
            <li class="nav-item selected">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">系统管理</span>
                    <span class="selected"></span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item start active open">
                        <a href="companyConf" class="nav-link ">
                            <i class="icon-bar-chart"></i>
                            <span class="title">组织管理</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="userManage" class="nav-link ">
                            <i class="icon-bulb"></i>
                            <span class="title">用户管理</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ">
                            <i class="icon-graph"></i>
                            <span class="title">权限管理</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">班车管理</span>
                    <span class="selected"></span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item start active open">
                        <a href="#" class="nav-link ">
                            <i class="icon-bar-chart"></i>
                            <span class="title">班车概况</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                    <li class="nav-item start ">
                        <a href="#" class="nav-link ">
                            <i class="icon-bulb"></i>
                            <span class="title">班车添加</span>
                        </a>
                    </li>
                    <li class="nav-item start ">
                        <a href="#" class="nav-link ">
                            <i class="icon-graph"></i>
                            <span class="title">班车修改</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">站点管理</span>
                    <span class="selected"></span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item start active open">
                        <a href="#" class="nav-link ">
                            <i class="icon-bar-chart"></i>
                            <span class="title">组织管理</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                    <li class="nav-item start ">
                        <a href="#" class="nav-link ">
                            <i class="icon-bulb"></i>
                            <span class="title">用户管理</span>
                        </a>
                    </li>
                    <li class="nav-item start ">
                        <a href="#" class="nav-link ">
                            <i class="icon-graph"></i>
                            <span class="title">权限管理</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">路线管理</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item start active open">
                        <a href="organizeManage.html" class="nav-link ">
                            <i class="icon-bar-chart"></i>
                            <span class="title">组织管理</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ">
                            <i class="icon-bulb"></i>
                            <span class="title">用户管理</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ">
                            <i class="icon-graph"></i>
                            <span class="title">权限管理</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <a href="#">主页</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span>系统管理</span>
                </li>
            </ul>
            <div class="page-toolbar">
                <div id="dashboard-report-range" class="pull-right tooltips btn btn-sm" data-container="body" data-placement="bottom" data-original-title="Change dashboard date range">
                    <i class="icon-calendar"></i>&nbsp;
                    <span class="thin uppercase hidden-xs"></span>&nbsp;
                    <i class="fa fa-angle-down"></i>
                </div>
            </div>
        </div>
        <h1 class="page-title"> 系统总览
            <small>显示系统现有数量</small>
        </h1>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a class="dashboard-stat dashboard-stat-v2 green-turquoise" href="#">
                    <div class="visual">
                        <i class="fa fa-car"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            <span data-counter="counterup" data-value=""><?php echo ($data["busCount"]); ?></span>
                        </div>
                        <div class="desc">班车数量</div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a class="dashboard-stat dashboard-stat-v2 red" href="#">
                    <div class="visual">
                        <i class="fa fa-comments"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            <span data-counter="counterup" data-value=""><?php echo ($data["lineCount"]); ?></span>
                        </div>
                        <div class="desc">路线数量</div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a class="dashboard-stat dashboard-stat-v2 green" href="#">
                    <div class="visual">
                        <i class="fa fa-comments"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            <span data-counter="counterup" data-value=""><?php echo ($data["stationCount"]); ?></span>
                        </div>
                        <div class="desc">站点数量</div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a class="dashboard-stat dashboard-stat-v2 purple" href="#">
                    <div class="visual">
                        <i class="fa fa-comments"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            <span data-counter="counterup" data-value=""><?php echo ($data["userCount"]); ?></span>
                        </div>
                        <div class="desc">用户数量</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
</div>
<div class="page-footer">
    <div class="page-footer-inner">
        2018 &copy; 雁过无声
    </div>
    <div class="scroll-to-top">
        <i class="icon-arrow-up"></i>
    </div>
</div>
</div>
<div class="quick-nav-overlay"></div>
<script src="/fm/Application/Admin/View/media/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="/fm/Application/Admin/View/media/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/fm/Application/Admin/View/media/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
<script src="/fm/Application/Admin/View/media/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="/fm/Application/Admin/View/media/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="/fm/Application/Admin/View/media/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<script src="/fm/Application/Admin/View/media/assets/global/plugins/moment.min.js" type="text/javascript"></script>
<script src="/fm/Application/Admin/View/media/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
<script src="/fm/Application/Admin/View/media/assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
<script src="/fm/Application/Admin/View/media/assets/global/scripts/app.min.js" type="text/javascript"></script>
<script src="/fm/Application/Admin/View/media/assets/pages/scripts/dashboard.min.js" type="text/javascript"></script>
<script src="/fm/Application/Admin/View/media/assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
<script src="/fm/Application/Admin/View/media/assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
<script src="/fm/Application/Admin/View/media/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
<script src="/fm/Application/Admin/View/media/assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
</body>
</html>