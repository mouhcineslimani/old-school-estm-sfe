@extends('administration.layouts.master')

@section('content')  
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <i class="icon-home" style="font-size: 1.2em ; padding-right : 30px"></i>
                                <a href="/home" style="font-size: 1.2em ; padding-right : 30px" >الصفحة الرئيسية</a> 
                            </li> 
                        </ul> 
                    </div>  
                    <div class="jumbotron " style="padding-right: 100px !important ; padding-left : 100px !important"> 
                            <div class="row ">
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <a class="dashboard-stat dashboard-stat-v2 red" href="#">
                                        <div class="visual">
                                            <i class="fa fa-comments"></i>
                                        </div>
                                        <div class="details">
                                            <div class="number">
                                                <span data-counter="counterup" style="text-align: right !important" data-value={{ count($nombre_f) }}>{{ count($nombre_f) }}</span>
                                            </div>
                                            <div class="desc">  عدد الأساتذة</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <a class="dashboard-stat dashboard-stat-v2 green" href="#">
                                        <div class="visual">
                                            <i class="fa fa-bar-chart-o"></i>
                                        </div>
                                        <div class="details">
                                            <div class="number">
                                                <span data-counter="counterup" data-value="{{ count($demande_abs) }}">{{ count($demande_abs) }}</span> </div>
                                            <div class="desc"> عدد طلبات بالغياب </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
                                        <div class="visual">
                                            <i class="fa fa-shopping-cart"></i>
                                        </div>
                                        <div class="details">
                                            <div class="number">
                                                <span data-counter="counterup" data-value={{ count($abs)}}>{{ count($abs)}}</span>
                                            </div>
                                            <div class="desc">الغياب  </div>
                                        </div>
                                    </a>
                                </div> 
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
                                        <div class="visual">
                                            <i class="fa fa-comments"></i>
                                        </div>
                                        <div class="details">
                                            <div class="number">
                                                <span data-counter="counterup" data-value="1349">0</span>
                                            </div>
                                            <div class="desc"> عدد  حصص التعويض </div>
                                        </div>
                                    </a>
                                </div> 
                            </div>   
                    </div>
@endsection
 