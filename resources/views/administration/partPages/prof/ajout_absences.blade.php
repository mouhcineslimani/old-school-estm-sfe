@extends('administration.layouts.master')

@section('content')
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li> 
                <a href="/enseignants/listes" style="font-size: 1.2em ; padding-right : 30px">الاساتذة</a>
                <i class="fa fa-angle-left"></i>
            </li> 
            <li>
                <span style="font-size: 1.2em ;">تسجيل الغياب</span> 
            </li>
        </ul> 
    </div>
    <div style="margin-left:20% !important ; margin-right:20% !important">
        <div class="row"> 
                <form class="needs-validation" novalidate="" action ={{ url('absences') }} method="post">
                    @csrf
                    <div class="row g-3">
                        <div class="col-sm-12 text-center"> 
                        <div class="h1">استمارة الغياب</div>
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
                        <div class="col-sm-4">
                            <label for="firstName" class="form-label">اليوم  :</label>
                            <input type="date" class="form-control" id="firstName" placeholder="" value="" required="" name="jour">
                        </div>
                        <div class="col-sm-4">
                            <label for="lastName" class="form-label"> من :</label>
                            <input type="time" class="form-control" id="lastName" placeholder="" value="" required="" name="du">
                        </div>
                        <div class="col-sm-4">
                            <label for="lastName" class="form-label"> الى :</label>
                            <input type="time" class="form-control" id="lastName" placeholder="" value="" required="" name="a">
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-sm-12">
                            <label for="firstName" class="form-label">  تعليق (مبرر / غير مبرر) :</label>
                            <textarea class="form-control" name="comments"></textarea>
                        </div>
                    </div>
                    <br/>
                    <div class="row g-3">
                        <div class="col-sm-12">
                            <button class="btn btn-primary " type="submit">اسجل</button>
                        </div>
                    </div>
                </form> 
        </div> 
    </div>   
@endsection