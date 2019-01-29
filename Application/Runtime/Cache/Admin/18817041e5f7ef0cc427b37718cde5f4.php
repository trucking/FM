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
            <a href="index.html">
                <img src="/fm/Application/Admin/View/media/assets/layouts/layout/img/logo.png" alt="logo" class="logo-default" /> </a>
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
                <form class="sidebar-search  " action="page_general_search_3.html" method="POST">
                    <a href="javascript:;" class="remove">
                        <i class="icon-close"></i>
                    </a>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="搜索...">
                                        <span class="input-group-btn">
                                            <a href="javascript:;" class="btn submit">
                                                <i class="icon-magnifier"></i>
                                            </a>
                                        </span>
                    </div>
                </form>
            </li>
            <li class="nav-item start active open">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">系统管理</span>
                    <span class="selected"></span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="companyConf" class="nav-link ">
                            <i class="icon-bar-chart"></i>
                            <span class="title">组织管理</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                    <li class="nav-item start active open">
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
                    <span class="title">系统管理</span>
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
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span>用户管理</span>
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
        <h1 class="page-title"> 用户管理
            <small>系统用户的添加与管理</small>
        </h1>
        <div class="row">
            <div class="col-lg-3 col-xs-12 col-sm-12">

                <div class="caption font-red-sunglo">
                    <i class="icon-settings font-red-sunglo"></i>
                    <span class="caption-subject bold uppercase">用户概况</span>
                </div>
                <p></P>
                <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
                    <div class="visual">
                        <i class="fa fa-comments"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            <span data-counter="counterup"><?php echo ($result["userNum"]); ?></span>
                        </div>
                        <div class="desc">现有用户数</div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-xs-12 col-sm-12">
                <div class="caption font-red-sunglo">
                    <i class="icon-settings font-blue-sunglo"></i>
                    <span class="caption-subject bold uppercase">用户添加</span>
                </div>
                <div class="protlet-body form">
                    <form role="from">
                        <div class="form-body">
                            <div class="from-group">

                                <div class="input-group">
													<span class="input-group-addon">
														<i class="icon-user-follow"></i>
													</span>
                                    <input class="form-control" placeholder="请输入用户名">
                                </div>
                            </div>
                            <div class="from-group">
                                <div class="input-group">
													<span class="input-group-addon">
														<i class="icon-user-follow"></i>
													</span>
                                    <input class="form-control" placeholder="请输入用户姓名" type="text">
                                </div>
                            </div>
                            <div class="from-group">
                                <div class="input-group">
													<span class="input-group-addon">
														<i class="icon-lock"></i>
													</span>
                                    <input class="form-control" placeholder="请输入密码" type="password">
                                </div>
                            </div>
                            <div class="form-actions right">
                                <button class="btn default" type="button">取消</button>
                                <button class="btn green" type="submit">确定</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7 col-xs-12 col-sm-12">
                <div class="caption font-red-sunglo">
                    <i class="icon-settings font-red-sunglo"></i>
                    <span class="caption-subject bold uppercase">用户列表</span>
                </div>
                <div class="portlet">
                    <div class="portlet-body">
                        <div class="table-scrollable">
                            <table class="table table-striped table-bordered table-advance table-hover">
                                <thead>
                                <tr>
                                    <th>
                                        <i class="fa fa-briefcase"></i> 用户ID </th>
                                    <th class="hidden-xs">
                                        <i class="fa fa-user"></i> 用户姓名 </th>
                                    <th>
                                        <i class="fa fa-shopping-cart"></i> 操作 </th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php if(is_array($result["userList"])): foreach($result["userList"] as $key=>$list): ?><tr>
                                    <td class="highlight">
                                        <?php echo ($list["uid"]); ?>
                                    </td>
                                    <td class="hidden-xs"><?php echo ($list["username"]); ?></td>
                                    <td>
                                        <a href="javascript:;" class="btn btn-outline btn-circle btn-sm purple">
                                            <i class="fa fa-edit"></i> 编辑 </a>
                                        <a href="javascript:;" class="btn btn-outline btn-circle dark btn-sm black">
                                            <i class="fa fa-trash-o"></i> 删除
                                        </a>
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
<div id="modifyName">

</div>
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