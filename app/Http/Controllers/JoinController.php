<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Attp\Models\Diplome ; 
use App\Models\Professeur ; 
use App\Models\Cycle_formation ; 
class JoinController extends Controller
{
    //
    public function ProfDip()
    {
        $data = Professeur::join('diplomes','diplomes.professeur_cni','=','professeurs.cni') 
                ->get(['nom_diplome','annee_diplome']) ; 
                return view('administration.partPages.prof.liste_profs')->with('data',$data ) ;   
    }
    public function ProfCyc()
    {
        $dat = Professeur::join('cycle_formations','cycle_formations.professeur_cni','=','professeurs.cni') 
                ->get(['annee_formation','nom_formation']) ; 
        return view('administration.partPages.prof.liste_profs')->with('dat',$dat) ;  
    }
}

