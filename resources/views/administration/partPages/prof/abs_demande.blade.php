@extends('administration.layouts.master')

@section('content')
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li> 
                <a href="/enseignants" style="font-size: 1.2em ; padding-right : 30px">الاساتذة</a>
                <i class="fa fa-angle-left"></i>
            </li> 
            <li>
                <span style="font-size: 1.2em ;">   طلبات الغياب </span> 
            </li>
        </ul> 
    </div>
     <div>
        
       <div class="container-fluid">
        <div class="row g-3">
            <div class="col-sm-12 text-center"> 
                <div class="h1"> الاذن بالغياب </div>
            </div>
        </div>
        <br/>
        <div class="row g-3">
            <div class="col-lg-12">
                <form action="{{ url('demandes') }}" method="get"> 
                    @csrf 
                    <input type="text" name="sear" class="pull-left" placeholder="ادخل رقم البطاقة الوطنية" style="margin-left: 10px ; margin-right:15px ; width :250px ; height : 30px !important ; border : solid  grey 0.3px !important ; border-radius : 200px !important ; padding-right : 20px !important ; ">
                    <button class="btn btn-sm btn-primary text-center " type="submit" >
                        <i class="fas fa-search"></i>
                    </button>
                     <a class="btn btn-primary pull-right btn-sm"  href="/demandes" style="width:90px !important ; " > تحديث</a>
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
                <th scope="col" class="text-center" colspan="2">الاجراء</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($d as $item)  
                @if(count($item->deman_abs)>0)
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
                <td>
                    <form action="{{ url('demandes/'.$item->cni) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE')}}
                        <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
                <td class="">
                    <a   data-toggle="modal"
                    data-target="#modal-show-{{ $item->cni }}">تفاصيل</a>
                </td>
            </tr>   
            @endif
            @endforeach
            {{-- @foreach ($d as $element)
            @if(count($element->deman_abs)>0)
                <tr>
                    <td class="text-center" colspan="5">{{ $d->links() }}</td>
                </tr>
                @break
            @endif
            @endforeach --}}
            </tbody> 
        </table>
       </div>
    </div>   
       </div>
     </div>












     

@foreach($d as $item)   
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
                             <td>نوع الرخصة</td>
                             <td> من</td>
                             <td> الى</td>
                             <td colspan="4">مبررات الغياب</td> 
                         </tr>  
                         @foreach ($item->deman_abs as $a)  
                            <tr class="text-center">
                                <td>{{ $a->genre }} </td>
                                 <td>{{ $a->debutAbs }} </td>
                                <td>{{ $a->finAbs }} </td>
                                <td colspan="4">{{ $a->argument }}</td>   
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


@endsection