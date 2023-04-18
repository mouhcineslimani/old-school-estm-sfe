<!DOCTYPE html> 
<html lang="en" dir="rtl"> 
    <head>
        <meta charset="utf-8" />
        <title>فضاء الادارة</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin RTL Theme #2 for closed sidebar option" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="{{ asset('files-js-css-pages/assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('files-js-css-pages/assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('files-js-css-pages/assets/global/plugins/bootstrap/css/bootstrap-rtl.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('files-js-css-pages/assets/global/plugins/bootstrap-switch/css/bootstrap-switch-rtl.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->

        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="{{ asset('files-js-css-pages/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css ')}}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        {{-- font --}}
        <link  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"  rel="stylesheet">
        <link href="{{ asset('files-js-css-pages/assets/fontawesome-free/css/all.min.css') }}" style="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="{{ asset('files-js-css-pages/assets/global/plugins/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('files-js-css-pages/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap-rtl.css')}}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->

        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="{{ asset('files-js-css-pages/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('files-js-css-pages/assets/global/plugins/morris/morris.css')}}" rel="stylesheet" type="text/css')}}" />
        <link href="{{ asset('files-js-css-pages/assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet')}}" type="text/css" />
        <link href="{{ asset('files-js-css-pages/assets/global/plugins/jqvmap/jqvmap/jqvmap.css')}}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->


        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="{{ asset('files-js-css-pages/assets/global/css/components-rtl.min.css')}}" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{{ asset('files-js-css-pages/assets/global/css/plugins-rtl.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->

        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="{{ asset('files-js-css-pages/assets/pages/css/profile-rtl.min.css ')}}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->


        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="{{ asset('files-js-css-pages/assets/layouts/layout2/css/layout-rtl.min.css') }} " rel="stylesheet" type="text/css" />
        <link href="{{ asset('files-js-css-pages/assets/layouts/layout2/css/themes/blue-rtl.min.css') }}" rel="stylesheet" type="text/css" id="style_color" />
        <link href="{{ asset('files-js-css-pages/assets/layouts/layout2/css/custom-rtl.min.css') }} " rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
        <style>
            /* .page-sidebar {
                background-color : #ff8c23 !important ;  
            }
            .page-content-wrapper{
                background : #ff8c23 !important ; 
            } */
            </style>
    <!-- END HEAD -->
     <body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-sidebar-closed">
        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner ">
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <div class="menu-toggler sidebar-toggler"> </div>
                </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN PAGE ACTIONS --> 
                <!-- END PAGE ACTIONS -->
                <!-- BEGIN PAGE TOP -->
                <div class="page-top">
                    <!-- BEGIN HEADER SEARCH BOX --> 
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                            <!-- BEGIN NOTIFICATION DROPDOWN -->
                             <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <i class="icon-bell"></i>
                                    <span class="badge badge-default"> 7 </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="external">
                                        <h3>
                                            <span class="bold">12 pending</span> notifications</h3>
                                        <a href="page_user_profile_1.html">view all</a>
                                    </li>
                                    <li>
                                        <ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">just now</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-success">
                                                            <i class="fa fa-plus"></i>
                                                        </span> New user registered. </span>
                                                </a>
                                            </li>   
                                        </ul>
                                    </li>
                                </ul>
                            <!-- END TODO DROPDOWN -->
                            <!-- BEGIN USER LOGIN DROPDOWN -->
                             <li class="dropdown dropdown-user">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <img alt="" class="img-circle" src="{{ asset('files-js-css-pages/assets/layouts/layout2/img/avatar3_small.jpg')}}" />
                                    <span class="username username-hide-on-mobile">اسم المستخدم</span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li>
                                        <a href="/administration">
                                            <i class="icon-key"></i> تسجيل الخروج </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- END USER LOGIN DROPDOWN -->
                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
                <!-- END PAGE TOP -->
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
                    <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu page-sidebar-menu-closed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                        <li class="nav-item start ">
                            <a href="/home" class="nav-link">
                                <i class="icon-home"></i>
                                <span class="title">الصفحة الرئيسية</span> 
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="/enseignants" class="nav-link nav-toggle">   
                                <i class="fa fa-user" aria-hidden="true"></i>        
                                <span class="title">الأساتذة</span> 
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item"> 
                                    <li class="nav-item">
                                        <a href="javascript:;" class="nav-link nav-toggle">
                                             الاستمارات
                                             <span class="arrow"></span>
                                        </a> 
                                        <ul class="sub-menu">
                                            <li class="nav-item">
                                                <a href="/enseignants/create" class="nav-link">
                                                    التسجيل
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="/absences/create" class="nav-link">
                                                     الغياب
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="/seance/create" class="nav-link">
                                                    الحصص المخصصة لكل استاذ
                                                </a>
                                            </li>
                                        </ul>
                                    </li> 
                                    <li class="nav-item">
                                        <a href="javascript:;" class="nav-link nav-toggle">
                                             اللوائح
                                             <span class="arrow"></span>
                                        </a> 
                                        <ul class="sub-menu">
                                            <li class="nav-item">
                                                <a href="/enseignants" class="nav-link">
                                                    الأساتذة
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="/seance" class="nav-link">
                                                    جدول الحصص لكل استاذ
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="/absences" class="nav-link">
                                                     الغياب
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="/demandes" class="nav-link">
                                                     طلبات الاذن بالغياب
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="/substitution" class="nav-link">
                                                     حصص التعويض
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="/cartes" class="nav-link">
                                                    بطاقات الاستطلاع
                                                </a>
                                            </li>
                                        </ul>
                                    </li> 
                                    <li class="nav-item">
                                        <a href="/seance" class="nav-link nav-toggle">
                                              جدول الحصص 
                                            <span class="arrow"></span>
                                        </a> 
                                    </li> 
                                </li>
                            </ul>
                        </li>


                        <li class="nav-item  ">
                            <a href="/etudiants/inscription" class="nav-link nav-toggle">
                                <i class="fa fa-users" aria-hidden="true"></i>
                                <span class="title">التلاميذ</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu"> 
                                <li class="nav-item">
                                    <a href="/etudiants/inscription" class="nav-link">
                                        التسجيل
                                        <span class="arrow"></span>
                                    </a>
                                </li>  
                                    <li class="nav-item">
                                        <a href="/etudiants/liste" class="nav-link">
                                            لائحة التلاميذ
                                            <span class="arrow"></span>
                                        </a>
                                    </li>  
                                    <li class="nav-item">
                                        <a href="/etudiants/absences" class="nav-link"> 
                                            الغياب
                                            <span class="arrow"></span>
                                        </a>
                                    </li>  
                                        <li class="nav-item">
                                            <a href="/etudiants/notes" class="nav-link"> 
                                                النقط
                                                <span class="arrow"></span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/etudiants/documents" class="nav-link"> 
                                                الشواهد
                                                <span class="arrow"></span>
                                            </a>
                                        </li>
                            </ul> 
                        </li>
                        <li class="nav-item  ">
                            <a href="/economistes" class="nav-link">
                                <i class="fa fa-money" aria-hidden="true"></i>
                                <span class="title">المقتصد</span> 
                            </a>
                        </li>
                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->

            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <br/>
                    @yield('content')  
                </div>
                <!-- END CONTENT BODY -->
            </div>

            <!-- END CONTENT -->
    
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
         
            <div class="quick-nav-overlay"></div>
     
<div >
            
</div>


            <!-- BEGIN CORE PLUGINS -->
            <script src="{{ asset('files-js-css-pages/assets/global/plugins/jquery.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('files-js-css-pages/assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
            <script src="{{ asset('files-js-css-pages/assets/global/plugins/js.cookie.min.js')}} " type="text/javascript"></script>
            <script src="{{ asset('files-js-css-pages/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('files-js-css-pages/assets/global/plugins/jquery.blockui.min.js" type="text/javascript') }}"></script>
            <script src="{{ asset('files-js-css-pages/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }} " type="text/javascript"></script>
            <!-- END CORE PLUGINS -->
            
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="{{ asset('files-js-css-pages/assets/global/scripts/datatable.js')}}" type="text/javascript"></script>
        <script src="{{ asset('files-js-css-pages/assets/global/plugins/datatables/datatables.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('files-js-css-pages/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js')}}" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
            
            









            <!-- BEGIN PAGE LEVEL PLUGINS -->
            <script src="{{ asset('files-js-css-pages/assets/global/plugins/moment.min.js ' ) }}" type="text/javascript"></script>
            <script src="{{ asset('files-js-css-pages/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js ' ) }}" type="text/javascript"></script>
            <script src="{{ asset('files-js-css-pages/assets/global/plugins/morris/morris.min.js ' ) }}" type="text/javascript"></script>
            <script src="{{ asset('files-js-css-pages/assets/global/plugins/morris/raphael-min.js ' ) }}" type="text/javascript"></script>
            <script src="{{ asset('files-js-css-pages/assets/global/plugins/counterup/jquery.waypoints.min.js ' ) }}" type="text/javascript"></script>
            <script src="{{ asset('files-js-css-pages/assets/global/plugins/counterup/jquery.counterup.min.js ' ) }}" type="text/javascript"></script>
            <script src="{{ asset('files-js-css-pages/assets/global/plugins/amcharts/amcharts/amcharts.js ' ) }}" type="text/javascript"></script>
            <script src="{{ asset('files-js-css-pages/assets/global/plugins/amcharts/amcharts/serial.js ' ) }}" type="text/javascript"></script>
            <script src="{{ asset('files-js-css-pages/assets/global/plugins/amcharts/amcharts/pie.js ' ) }}" type="text/javascript"></script>
            <script src="{{ asset('files-js-css-pages/assets/global/plugins/amcharts/amcharts/radar.js ' ) }}" type="text/javascript"></script>
            <script src="{{ asset('files-js-css-pages/assets/global/plugins/amcharts/amcharts/themes/light.js ' ) }}" type="text/javascript"></script>
            <script src="{{ asset('files-js-css-pages/assets/global/plugins/amcharts/amcharts/themes/patterns.js ' ) }}" type="text/javascript"></script>
            <script src="{{ asset('files-js-css-pages/assets/global/plugins/amcharts/amcharts/themes/chalk.js ' ) }}" type="text/javascript"></script>
            <script src="{{ asset('files-js-css-pages/assets/global/plugins/amcharts/ammap/ammap.js ' ) }}" type="text/javascript"></script>
            <script src="{{ asset('files-js-css-pages/assets/global/plugins/amcharts/ammap/maps/js/worldLow.js ' ) }}" type="text/javascript"></script>
            <script src="{{ asset('files-js-css-pages/assets/global/plugins/amcharts/amstockcharts/amstock.js ' ) }}" type="text/javascript"></script>
            <script src="{{ asset('files-js-css-pages/assets/global/plugins/fullcalendar/fullcalendar.min.js ' ) }}" type="text/javascript"></script>
            <script src="{{ asset('files-js-css-pages/assets/global/plugins/horizontal-timeline/horizontal-timeline.js ' ) }}" type="text/javascript"></script>
            <script src="{{ asset('files-js-css-pages/assets/global/plugins/flot/jquery.flot.min.js ' ) }}" type="text/javascript"></script>
            <script src="{{ asset('files-js-css-pages/assets/global/plugins/flot/jquery.flot.resize.min.js ' ) }}" type="text/javascript"></script>
            <script src="{{ asset('files-js-css-pages/assets/global/plugins/flot/jquery.flot.categories.min.js ' ) }}" type="text/javascript"></script>
            <script src="{{ asset('files-js-css-pages/assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js ' ) }}" type="text/javascript"></script>
            <script src="{{ asset('files-js-css-pages/assets/global/plugins/jquery.sparkline.min.js ' ) }}" type="text/javascript"></script>
            <script src="{{ asset('files-js-css-pages/assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js ' ) }}" type="text/javascript"></script>
            <script src="{{ asset('files-js-css-pages/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js ' ) }}" type="text/javascript"></script>
            <script src="{{ asset('files-js-css-pages/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js ' ) }}" type="text/javascript"></script>
            <script src="{{ asset('files-js-css-pages/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js ' ) }}" type="text/javascript"></script>
            <script src="{{ asset('files-js-css-pages/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js ' ) }}" type="text/javascript"></script>
            <script src="{{ asset('files-js-css-pages/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js ' ) }}" type="text/javascript"></script>
            <script src="{{ asset('files-js-css-pages/assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js ' ) }}" type="text/javascript"></script>
            <!-- END PAGE LEVEL PLUGINS -->

            <!-- BEGIN PAGE LEVEL SCRIPTS -->
            <script src="{{ asset('files-js-css-pages/assets/pages/scripts/dashboard.min.js ' ) }}" type="text/javascript"></script>
            <!-- END PAGE LEVEL SCRIPTS -->

            <!-- BEGIN PAGE LEVEL PLUGINS -->
            <script src="{{ asset('files-js-css-pages/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js ')}}" type="text/javascript"></script>
            <script src="{{ asset('files-js-css-pages/assets/global/plugins/jquery.sparkline.min.js ')}}" type="text/javascript"></script>
            <!-- END PAGE LEVEL PLUGINS --> 

            <!-- BEGIN PAGE LEVEL SCRIPTS -->
            <script src="{{ asset('files-js-css-pages/assets/pages/scripts/profile.min.js ')}}" type="text/javascript"></script>
            <!-- END PAGE LEVEL SCRIPTS -->

            <!-- BEGIN THEME GLOBAL SCRIPTS -->
            <script src="{{ asset('files-js-css-pages/assets/global/scripts/app.min.js' ) }} " type="text/javascript"></script>
            <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="{{ asset('files-js-css-pages/assets/pages/scripts/table-datatables-editable.min.js')}}" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
            <!-- BEGIN THEME LAYOUT SCRIPTS -->
            <script src="{{ asset('files-js-css-pages/assets/layouts/layout2/scripts/layout.min.js' )}} " type="text/javascript"></script>
            <script src="{{ asset('files-js-css-pages/assets/layouts/layout2/scripts/demo.min.js') }} " type="text/javascript"></script>
            <script src="{{ asset('files-js-css-pages/assets/layouts/global/scripts/quick-sidebar.min.js') }} " type="text/javascript"></script>
            <script src="{{ asset('files-js-css-pages/assets/layouts/global/scripts/quick-nav.min.js') }} " type="text/javascript"></script>
            <!-- END THEME LAYOUT SCRIPTS -->
     </body>

</html>