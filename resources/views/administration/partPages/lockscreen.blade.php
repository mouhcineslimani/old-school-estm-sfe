<!DOCTYPE html>
<html lang="en" dir="rtl"> 
    <head>
        <meta charset="utf-8" />
        <title>Metronic Admin RTL Theme #2 | User Lock Screen 1</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin RTL Theme #2 for " name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="{{ asset('files-js-css-pages/assets/global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('files-js-css-pages./assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('files-js-css-pages./assets/global/plugins/bootstrap/css/bootstrap-rtl.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('files-js-css-pages./assets/global/plugins/bootstrap-switch/css/bootstrap-switch-rtl.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="{{ asset('files-js-css-pages./assets/global/css/components-rtl.min.css')}}" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{{ asset('files-js-css-pages./assets/global/css/plugins-rtl.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="{{ asset('files-js-css-pages./assets/pages/css/lock-rtl.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class="">
        <div class="page-lock">
            <div class="page-logo">
                <a class="brand" href="index.html">
                    <img src="{{ asset('files-js-css-pages/assets/pages/img/logo-big.png') }}" alt="logo" /> </a>
            </div>
            <div class="page-body">
                <div class="lock-head"> مقفل </div>
                <div class="lock-body">
                    <div class="pull-left lock-avatar-block">
                        <img src="{{ asset('files-js-css-pages./assets/pages/media/profile/photo3.jpg')}}" class="lock-avatar"> </div>
                    <form class="lock-form pull-left" action="/administration/home" method="post">
                        <h4>Amanda Smith</h4>
                        <div class="form-group">
                            <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="كلمة السر" name="password" /> </div>
                        <div class="form-actions">
                            <button type="submit" class="btn red uppercase">تسجيل الدخول</button>
                        </div>
                    </form>
                </div>
                <div class="lock-bottom">
                    <a href="">لست .... ؟</a>
                </div>
            </div> 
        </div> 
        <!-- BEGIN CORE PLUGINS -->
        <script src="{{ asset('files-js-css-pages./assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('files-js-css-pages./assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('files-js-css-pages./assets/global/plugins/js.cookie.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('files-js-css-pages./assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('files-js-css-pages./assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('files-js-css-pages./assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="{{ asset('files-js-css-pages./assets/global/scripts/app.min.js')}}" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="{{ asset('files-js-css-pages./assets/pages/scripts/lock.min.js')}}" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>


{{-- you don't need to destroy the session  --}}