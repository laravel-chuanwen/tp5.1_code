<?php /*a:3:{s:53:"F:\www\TP5.1\2.0\application/index/view\cate\lst.html";i:1516720669;s:58:"F:\www\TP5.1\2.0\application/index/view\common\header.html";i:1516697315;s:58:"F:\www\TP5.1\2.0\application/index/view\common\footer.html";i:1516694288;}*/ ?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <title>栏目列表 - 查看栏目</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="描述" name="description" />
    <meta name="keyword" content="关键词" />
    <meta name="author" content="作者" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="/static/assets/global/plugins/googleapis/googleapis.css" rel="stylesheet" type="text/css" />
    <link href="/static/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="/static/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="/static/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/static/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="/static/assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="/static/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="/static/assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
    <link href="/static/assets/layouts/layout/css/themes/blue.min.css" rel="stylesheet" type="text/css" id="style_color" />
    <link href="/static/assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="favicon.ico" /> </head>
<!-- END HEAD -->

<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
<div class="page-wrapper">
    <!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner ">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="<?php echo url('index/index/index'); ?>">
                <span style="line-height: 50px;color: #FFF">无限极分类</span>
            </a>
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
        <!-- BEGIN TOP NAVIGATION MENU -->
        <div class="top-menu">
            <ul class="nav navbar-nav pull-right">
                <!-- BEGIN USER LOGIN DROPDOWN -->
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                <li class="dropdown dropdown-user">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <img alt="" class="img-circle" src="/static/assets/layouts/layout/img/avatar3_small.jpg" />
                        <span class="username username-hide-on-mobile"> admin </span>
                        <i class="fa fa-sign-out"></i>
                    </a>
                </li>
                <!-- END USER LOGIN DROPDOWN -->
            </ul>
        </div>
        <!-- END TOP NAVIGATION MENU -->
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
            <!-- BEGIN SIDEBAR -->
            <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
            <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
            <div class="page-sidebar navbar-collapse collapse">
                <!-- BEGIN SIDEBAR MENU -->
                <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                    <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                    <li class="sidebar-toggler-wrapper hide">
                        <div class="sidebar-toggler">
                            <span></span>
                        </div>
                    </li>

                    <li class="heading">
                        <h3 class="uppercase">首页</h3>
                    </li>

                    <!-- END SIDEBAR TOGGLER BUTTON -->
                    <li class="nav-item start">
                        <a href="" class="nav-link nav-toggle">
                            <i class="icon-home"></i>
                            <span class="title">首页</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                    <!--<li class="heading">
                        <h3 class="uppercase">Features</h3>
                    </li>-->
                    <!--栏目管理-->
                    <li class="nav-item  active open">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-diamond"></i>
                            <span class="title">栏目管理</span>
                            <span class="arrow open"></span>
                            <span class="selected"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item ">
                                <a href="<?php echo url('index/cate/add'); ?>" class="nav-link ">
                                    <span class="title">添加栏目</span>
                                </a>
                            </li>
                            <li class="nav-item open">
                                <a href="<?php echo url('index/cate/lst'); ?>" class="nav-link ">
                                    <span class="title">查看栏目</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- END SIDEBAR MENU -->
                <!-- END SIDEBAR MENU -->
            </div>
            <!-- END SIDEBAR -->
        </div>
        <!-- END SIDEBAR -->
        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <!-- BEGIN CONTENT BODY -->
            <div class="page-content">
                <!-- BEGIN PAGE HEADER-->
                <!-- BEGIN PAGE BAR -->
                <div class="page-bar">
                    <ul class="page-breadcrumb">
                        <li>
                            <a href="<?php echo url('index/index/index'); ?>">首页</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <a href="<?php echo url('index/cate/index'); ?>">栏目管理</a>
                            <i class="fa fa-circle"></i>
                        </li>
                    </ul>
                </div>
                <!-- END PAGE BAR -->
                <!-- BEGIN PAGE TITLE-->
                <h1 class="page-title"> 栏目列表</h1>
                <!-- END PAGE TITLE-->

                <a href="<?php echo url('index/cate/add'); ?>" style="margin-bottom: 10px" class="btn green">添加</a>

                <div class="row">
                    <div class="col-md-12">
                        <div class="portlet box green">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-cogs"></i>栏目列表</div>
                            </div>
                            <div class="portlet-body flip-scroll">
                                <form action="" method="post">
                                    <table class="table table-bordered table-striped table-condensed flip-content">
                                        <thead class="flip-content">
                                        <tr>
                                            <th width="20%"> ID </th>
                                            <th> 排序 </th>
                                            <th class="numeric"> 栏目名称 </th>
                                            <th class="numeric"> 操作 </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php if(is_array($cateres) || $cateres instanceof \think\Collection || $cateres instanceof \think\Paginator): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
                                        <tr>
                                            <td> <?php echo htmlentities($cate['id']); ?> </td>
                                            <td width="20%">
                                                <input name="<?php echo htmlentities($cate['id']); ?>" type="text" class="form-control input-sm" placeholder="排序" value="<?php echo htmlentities($cate['sort']); ?>">
                                            </td>
                                            <td class="numeric"> <?php if($cate['level'] != 0): ?>|<?php endif; ?><?php echo str_repeat('-', $cate['level']*8)?><?php echo htmlentities($cate['catename']); ?> </td>
                                            <td class="numeric">
                                                <a href="<?php echo url('index/cate/edit',array('id'=>$cate['id'])); ?>" class="btn btn-sm blue"> 编辑
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="<?php echo url('index/cate/del',array('id'=>$cate['id'])); ?>" onClick="return del();" class="btn btn-sm red"> 删除
                                                    <i class="fa fa-trash-o"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                        <tr>
                                            <td></td>
                                            <td>
                                                <input class="btn btn-primary btn-sm shiny" style="margin-left:224px; margin-top:10px;text-align: center" type="submit" value="排序" >
                                            </td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- END CONTENT BODY -->
        </div>
        <!-- END CONTENT -->
    </div>
    <!-- END CONTAINER -->
    <!-- BEGIN FOOTER -->
<div class="page-footer">
    <div class="page-footer-inner">
        <a target="_blank" style="color: #FFF" href="https://www.kancloud.cn/ifeng/tp5_1_code">基于ThinkPHP5.1的各项小功能代码实现</a>
    </div>
    <div class="scroll-to-top">
        <i class="icon-arrow-up"></i>
    </div>
</div>
<!-- END FOOTER -->
</div>
<!--[if lt IE 9]>
<script src="/static/assets/global/plugins/respond.min.js"></script>
<script src="/static/assets/global/plugins/excanvas.min.js"></script>
<script src="/static/assets/global/plugins/ie8.fix.min.js"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="/static/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="/static/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/static/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
<script src="/static/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="/static/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="/static/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="/static/assets/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="/static/assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
<script src="/static/assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
<script src="/static/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
<script src="/static/assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->
<script>
    $(document).ready(function()
    {
        function del()
        {
            if(confirm("确定要删除吗？"))
            {
                return true;
            }
            else
            {
                return false;
            }
        }
    })
</script>
</body>

</html>