<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Demande_absence ;
use App\Models\Professeur ;  
use Illuminate\Support\Facades\DB ; 
class Demande_absenceController extends Controller
{
    //
    public function index(Request $request)
    {
    
        $search = $request->input('sear') ;
        if($search){
            $d = Professeur::with('deman_abs')->where('cni','like','%'.$search.'%')->paginate(1);  
            return view('administration.partPages.prof.abs_demande')->with('d',$d); 
        }
        else 
        { 
            $d = Professeur::with('deman_abs')->get();   
            return view('administration.partPages.prof.abs_demande')->with('d',$d);  
        } 
    }
    // public function index()
    // {
    //     $d = Professeur::with('deman_abs')->get() ;   
    //     return view('administration.partPages.prof.abs_demande')->with('d',$d); 
    // }
    function destroy (Request $request, $cni)
    { 
        $item =  Demande_absence::where('cni',$cni)->delete() ; 
        return redirect('/demandes') ; 
    }
}
