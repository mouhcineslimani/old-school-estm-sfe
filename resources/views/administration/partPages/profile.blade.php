@extends('administration.layouts.master')

@section('content')  
         <!-- END THEME PANEL --> 
                    <!-- END PAGE HEADER-->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN PROFILE SIDEBAR -->
                            <div class="profile-sidebar">
                                <!-- PORTLET MAIN -->
                                <div class="portlet light profile-sidebar-portlet ">
                                    <!-- SIDEBAR USERPIC -->
                                    <div class="profile-userpic">
                                        <img src="{{ asset('files-js-css-pages/assets/pages/media/profile/profile_user.jpg')}}" class="img-responsive" alt=""> </div>
                                    <!-- END SIDEBAR USERPIC -->
                                    <!-- SIDEBAR USER TITLE -->
                                    <div class="profile-usertitle">
                                        <div class="profile-usertitle-name"> Marcus Doe </div>
                                        <div class="profile-usertitle-job"> Developer </div>
                                        <br/>
                                    </div>
                                    <!-- END SIDEBAR USER TITLE --> 
                                </div>
                                <!-- END PORTLET MAIN -->
                                <!-- PORTLET MAIN -->
                                
                                <!-- END PORTLET MAIN -->
                            </div>
                            <!-- END BEGIN PROFILE SIDEBAR -->
                            <!-- BEGIN PROFILE CONTENT -->
                            <div class="profile-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="portlet light ">
                                            <div class="portlet-title tabbable-line">
                                                <div class="caption caption-md">
                                                    <i class="icon-globe theme-font hide"></i>
                                                    <span class="caption-subject font-blue-madison bold uppercase">الحساب الشخصي</span>
                                                </div>
                                                <ul class="nav nav-tabs">
                                                    <li class="active">
                                                        <a href="#tab_1_1" data-toggle="tab">المعلومات الشخصية</a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab_1_2" data-toggle="tab">تغيير الصورة</a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab_1_3" data-toggle="tab">تغيير كلمة المرور</a>
                                                    </li> 
                                                </ul>
                                            </div>
                                            <div class="portlet-body">
                                                <div class="tab-content">
                                                    <!-- PERSONAL INFO TAB -->
                                                    <div class="tab-pane active" id="tab_1_1">
                                                        <form role="form" action="#">
                                                            <div class="form-group">
                                                                <label class="control-label">الاسم الشخصي</label>
                                                                <input type="text" placeholder="John" class="form-control" /> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">الاسم العائلي</label>
                                                                <input type="text" placeholder="Doe" class="form-control" /> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">الهاتف</label>
                                                                <input type="text" placeholder="+1 646 580 DEMO (6284)" class="form-control" /> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Interests</label>
                                                                <input type="text" placeholder="Design, Web etc." class="form-control" /> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Occupation</label>
                                                                <input type="text" placeholder="Web Developer" class="form-control" /> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">About</label>
                                                                <textarea class="form-control" rows="3" placeholder="We are KeenThemes!!!"></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Website Url</label>
                                                                <input type="text" placeholder="http://www.mywebsite.com" class="form-control" /> </div>
                                                            <div class="margiv-top-10">
                                                                <a href="javascript:;" class="btn green"> حفظ</a>
                                                                <a href="javascript:;" class="btn default"> الغاء </a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- END PERSONAL INFO TAB -->
                                                    <!-- CHANGE AVATAR TAB -->
                                                    <div class="tab-pane" id="tab_1_2">
                                                        <form action="#" role="form">
                                                            <div class="form-group">
                                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                    <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> </div>
                                                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                                    <div>
                                                                        <span class="btn default btn-file">
                                                                            <span class="fileinput-new"> اختر الصورة</span> 
                                                                            <input type="file" name="...">حفظ</span>
                                                                        <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> مسح </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="margin-top-10">
                                                                <a href="javascript:;" class="btn green"> حفظ </a>
                                                                <a href="javascript:;" class="btn default"> الغاء </a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- END CHANGE AVATAR TAB -->
                                                    <!-- CHANGE PASSWORD TAB -->
                                                    <div class="tab-pane" id="tab_1_3">
                                                        <form action="#">
                                                            <div class="form-group">
                                                                <label class="control-label">كلمة المرور الحالية</label>
                                                                <input type="password" class="form-control" /> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">كلمة المرور الجديدة</label>
                                                                <input type="password" class="form-control" /> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">تأكيد كلمة المرور الجديدة</label>
                                                                <input type="password" class="form-control" /> </div>
                                                            <div class="margin-top-10">
                                                                <a href="javascript:;" class="btn green"> حفظ التغيير</a>
                                                                <a href="javascript:;" class="btn default"> الغاء </a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- END CHANGE PASSWORD TAB --> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END PROFILE CONTENT -->
                        </div>
                    </div>
                </div>
                <!-- END CONTENT BODY -->
            </div> 
@endsection