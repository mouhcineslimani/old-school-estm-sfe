@extends('administration.layouts.master')

@section('content')
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li> 
                <a href="/enseignants" style="font-size: 1.2em ; padding-right : 30px">الاساتذة</a>
                <i class="fa fa-angle-left"></i>
            </li> 
            <li>
                <span>التسجيل</span> 
            </li>
        </ul> 
    </div>  
    <div style="margin-left:20% !important ; margin-right:20% !important">
        <div class="row">   
                <form class="needs-validation" method="post" action="{{ url('enseignants')}}" enctype="multipart/form-data" novalidate="" >
                    @csrf
                    <div class="row g-3">
                        <div class="col-sm-12 text-center"> 
                            <div class="h1"> استمارة التسجيل </div>
                        </div>
                    </div>
                    <br/>
                    <div class="row g-3">
                        <div class="col-sm-12 text-center"> 
                            <div class="fileinput fileinput-new " data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                    <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt=""> </div>
                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 10px;"> </div>
                                <div>
                                    <span class="btn default btn-file">
                                        <span class="fileinput-new">اختر الصورة</span>
                                        <span class="fileinput-exists"> غير </span> 
                                        <input type="file" name="image">
                                    </span>
                                    <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> مسح </a>
                                </div>
                            </div>
                        </div><br/><br/>
                    </div>
                    <div class="row g-3">
                        <div class="col-sm-12"> 
                            <span class="h3">  معلومات الشخصية :</span> 
                        </div><br/><br/>
                    </div>
                    <div class="row g-3"> 
                        <div class="col-sm-6">
                            <label for="firstName" class="form-label">الاسم العائلي :</label>
                            <input type="text" class="form-control" id="firstName" name="nom" placeholder="" value="" required="">
                        </div>
                        <div class="col-sm-6">
                            <label for="lastName" class="form-label"> الاسم الشخصي: </label>
                            <input type="text" class="form-control" id="lastName" placeholder="" name="prenom" value="" required="">
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="firstName" class="form-label">تاريخ الازدياد :</label>
                            <input type="date" class="form-control" id="firstName" placeholder="" name="date_naissance" value="" required="">
                        </div>
                        <div class="col-sm-6">
                            <label for="lastName" class="form-label">مكان الازدياد :</label>
                            <input type="text" class="form-control" id="lastName" placeholder="" value="" name="lieu_naissance" required="">
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="firstName" class="form-label">  تاريخ الالتحاق :</label>
                            <input type="date" class="form-control" id="firstName" placeholder="" name="date_arrivee" value="" required="">
                        </div>
                        <div class="col-sm-6">
                            <label for="lastName" class="form-label"> التخصص :</label>
                            <input type="text" class="form-control" id="lastName" placeholder="" value="" name="specialiste" required="">
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="lastName" class="form-label">    رقم البطاقة الوطنية : </label>
                            <input type="text" class="form-control" id="lastName" placeholder="" value="" name="cni" required="">
                        </div>
                        <div class="col-sm-6">
                            <label for="firstName" class="form-label">رقم الهاتف :</label>
                            <input type="tel" class="form-control" id="firstName" placeholder="" value="" name="tel" required="">
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-sm-12"> 
                            <label for="firstName" class="form-label">العنوان :</label>
                             <textarea class="form-control" id="firstName" rows="3" name="adresse"></textarea>
                        </div>
                    </div>
                   
                    <br/>
                    <div class="row g-3" style="margin-bottom: 90px !important">
                        <div class="col-sm-12">
                            <button class="btn btn-primary " type="submit">اضف</button>
                        </div>
                    </div>
                </form> 
        </div> 
    </div>
@endsection 