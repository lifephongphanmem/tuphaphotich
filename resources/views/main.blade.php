<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.4
Version: 3.9.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <title>{{$pageTitle}}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
    <link href="{{url('assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{url('assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{url('assets/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{url('assets/global/plugins/uniform/css/uniform.default.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{url('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
    <link href="{{url('assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{url('assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet')}}" type="text/css"/>
    <link href="{{url('assets/global/plugins/jqvmap/jqvmap/jqvmap.css')}}" rel="stylesheet" type="text/css"/>
    <!-- END PAGE LEVEL PLUGIN STYLES -->
    <!-- BEGIN PAGE STYLES -->
    <link href="{{url('assets/admin/pages/css/tasks.css')}}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="{{url('assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css')}}"/>
    @yield('custom-style')
    <!-- END PAGE STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link href="{{url('assets/global/css/components.css')}}" id="style_components" rel="stylesheet" type="text/css"/>
    <link href="{{url('assets/global/css/plugins.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{url('assets/admin/layout/css/layout.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{url('/assets/admin/layout/css/themes/darkblue.css')}}" rel="stylesheet" type="text/css" id="style_color"/>
    <link href="{{url('assets/admin/layout/css/custom.css')}}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="{{url('assets/global/plugins/bootstrap-toastr/toastr.min.css')}}"/>
    <!-- END THEME STYLES -->
    <!--link rel="shortcut icon" href="favicon.ico"/-->
    <link rel="shortcut icon" href="{{ url('images/LIFESOFT.png')}}" type="image/x-icon">
    <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
    <!-- BEGIN CORE PLUGINS -->
    <!--[if lt IE 9]>
    <script src="{{url('assets/global/plugins/respond.min.js')}}"></script>
    <script src="{{url('assets/global/plugins/excanvas.min.js')}}"></script>
    <![endif]-->
    <script src="{{url('assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{url('assets/global/plugins/jquery-migrate.min.js')}}" type="text/javascript"></script>
    <!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
    <script src="{{url('assets/global/plugins/jquery-ui/jquery-ui.min.js')}}" type="text/javascript"></script>
    <script src="{{url('assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{url('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js')}}" type="text/javascript"></script>
    <script src="{{url('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
    <script src="{{url('assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
    <script src="{{url('assets/global/plugins/jquery.cokie.min.js')}}" type="text/javascript"></script>
    <script src="{{url('assets/global/plugins/uniform/jquery.uniform.min.js')}}" type="text/javascript"></script>
    <script src="{{url('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script type="text/javascript" src="{{url('assets/global/plugins/jquery-validation/js/jquery.validate.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/global/plugins/jquery-validation/js/additional-methods.min.js')}}"></script>
    <script src="{{url('assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js')}}" type="text/javascript"></script>
    <script src="{{url('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js')}}" type="text/javascript"></script>
    <script src="{{url('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js')}}" type="text/javascript"></script>
    <script src="{{url('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js')}}" type="text/javascript"></script>
    <script src="{{url('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js')}}" type="text/javascript"></script>
    <script src="{{url('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js')}}" type="text/javascript"></script>
    <script src="{{url('assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js')}}" type="text/javascript"></script>
    <script src="{{url('assets/global/plugins/flot/jquery.flot.min.js')}}" type="text/javascript"></script>
    <script src="{{url('assets/global/plugins/flot/jquery.flot.resize.min.js')}}" type="text/javascript"></script>
    <script src="{{url('assets/global/plugins/flot/jquery.flot.categories.min.js')}}" type="text/javascript"></script>
    <script src="{{url('assets/global/plugins/jquery.pulsate.min.js')}}" type="text/javascript"></script>
    <script src="{{url('assets/global/plugins/bootstrap-daterangepicker/moment.min.js')}}" type="text/javascript"></script>
    <script src="{{url('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.js')}}" type="text/javascript"></script>
    <!-- IMPORTANT! fullcalendar depends on jquery-ui.min.js for drag & drop support -->
    <script src="{{url('assets/global/plugins/fullcalendar/fullcalendar.min.js')}}" type="text/javascript"></script>
    <script src="{{url('assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js')}}" type="text/javascript"></script>
    <script src="{{url('assets/global/plugins/jquery.sparkline.min.js')}}" type="text/javascript"></script>
    <script src="{{url('assets/global/plugins/bootstrap-toastr/toastr.min.js')}}"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{url('assets/global/scripts/metronic.js')}}" type="text/javascript"></script>
    <script src="{{url('assets/admin/layout/scripts/layout.js')}}" type="text/javascript"></script>
    <script src="{{url('assets/admin/layout/scripts/quick-sidebar.js')}}" type="text/javascript"></script>
    <script src="{{url('assets/admin/layout/scripts/demo.js')}}" type="text/javascript"></script>
    <script src="{{url('assets/admin/pages/scripts/index.js')}}" type="text/javascript"></script>
    <script src="{{url('assets/admin/pages/scripts/tasks.js')}}" type="text/javascript"></script>

    <!-- END PAGE LEVEL SCRIPTS -->

    <script>
        jQuery(document).ready(function() {
            Metronic.init(); // init metronic core componets
            Layout.init(); // init layout
            QuickSidebar.init(); // init quick sidebar
            Demo.init(); // init demo features

        });
    </script>
    <script type="text/javascript">
        function time() {
            var today = new Date();
            var weekday=new Array(7);
            weekday[0]="Chủ nhật";
            weekday[1]="Thứ hai";
            weekday[2]="Thứ ba";
            weekday[3]="Thứ tư";
            weekday[4]="Thứ năm";
            weekday[5]="Thứ sáu";
            weekday[6]="Thứ bảy";
            var day = weekday[today.getDay()];
            var dd = today.getDate();
            var mm = today.getMonth()+1; //January is 0!
            var yyyy = today.getFullYear();
            var h=today.getHours();
            var m=today.getMinutes();
            var s=today.getSeconds();
            m=checkTime(m);
            s=checkTime(s);
            nowTime = h+":"+m+":"+s;
            if(dd<10){dd='0'+dd} if(mm<10){mm='0'+mm} today = day+', '+ dd+'/'+mm+'/'+yyyy;

            tmp='<span class="date"> '+today+' | '+nowTime+'</span>';

            document.getElementById("clock").innerHTML=tmp;

            clocktime=setTimeout("time()","1000","JavaScript");
            function checkTime(i)
            {
                if(i<10){
                    i="0" + i;
                }
                return i;
            }
        }
    </script>
    @yield('custom-script')
    <!-- END JAVASCRIPTS -->
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body class="page-header-fixed page-quick-sidebar-over-content page-sidebar-closed-hide-logo page-container-bg-solid" onload="time()">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <div class="page-logo">
                <a href="{{url('')}}">
                    <img src="{{url('images/logolife.png')}}" alt="logo" class="logo-default">

                </a>
                <div class="menu-toggler sidebar-toggler hide">
                    <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
                </div>
            </div>
            <!--a href="{{url('')}}">{url('images/LIFESOFT.png')}}" width="100" alt
                <img src="{="logo" class="logo-default"/>
            </a-->
            <div class="menu-toggler sidebar-toggler hide">
            </div>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
        </a>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN TOP NAVIGATION MENU -->
        <div class="top-menu">
            <ul class="nav navbar-nav pull-right">
                <!-- BEGIN USER LOGIN DROPDOWN -->
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                    <a href="" class="dropdown-toggle" target="_blank">
                        <i class="fa fa-folder-open-o"></i>
					<span class="badge badge-default">
					Help</span>
                    </a>
                    <ul>
                    </ul>
                </li>
                <li class="dropdown dropdown-user">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" >
                        <img alt="" class="img-circle" src="{{url('/images/avatar/default-user.png')}}"/>
					<span class="username">
					<b>{{session('admin')->name}}</b> </span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-default">
                        <li>
                            <a href="{{url('user_setting')}}">
                                <i class="icon-settings"></i> Thông tin tài khoản</a>
                        </li>
                        <li>
                            <a href="{{url('change-password')}}">
                                <i class="icon-lock"></i> Đổi mật khẩu</a>
                        </li>
                        <li>
                            <a href="{{url('logout')}}">
                                <i class="icon-key"></i> Đăng xuất </a>
                        </li>
                    </ul>
                </li>
                <!-- END USER LOGIN DROPDOWN -->
            </ul>
        </div>
        <!-- END TOP NAVIGATION MENU -->
    </div>
    <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
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
            <ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                <li class="sidebar-toggler-wrapper">
                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                    <div class="sidebar-toggler">
                    </div>
                    <!-- END SIDEBAR TOGGLER BUTTON -->
                </li>
                <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
                <!--li class="sidebar-search-wrapper">
                    <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                    <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
                    <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
                    <form class="sidebar-search " action="extra_search.html" method="POST">
                        <!--a href="javascript:;" class="remove">
                            <i class="icon-close"></i>
                        </a>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search...">
							<span class="input-group-btn">
							<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
							</span>
                        </div-->
                    </form>
                    <!-- END RESPONSIVE QUICK SEARCH FORM -->

                <li class="start active open">
                    <a href="">
                        <i class="fa fa-folder-open-o"></i>
                        <span class="title">{{$pageTitle}}</span>
                        <span class="selected"></span>
                    </a>
                </li>
                @if(session('admin')->sadmin != 'sa')
                    <li>
                        <a href="{{url('sohotich')}}">
                            <i class="icon-users"></i>
                            <span class="title">Danh mục sổ hộ tịch</span>
                        </a>
                    </li>
                    @if(canGeneral('congdan','index'))
                        @if(can('congdan','index'))
                            <li>
                                <a href="{{url('congdan')}}">
                                    <i class="icon-users"></i>
                                    <span class="title">Thông tin công dân</span>
                                </a>
                            </li>
                        @endif
                    @endif
                    @if(canGeneral('khaisinh','index'))
                        @if(can('khaisinh','index'))
                            <li>
                                <a href="{{url('khaisinh')}}">
                                    <i class="icon-users"></i>
                                    <span class="title">Thông tin khai sinh</span>
                                </a>
                            </li>
                        @endif
                    @endif
                    @if(canGeneral('khaitu','index'))
                        @if(can('khaitu','index'))
                            <li>
                                <a href="{{url('khaitu/danhsach')}}">
                                    <i class="icon-users"></i>
                                    <span class="title">Thông tin khai tử</span>
                                </a>
                            </li>
                        @endif
                    @endif
                    @if(canGeneral('tthonnhan','index'))
                        @if(can('tthonnhan','index'))
                            <li>
                                <a href="{{url('tinhtranghonnhan')}}">
                                    <i class="icon-users"></i>
                                    <span class="title">Tình trạng hôn nhân</span>
                                </a>
                            </li>
                        @endif
                    @endif
                    @if(canGeneral('kethon','index'))
                        @if(can('kethon','index'))
                            <li>
                                <a href="{{url('kethon')}}">
                                    <i class="icon-users"></i>
                                    <span class="title">Thông tin kết hôn</span>
                                </a>
                            </li>
                        @endif
                    @endif
                    @if(canGeneral('dkconnuoi','index'))
                        @if(can('dkconnuoi','index'))
                            <li>
                                <a href="{{url('dangkyconnuoi')}}">
                                    <i class="icon-users"></i>
                                    <span class="title">Đăng ký con nuôi</span>
                                </a>
                            </li>
                        @endif
                    @endif
                    @if(canGeneral('dkgiamho','index'))
                        @if(can('dkgiamho','index'))
                            <li>
                                <a href="{{url('dangkygiamho')}}">
                                    <i class="icon-users"></i>
                                    <span class="title">Đăng ký giám hộ</span>
                                </a>
                            </li>
                        @endif
                    @endif
                    @if(canGeneral('dknhanchamecon','index'))
                        @if(can('dknhanchamecon','index'))
                            <li>
                                <a href="{{url('dangkynhanchamecon')}}">
                                    <i class="icon-users"></i>
                                    <span class="title">Đăng ký nhận cha mẹ con</span>
                                </a>
                            </li>
                        @endif
                    @endif
                    @if(canGeneral('capbansao','index'))
                        @if(can('capbansao','index'))
                            <li>
                                <a href="{{url('capbansaotrichluc')}}">
                                    <i class="icon-users"></i>
                                    <span class="title">Cấp trích lục (bản sao)</span>
                                </a>
                            </li>
                        @endif
                    @endif
                    <li>
                        <a href="{{url('reports')}}">
                            <i class="icon-users"></i>
                            <span class="title">Sổ sách báo cáo</span>
                        </a>
                    </li>
                @endif
                @if(session('admin')->sadmin == 'ssa' || session('admin')->sadmin == 'ssa')
                <li>
                    <a href="">
                        <i class="icon-settings"></i>
                        <span class="title">Quản trị hệ thống</span>
                        <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                            <li><a href="{{url('districts')}}"> Thông tin quận huyện</a></li>
                            <li><a href="{{url('towns')}}"> Thông tin xã phường</a></li>
                            <li><a href="{{url('users')}}"> Quản lý tài khoản</a></li>
                            <li><a href="{{url('cau_hinh_he_thong')}}">Cấu hình hệ thống</a></li>
                    </ul>
                </li>
                @endif

            </ul>

            <!-- END SIDEBAR MENU -->
        </div>
    </div>
    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <i class="fa fa-home"></i>
                        <a href="{{url('')}}">Trang chủ</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        {{$pageTitle}}
                    </li>
                </ul>
                <div class="page-toolbar">
                    <div class="page-toolbar">
                        <b><div id="clock"></div></b>
                    </div>

                </div>
            </div>

    @yield('content')
        </div>
    </div>
    <!-- END CONTENT -->

</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
    <div class="page-footer-inner">
        2016 &copy; LifeSoft <a href="" >Tiện ích hơn - Hiệu quả hơn</a>
    </div>
    <div class="scroll-to-top">
        <i class="icon-arrow-up"></i>
    </div>
</div>
<!-- END FOOTER -->

</body>
<!-- END BODY -->
</html>