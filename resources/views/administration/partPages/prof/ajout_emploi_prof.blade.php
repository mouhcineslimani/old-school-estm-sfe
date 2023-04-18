@extends('administration.layouts.master')

@section('content')
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li> 
                <a href="/enseignants" style="font-size: 1.2em ; padding-right : 30px">الاساتذة</a>
                <i class="fa fa-angle-left"></i>
            </li> 
            <li>
                <span style="font-size: 1.2em ;"> اضافة الجدول </span> 
            </li>
        </ul> 
    </div>  
    <div style="margin-left:20% !important ; margin-right:20% !important">
        <div class="row"> 
                <form class="needs-validation" novalidate="" action="{{ url('seance') }}" method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="col-sm-12 text-center"> 
                        <div class="h1">استمارة الحصص المخصصة لكل استاذ</div>
                        </div>
                    </div>
                    <br/>
                    <div class="row g-3">
                        <div class="col-sm-12">
                            <label for="lastName" class="form-label">    رقم البطاقة الوطنية : </label>
                            <input type="text" class="form-control" id="lastName" placeholder="" value="" required="" name="cni">
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="firstName" class="form-label">المستوى الدراسي   :</label>
                            <input type="text" class="form-control" id="firstName" placeholder="" value="" required="" name="ann_sc">
                        </div>
                        <div class="col-sm-6">
                            <label for="lastName" class="form-label">  المادة :</label>
                            <input type="text" class="form-control" id="lastName" placeholder="" value="" required="" name="matiere">
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="firstName" class="form-label">عدد الساعات  :</label>
                            <input type="number" class="form-control" id="firstName" placeholder="" value="" required="" name="nombre">
                        </div>
                    </div>
                    <br/>
                    <div class="row g-3">
                        <div class="col-sm-12">
                            <button class="btn btn-primary " type="submit">املئ</button>
                        </div>
                    </div>
                </form> 
        </div> 
    </div>  
@endsection