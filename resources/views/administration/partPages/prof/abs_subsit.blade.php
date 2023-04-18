@extends('administration.layouts.master')

@section('content')
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li> 
                <a href="/enseignants" style="font-size: 1.2em ; padding-right : 30px">الاساتذة</a>
                <i class="fa fa-angle-left"></i>
            </li> 
            <li>
                <span style="font-size: 1.2em ;"> التعويض </span>  
            </li>
        </ul> 
    </div>
     <div>
        
       <div class="container-fluid">
        <div class="row g-3">
            <div class="col-sm-12 text-center"> 
                <div class="h1"> تعويض الحصص </div>
            </div>
        </div>
        <br/>
        <div class="row g-3">
            <div class="col-lg-12">
                <form action="{{ url('') }}" method="get"> 
                    @csrf 
                    <input type="text" name="sear" class="pull-left" placeholder="ادخل رقم البطاقة الوطنية" style="margin-left: 10px ; margin-right:15px ; width :250px ; height : 30px !important ; border : solid  grey 0.3px !important ; border-radius : 200px !important ; padding-right : 20px !important ; ">
                    <button class="btn btn-sm btn-primary text-center " type="submit" >
                        <i class="fas fa-search"></i>
                    </button>
                     <a class="btn btn-primary pull-right btn-sm"  href="/substitution" style="width:90px !important ; " > تحديث</a>
                </form>
               <br/>
            </div>
        </div>
        <div class="row g-3">
       <div class="table-responsive-sm">
        <table class="table">
            <thead class="bg-success">
              <tr >
                <th scope="col" class="text-center" >رقم البطاقة الوطنية</th>
                <th scope="col" class="text-center">الاسم الشخصي</th>
                <th scope="col" class="text-center">الاسم العائلي</th> 
                <th scope="col" class="text-center">من</th> 
                <th scope="col" class="text-center">الى</th> 
                <th scope="col" class="text-center">المادة</th> 
                <th scope="col" class="text-center">القسم</th> 
                <th scope="col" class="text-center" colspan="2">الاجراء</th>
              </tr>
            </thead>
            <tbody>
                 
            </tbody> 
        </table>
       </div>
    </div>   
       </div>
     </div>
@endsection