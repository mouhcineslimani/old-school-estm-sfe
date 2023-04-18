@extends('administration.layouts.master')

@section('content')
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li> 
                <a href="/absences" style="font-size: 1.2em ; padding-right : 30px">الغياب</a>
                <i class="fa fa-angle-left"></i>
            </li> 
            <li>
                <span style="font-size: 1.2em ; ">لائحة الغياب</span> 
            </li>
        </ul> 
    </div>
    <div class="h1 text-center"> لائحة الغياب </div>
    <br/>
    <form action="{{ url('absences') }}" method="get"> 
        @csrf 
        <input type="text" name="sear" class="pull-left" placeholder="ادخل رقم البطاقة الوطنية" style="margin-left: 10px ; margin-right:15px ; width :250px ; height : 30px !important ; border : solid  grey 0.3px !important ; border-radius : 200px !important ; padding-right : 20px !important ; ">
        <button class="btn btn-sm btn-primary text-center " type="submit" >
            <i class="fas fa-search"></i>
        </button>
        <a class="btn btn-primary pull-right btn-sm" href="/absences/create"  style="width:90px !important ; ">اضف الغياب </a>
        <a class="btn btn-primary pull-right btn-sm"  href="/absences" style="margin-left:30px !important ;width:90px !important ; " > تحديث</a>
    </form>
   <br/><br/>
    <table class="table">
        <thead class="bg-success">
          <tr >
            <th scope="col" class="text-center" >رقم البطاقة الوطنية</th>
            <th scope="col" class="text-center">الاسم الشخصي</th>
            <th scope="col" class="text-center">الاسم العائلي</th> 
            <th scope="col" class="text-center" colspan="3">الاجراء</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($abs as $item)
                @if(count($item->absence)>0)
            <tr>
                <td class="text-center">
                    {{ $item->cni }} 
                </td>
                <td class="text-center">
                    {{ $item->prenom_prof }}
                </td>
                <td class="text-center">
                    {{ $item->nom_prof }}
                </td>
                <td class="text-center">
                    <a class="btn btn-warning btn-sm"   data-toggle="modal"
                        data-target="#modale--show-{{ $item->cni }}" ><i class="fas fa-pencil-alt"></i></a>
                </td>
                <td>
                    <form action="{{ url('absences/'.$item->cni) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE')}}
                        <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
                <td class="text-center">
                    <a  data-toggle="modal" href="/absences/prof/{{ $item->cni}} "
                    data-target="#modal-show-{{ $item->cni }}">تفاصيل</a>
                </td>
            </tr>
                @endif
            @endforeach
        </tbody> 
        
    </table>
    
    

    
@foreach($abs as $item) 
{{-- popUp see more info : --}}
<div class=" modal fade" id="modal-show-{{ $item->cni }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true"> 
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <button type="button" class="close pull-left" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" >&times;</span>
                </button>
                <h3 class="modal-title text-center" id="exampleModalLabel">التفاصيل</h3>
            </div>
            <div class="modal-body">
                    <table class="table">
                         <tr class="text-center">
                             <td>رقم</td>
                             <td>اليوم</td>
                             <td>من</td>
                             <td>الى</td>
                             <td>تعليق</td>
                         </tr> 
                         @foreach ($item->absence as $a)  
                            <tr class="text-center">
                                <td>{{ $a->id }}</td>
                                <td>{{ $a->jour }}</td>
                                 <td>{{ $a->debut }}</td>
                                <td>{{ $a->fin }}</td>
                                <td>{{ $a->comments }}</td>   
                            </tr>
                         @endforeach 
                    </table> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success pull-left " data-dismiss="modal">الغاء</button>
            </div>
        </div>
    </div>
</div>
@endforeach




@foreach($abs as $item) 
{{-- popUp  update : --}}
<div class=" modal fade" id="modale--show-{{ $item->cni }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true"> 
    <div class="modal-dialog modal-dialog-scrollable" role="document" >
        <div class="modal-content">
            <div class="modal-header bg-success">
                <button type="button" class="close pull-left" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" >&times;</span>
                </button>
                <h3 class="modal-title text-center" id="exampleModalLabel">التفاصيل</h3>
            </div>
            <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr class="text-center">
                                <td>اليوم</td>
                                <td>من</td>
                                <td>الى</td>
                                <td>تعليق</td>
                                <td>اجراء</td>
                            </tr>
                            @foreach ($item->absence as $a)  
                                <tr class="text-center">
                                    <td> {{ $a->jour }} </td>
                                    <td>{{ $a->debut }} </td>
                                    <td>{{ $a->fin }}</td>
                                    <td>{{ $a->comments }} </td>   
                                    <td class="text-center">
                                        <a class="btn btn-warning btn-sm"  data-toggle="modal"
                                            data-target="#modale--show--{{ $a->id }}" >تعديل</a>
                                    </td>
                                </tr>
                            @endforeach 
                        </table>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success pull-left " data-dismiss="modal">الغاء</button>
            </div>
        </form>
        </div>
    </div>
</div>
@endforeach


@foreach($abs as $item)  
@foreach ($item->absence as $a)
<div class=" modal fade" id="modale--show--{{ $a->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true"> 
    <div class="modal-dialog modal-dialog-scrollable" role="document" >
        <div class="modal-content">
            <div class="modal-header bg-success">
                <button type="button" class="close pull-left" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" >&times;</span>
                </button>
                <h3 class="modal-title text-center" id="exampleModalLabel">التفاصيل</h3>
            </div>
            <div class="modal-body">
                <form action="{{ url('absences/'.$a->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">
                    <div class="table-responsive">
                        <table class="table">
                                <tr class="text-center">
                                    <td>اليوم</td>
                                    <td>من</td>
                                    <td>الى</td>
                                    <td>تعليق</td> 
                                </tr>   
                                <tr class="text-center"> 
                                    <input type="hidden" value={{ $a->id }} name="id">
                                    <td><input value = {{ $a->jour }} type="date" name="joure" style="width:"></td>
                                    <td><input value= {{ $a->debut }} type="time" name="d"></td>
                                    <td><input value={{ $a->fin }} type="time" name="f"></td>
                                    <td><input value={{ $a->comments }} type="text" name="c"></td>   
                                </tr>  
                        </table>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success pull-left " data-dismiss="modal">الغاء</button>
                <td><button type="submit" class="btn btn-primary pull-left" >موافق</button></td> 
            </div>
        </form>
        </div>
    </div>
</div>
@endforeach
@endforeach

 






@endsection