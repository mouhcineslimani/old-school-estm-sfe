@extends('administration.layouts.master')

@section('content')
    <div class="modal fade" id="detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <th scope="col" class="text-center" >رقم البطاقة الوطنية</th>
                            <td>{{$prof->cni}}</td>
                            <td rowspan="3" colspan="2" class="text-center"><img src="{{ asset('images/admine.jpg')}}" style="width:140px"></td>
                          </tr>
                          <tr>
                            <th scope="col" class="text-center">الاسم الشخصي</th>
                            <td>{{ $prof->nom_prof}} </td>  
                          </tr>
                          <tr>
                            <th scope="col" class="text-center">الاسم العائلي</th>
                            <td>{{ $prof->prenom_prof }}</td> 
                          </tr>
                          <tr>
                            <th scope="col" class="text-center">تاريخ الازدياد</th> 
                            <td>20</td> 
                            <th scope="col" class="text-center">مكان الازدياد</th> 
                            <td>20</td> 
                          </tr>
                          <tr>
                            <th scope="col" class="text-center">تاريخ الالتحاق </th> 
                            <td>20</td> 
                            <th scope="col" class="text-center">التخصص</th> 
                            <td>20</td> 
                          </tr>
                          <tr>
                            <th scope="col" class="text-center">العنوان </th> 
                            <td>meknes , hamria ...</td>
                            <th scope="col" class="text-center"> الهاتف </th> 
                            <td>20</td>
                          </tr>
                          <tr>
                            <th scope="col"  class="text-center">الشواهد</th> 
                            <td class="">
                                -بkqsjdjkqsdksdkdqsdkjqاك 2010 <br/>
                                -الاجازة 2013<br/>
                                -باك 2010 <br/>
                                -الاجازة 2013  -باك 2010 <br/>
                                -الاجازة 2013
                            </td> 
                            <th scope="col"  class="">دورات تكوينية</th> 
                            <td class="">
                                -باك 2010 <br/>
                                -الاجازة 2013
                            </td>
                          </tr>  
                          <tr> 
                    </table>  
                </div> 
                <div class="modal-footer">
                    <button type="button"  colspan="4" class="btn btn-success pull-left " data-dismiss="modal">الغاء</button>
                </div>
        </div>
    </div>
@endsection
