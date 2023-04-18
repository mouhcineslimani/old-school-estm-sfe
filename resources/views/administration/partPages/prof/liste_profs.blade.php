@extends('administration.layouts.master')

@section('content')

<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <span style="font-size: 1.2em ;padding-right : 30px">لائحة الاساتذة</span>
        </li>
    </ul>
</div>


<div class="container-fluid">
    <div class="row g-3">
        <div class="col-lg-12">
            <div class="h1 text-center"> لائحة الاساتذة </div> 
        </div>
    </div><br />
    <div class="row g-3">
        <div class="col-lg-12">
            <form action="{{ url('enseignants') }}" method="get"> 
                @csrf 
                <input type="text" name="search" class="pull-left" placeholder="ادخل رقم البطاقة الوطنية" style="margin-left: 10px ; margin-right:15px ; width :250px ; height : 30px !important ; border : solid  grey 0.3px !important ; border-radius : 200px !important ; padding-right : 20px !important ; ">
                <button class="btn btn-sm btn-primary text-center " type="submit" >
                    <i class="fas fa-search"></i>
                </button>
                <a class="btn btn-primary pull-right btn-sm" href="/enseignants/create"  style="width:90px !important ; ">اضف استاذ</a>
                <a class="btn btn-primary pull-right btn-sm"  href="/enseignants" style="margin-left:15px !important ;width:90px !important ; " > تحديث</a>
            </form>
        </div>
    </div><br /><br />
    <div class="row g-3">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table ">
                            <thead class="bg-success ">
                                <tr>
                                    <th scope="col" class="text-center">رقم البطاقة الوطنية</th>
                                    <th scope="col" class="text-center">الاسم الشخصي</th>
                                    <th scope="col" class="text-center">الاسم العائلي</th>
                                    <th scope="col" class="text-center">تاريخ الالتحاق</th>
                                    <th scope="col" class="text-center"> رقم الهاتف</th>
                                    <th scope="col" class="text-center" colspan="5" >الاجراء</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($professeur as $p)
                                <tr class="text-center">
                                    <td>{{ $p->cni }}</td>
                                    <td> {{ $p->nom_prof }}</td>
                                    <td> {{ $p->prenom_prof }}</td>
                                    <td>{{ $p->date_arrivee }}</td>
                                    <td> {{ $p->tel_prof }} </td>
                                    <td>
                                        <a  class="btn btn-warning btn-sm " href="{{ url('enseignants/'.$p->cni.'/edit') }}" data-toggle="modal"
                                            data-target="#modal-{{ $p->cni }}">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <form action="{{ url('enseignants/'.$p->cni) }}" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE')}}
                                            <button class="bnt btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                        </form>
                                    </td>
                                    <td><a class="btn btn-primary btn-sm " href="" data-toggle="modal"
                                        data-target="#mod{{ $p->cni }} ">اضف شهادة</a></td>
                                    <td> <a  class="btn btn-primary btn-sm " href="" data-toggle="modal"
                                        data-target="#m{{ $p->cni }} ">اضف دورة</a></td>
                                    <td><a class="btn" href="/enseignants/{{$p->cni}}"  data-toggle="modal"
                                            data-target="#modal-show-{{ $p->cni }}">المزيد</a></button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td class="text-center" colspan="10">{{ $professeur->links() }}</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
        </div>
    </div>

</div>





  


@foreach($professeur as $p) 
{{-- popUp see more info : --}}
<div class=" modal fade" id="modal-show-{{ $p->cni }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <button type="button" class="close pull-left" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h3 class="modal-title text-center" id="exampleModalLabel">معلومات شخصية</h3>
            </div>
            <div class="modal-body">
                    <table class="table">
                        <tr>
                            <th scope="col" class="text-center">رقم البطاقة الوطنية</th>
                            <td>{{ $p->cni }}</td>
                            <td rowspan="3" colspan="2" class="text-center" >
                                @if($p->image)
                                <img src={{ asset('images/'.$p->image) }} style="width:140px;" name="image" class="text-center">
                                @else 
                                    <img src={{ asset('images/userprofile.png') }} style="width:140px"  class="text-center">
                                @endif
                                </td>
                        </tr>
                        <tr>
                            <th scope="col" class="text-center" >الاسم الشخصي</th>
                            <td>{{ $p->nom_prof}} </td>
                        </tr>
                        <tr>
                            <th scope="col" class="text-center">الاسم العائلي</th>
                            <td>{{ $p->prenom_prof }}</td>
                        </tr>
                        <tr>
                            <th scope="col" class="text-center">تاريخ الازدياد</th>
                            <td>{{ $p->date_naissance}}</td>
                            <th scope="col" class="text-center">مكان الازدياد</th>
                            <td>{{ $p->lieu_naissance }}</td>
                        </tr>
                        <tr>
                            <th scope="col" class="text-center">تاريخ الالتحاق </th>
                            <td>{{ $p->date_arrivee }}</td>
                            <th scope="col" class="text-center">التخصص</th>
                            <td>{{ $p->specialiste }}</td>
                        </tr>
                        <tr>
                            <th scope="col" class="text-center">العنوان </th>
                            <td>{{ $p->adresse }}</td>
                            <th scope="col" class="text-center"> الهاتف </th>
                            <td>{{ $p->tel_prof}}</td>
                        </tr>
                        <tr>
                            <th scope="col" class="text-center">الشواهد</th>
                            <td class="">
                                @foreach ($p->diplome as $d)
                                <li>{{$d->nom_diplome}} عام {{ $d->annee_diplome }}</li>
                                @endforeach
                            </td>
                            <th scope="col" class="">دورات تكوينية</th>
                            <td class="">
                                @foreach ($p->cycle_formation as $c)
                                <li>{{$c->nom_formation}} عام {{ $c->annee_formation }}</li>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                    </table> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success pull-left " data-dismiss="modal">الغاء</button>
            </div>
        </div>
    </div>
</div>
@endforeach







































@foreach($professeur as $p) 
{{-- popUp update info : --}}
<div class=" modal fade" id="modal-{{ $p->cni }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <button type="button" class="close pull-left" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h3 class="modal-title text-center" id="exampleModalLabel">معلومات شخصية</h3>
            </div>
            <div class="modal-body">
                <form action="{{ url('enseignants/'.$p->cni) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">
                    <table class="table">
                        <tr>
                            <th scope="col" class="text-center">رقم البطاقة الوطنية</th>
                            <td><input type="text" value={{ $p->cni }} name="cnii" class="form-cntrol" style="border-style : none !important"></td>
                            <td rowspan="3" colspan="2" class="text-center" > 
                                <div class="fileinput fileinput-new " data-provides="fileinput">
                                    <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                        <img src={{ asset('images/'.$p->image) }} alt=""> </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 10px;"> </div>
                                    <div>
                                        <span class="btn default btn-file">
                                            <span class="fileinput-new">اختر الصورة</span>
                                            <span class="fileinput-exists"> غير </span> 
                                            <input type="file" name="imagee">
                                        </span>
                                        <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> مسح </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="col" class="text-center" >الاسم الشخصي</th>
                            <td><input type="text" name="Prenom" value={{ $p->nom_prof}} class="form-cntrol" name="prenom" style="border-style : none !important"> </td>
                        </tr>
                        <tr>
                            <th scope="col" class="text-center">الاسم العائلي</th>
                            <td><input type="text" value={{ $p->prenom_prof }} name="Nom" class="form-cntrol"  name="nom" style="border-style : none !important"></td>
                        </tr>
                        <tr>
                            <th scope="col" class="text-center">تاريخ الازدياد</th>
                            <td><input type="date" value={{ $p->date_naissance}} name="Date_naissance" class="form-cntrol" style="border-style : none !important"></td>
                            <th scope="col" class="text-center">مكان الازدياد</th>
                            <td><input type="text" value={{ $p->lieu_naissance }} name="Lieu_naissance" class="form-cntrol" style="border-style : none !important"></td>
                        </tr>
                        <tr>
                            <th scope="col" class="text-center">تاريخ الالتحاق </th>
                            <td><input type="date" value={{ $p->date_arrivee }} name="Date_arrivee" class="form-cntrol" style="border-style : none !important"></td>
                            <th scope="col" class="text-center">التخصص</th>
                            <td><input type="text" value={{ $p->specialiste }} name="Specialiste" class="form-cntrol" style="border-style : none !important"></td>
                        </tr>
                        <tr>
                            <th scope="col" class="text-center">العنوان </th>
                            <td><input type="text"  value = {{ $p->adresse }} name="Adresse" class="form-cntrol" style="border-style : none !important"></td>
                            <th scope="col" class="text-center"> الهاتف </th>
                            <td><input type="text" value = {{ $p->tel_prof}} name="Tel" class="form-cntrol" style="border-style : none !important"></td>
                        </tr>
                        <tr>
                            <th scope="col" class="text-center">الشواهد</th>
                            <td class="">
                                @foreach ($p->diplome as $d)
                                <li style="list-style-type: none">  
                                    <table>
                                        <tr>
                                            <td> * {{$d->nom_diplome}} 
                                                عام {{ $d->annee_diplome }} </td>
                                            <td><i class="fas fa-pencil-alt" data-toggle="modal"
                                                data-target="#modal---{{ $d->id }}"></i> </td>
                                            <td><form action="{{ url('diplomes/'.$d->id) }}" method="post">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE')}}
                                                <button class="btn" style="border : none !important  ; padding :0px !important" type="submit"><i class="fas fa-trash"></i></button>
                                            </form></td>
                                        </tr>
                                    </table> 
                                </li>
                                @endforeach
                            </td>
                            <th scope="col" class="">دورات تكوينية</th>
                            <td class="">
                                @foreach ($p->cycle_formation as $c)
                                <li style="list-style-type: none">
                                    <table>
                                        <tr>
                                            <td>* {{$c->nom_formation}}  عام {{ $c->annee_formation }} </td>
                                            <td><i class="fas fa-pencil-alt" data-toggle="modal"
                                                data-target="#modal--{{ $c->id }}"></i> </td>
                                            <td><form action="{{ url('cycles/'.$c->id) }}" method="post">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE')}}
                                                <button class="btn " style="border : none !important  ; padding :0px !important" type="submit"><i class="fas fa-trash"></i></button>
                                            </form></td>
                                        </tr>
                                    </table> 
                                </li>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                    </table>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-warning pull-left" >موافق</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endforeach


{{-- diploms update --}}
@foreach($professeur as $p) 
@foreach ($p->diplome as $d) 
<div class=" modal fade" id="modal---{{ $d->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <button type="button" class="close pull-left" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h3 class="modal-title text-center" id="exampleModalLabel">الشواهد المحصل عليها </h3>
            </div>
            <div class="modal-body">
                <form action="{{ url('diplomes/'.$d->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">
                    <table class="table">
                        <tr class="text-center">
                            <td> اسم الشهادة</td>
                            <td> الشنة </td>
                        </tr>
                        <tr>
                            <td><input value="{{ $d->nom_diplome}}" type="text" name="dip" ></td>
                            <td><input value="{{ $d->annee_diplome }}" type="date" name="anne" ></td>
                        </tr> 
                    </table>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-warning pull-left" >موافق</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endforeach
@endforeach


{{-- cycle update --}}
@foreach($professeur as $p) 
@foreach ($p->cycle_formation as $c) 
<div class=" modal fade" id="modal--{{ $c->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <button type="button" class="close pull-left" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h3 class="modal-title text-center" id="exampleModalLabel">الشواهد المحصل عليها </h3>
            </div>
            <div class="modal-body">
                <form action="{{ url('cycles/'.$c->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">
                    <table class="table">
                        <tr class="text-center">
                            <td> الاسم </td>
                            <td>  السنة</td>
                            <td>  اللجنة المنظمة</td>
                        </tr>
                        <tr>
                            <td><input value="{{ $c->nom_formation}}" type="text" name="formation" ></td>
                            <td><input value="{{ $c->regulateur }}" type="date" name="annee" ></td>
                            <td><input value="{{ $c->annee_formation }}" type="text" name="reg" ></td>
                        </tr> 
                    </table>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-warning pull-left" >موافق</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endforeach
@endforeach












































@foreach($professeur as $p) 
{{-- popUp diplome ajout : --}}
<div class=" modal fade" id="mod{{ $p->cni }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <button type="button" class="close pull-left" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h3 class="modal-title text-center" id="exampleModalLabel"> اضافة شهادة </h3>
            </div>
            <div class="modal-body">
                <form action="{{ url('diplomes') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $p->cni }}" name="cniiii">
                    <table class="table text-center">
                        <tr>
                            <th scope="col" class="" >رقم البطاقة الوطنية</th>
                            <td> {{ $p->cni }} </td>
                        </tr>
                        <tr>
                            <th scope="col" class="" > اسم الشهادة</th>
                            <td><input type="text" name="diplome"  value=""  style="width : 250px !important" name="prenom"  ></td>
                        </tr>
                        <tr>
                            <th scope="col" class="" >السنة </th>
                            <td><input type="date" value=""  name="annee" style="width : 250px !important"  name="annee"  ></td>
                        </tr>  
                    </table>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-warning pull-left" >موافق</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endforeach

























@foreach($professeur as $p) 
{{-- popUp cycle info : --}}
<div class=" modal fade" id="m{{ $p->cni }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <button type="button" class="close pull-left" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h3 class="modal-title text-center" id="exampleModalLabel"> اضافة دورة  </h3>
            </div>
            <div class="modal-body">
                <form action="{{ url('cycles') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $p->cni }}" name="cniiii">
                    <table class="table text-center">
                        <tr>
                            <th scope="col" >رقم البطاقة الوطنية</th>
                            <td> {{ $p->cni }} </td>
                        </tr>
                        <tr>
                            <th scope="col" class=""  > اسم الدورة</th>
                            <td><input type="text" name="cycle"  value=""  style="width : 250px !important" name="prenom"  ></td>
                        </tr>
                        <tr>
                            <th scope="col" class="" >السنة </th>
                            <td><input type="date" value=""  name="annee_cycl" style="width : 250px !important"  name="annee"  ></td>
                        </tr>  
                        <tr>
                            <th scope="col" class="" > اللجنة المنظمة </th>
                            <td><input type="text" name="regu"  value=""  style="width : 250px !important" name="prenom"  ></td>
                        </tr>
                    </table>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-warning pull-left" >موافق</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endforeach

@endsection


