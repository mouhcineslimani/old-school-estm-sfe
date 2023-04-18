@extends('administration.layouts.master')


@section('content')
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li> 
                <a href="/enseignants" style="font-size: 1.2em ; padding-right : 30px">الاساتذة</a>
                <i class="fa fa-angle-left"></i>
            </li> 
            <li>
                <span style="font-size: 1.2em ;">جدول الحصص</span> 
            </li> 
        </ul>   
    </div>  
    <div class="h1 text-center">جدول الحصص لكل استاذ </div>
    <br/> 
    <form action="{{ url('') }}" method="get"> 
        @csrf 
        <input type="text" name="sear" class="pull-left" placeholder="ادخل رقم البطاقة الوطنية" style="margin-left: 10px ; margin-right:15px ; width :250px ; height : 30px !important ; border : solid  grey 0.3px !important ; border-radius : 200px !important ; padding-right : 20px !important ; ">
        <button class="btn btn-sm btn-primary text-center " type="submit" >
            <i class="fas fa-search"></i>
        </button>
         <a class="btn btn-primary pull-right btn-sm"  href="/seance" style="width:90px !important ; " > تحديث</a>
    </form>
    <br/>
    <table class="table">
        <thead class="bg-success">
          <tr >
            <th scope="col" class="text-center" >رقم البطاقة الوطنية</th>
            <th scope="col" class="text-center">الاسم الشخصي</th>
            <th scope="col" class="text-center">الاسم العائلي</th> 
            <th scope="col" class="text-center" colspan="4">الاجراء</th>
          </tr>
        </thead>
        <tbody>
            @foreach($e as $ee)
            @if(count($ee->emploi_p)>0)
            <tr  class="text-center">
                <td>{{ $ee->cni}}</td>
                <td>{{$ee->prenom_prof }}</td>
                <td>{{$ee->nom_prof}}</td> 
                <td class="text-center">
                    <a class="btn btn-warning btn-sm"   data-toggle="modal"
                        data-target="#modale--show-" ><i class="fas fa-pencil-alt"></i></a>
                </td>
                <td>
                    <form action="{{ url('seance/'.$ee->cni) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE')}}
                        <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
                <td><a  data-toggle="modal" data-target="#seance-{{$ee->cni}}">اضف حصة</a></td>
                <td><a data-toggle="modal" data-target="#detail-{{$ee->cni}}">تفاصيل</a></button></td>
            </tr> 
            @endif
            @endforeach
            {{-- <tr>
                <td class="text-center" colspan="7">
                    {{ $e->links()}}
                </td>
            </tr> --}}
        </tbody>
    </table>   
  
    @foreach($e as $ee)
    <!-- Modale seance -->
    <div class="modal fade" id="seance-{{$ee->cni}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <button type="button" class="close pull-left" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h3 class="modal-title text-center" id="exampleModalLabel">اضافة حصة</h3>
            </div>
            <form action="{{ url("seance") }}" method="POST" >
                @csrf
                <div class="modal-body"> 
                        <input type="text" class="form-control hidden" id="lastName" value={{$ee->cni}} name="cni"> 
                        <div class="form-group">
                            <label for="firstName" class="form-label">المستوى الدراسي   :</label>
                            <input type="text" class="form-control" id="firstName" placeholder="" value="" required="" name="ann_sc">
                        </div>
                        <div class="form-group">
                            <label for="lastName" class="form-label">  المادة :</label>
                            <input type="text" class="form-control" id="lastName" placeholder="" value="" required="" name="matiere">
                        </div>
                        <div class="form-group form-check">
                            <label for="firstName" class="form-label">عدد الساعات  :</label>
                            <input type="number" class="form-control" id="firstName" placeholder="" value="" required="" name="nombre">
                        </div> 
                </div> 
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary pull-left">اضف</button>
                    <button type="button" class="btn btn-secondary pull-left" data-dismiss="modal">الغاء</button>
                </div>
            </form>
        </div>
        </div>
    </div>
    @endforeach
    {{-- modale details --}}
    @foreach($e as $ee)
    <div class="modal fade" id="detail-{{$ee->cni}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <button type="button" class="close pull-left" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h3 class="modal-title text-center" id="exampleModalLabel">التفاصيل</h3>
                </div>
                <div class="modal-body"> 
                    <table class="table">
                        <tr class="text-center">
                            <td>المستوى الدراسي</td>
                            <td>المادة</td>
                            <td>عدد الساعات اللازمة</td>  
                        </tr>
                        @foreach ($ee->emploi_p as $emp)
                            <tr class="text-center"> 
                                <td>{{ $emp->niveau_scolaire}}</td>
                                <td>{{ $emp->matiere}}</td>
                                <td>{{ $emp->heure_necessaire}}</td> 
                            </tr>
                        @endforeach
                   </table> 
                </div> 
        </div>
    </div>
@endforeach 

@endsection