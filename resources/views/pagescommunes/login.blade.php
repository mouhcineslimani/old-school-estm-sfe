<!DOCTYPE html> 
<html lang="en" dir="rtl"> 
    <head>
        <meta charset="utf-8" />
        <title>Metronic Admin RTL Theme #2 | User Login 1</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin RTL Theme #2 for " name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="{{ asset("files-js-css-pages/assets/global/plugins/font-awesome/css/font-awesome.min.css" ) }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset("files-js-css-pages/assets/global/plugins/simple-line-icons/simple-line-icons.min.css") }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset("files-js-css-pages/assets/global/plugins/bootstrap/css/bootstrap-rtl.min.css")}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset("files-js-css-pages/assets/global/plugins/bootstrap-switch/css/bootstrap-switch-rtl.min.css")}}" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="{{ asset("files-js-css-pages/assets/global/plugins/select2/css/select2.min.css") }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset("files-js-css-pages/assets/global/plugins/select2/css/select2-bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="{{ asset("files-js-css-pages/assets/global/css/components-rtl.min.css") }}" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{{ asset("files-js-css-pages/assets/global/css/plugins-rtl.min.css") }}" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="{{ asset("files-js-css-pages/assets/pages/css/login-rtl.min.css") }}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class=" login">
        <!-- BEGIN LOGO -->
        <div class="logo">
            <a href="index.html">
                <img src="{{ asset('files-js-css-pages/assets/pages/img/logo-big.png') }}" alt="" /> </a>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class="content">
            <!-- BEGIN LOGIN FORM -->
            <form class="login-form" action="/administration/home" method="post">
                <h3 class="form-title font-green"> تسجيل الدخول</h3>
                <div class="alert alert-danger display-hide">
                    <button class="close" data-close="alert"></button>
                    <span>ادخل رقم البطاقة الوطنية او كلمة المرور</span>
                </div>
                <div class="form-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">ادخل رقم البطاقة الوطنية
                    </label>
                    <input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="رقم البطاقة الوطنية" name="username" /> </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">ادخل كلمة السر</label>
                    <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="كلمة المرور" name="password" /> </div>
                <div class="form-actions">
                    <button type="submit" class="btn green uppercase">تسجيل الدخول</button>
                    <label class="rememberme check mt-checkbox mt-checkbox-outline">
                        <input type="checkbox" name="remember" value="1" />تذكير
                        <span></span>
                    </label>
                    <a href="javascript:;" id="forget-password" class="forget-password">نسيت كلمة المرور؟</a>
                </div> 
            </form>
            <!-- END LOGIN FORM -->
            <!-- BEGIN FORGOT PASSWORD FORM -->
            <form class="forget-form" action="index.html" method="post">
                <h3 class="font-green">نسيت كلمة المرور ؟</h3>
                <p> ادخل رقم البطاقة الوطنيلة </p>
                <div class="form-group">
                    <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="رقم البطاقة الوطنية" name="email" /> </div>
                <div class="form-actions">
                    
                    <button type="button" id="back-btn" class="btn green btn-outline pull-right">الرجوع</button>
                    <button type="submit" class="btn btn-success uppercase pull-left">ارسال</button>
                   
                </div>
            </form>
            <!-- END FORGOT PASSWORD FORM --> 
        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<script src="../assets/global/plugins/ie8.fix.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="{{ asset("files-js-css-pages/assets/global/plugins/jquery.min.js")}}" type="text/javascript"></script>
        <script src="{{ asset("files-js-css-pages/assets/global/plugins/bootstrap/js/bootstrap.min.js") }} " type="text/javascript"></script>
        <script src="{{ asset("files-js-css-pages/assets/global/plugins/js.cookie.min.js")}}" type="text/javascript"></script>
        <script src="{{ asset("files-js-css-pages/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js")}}" type="text/javascript"></script>
        <script src="{{ asset("files-js-css-pages/assets/global/plugins/jquery.blockui.min.js")}}" type="text/javascript"></script>
        <script src="{{ asset("files-js-css-pages/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js")}}" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="{{ asset("files-js-css-pages/assets/global/plugins/jquery-validation/js/jquery.validate.min.js")}}" type="text/javascript"></script>
        <script src="{{ asset("files-js-css-pages/assets/global/plugins/jquery-validation/js/additional-methods.min.js")}}" type="text/javascript"></script>
        <script src="{{ asset("files-js-css-pages/assets/global/plugins/select2/js/select2.full.min.js")}}" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="{{ asset("files-js-css-pages/assets/global/scripts/app.min.js")}}" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="{{ asset("files-js-css-pages/assets/pages/scripts/login.min.js")}}" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>