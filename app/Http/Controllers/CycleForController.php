<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cycle_formation ;  
use App\Models\Professeur ;  
class CycleForController extends Controller
{

    public function index()
    {
        //
        $professeur = Professeur::with('diplome')
        ->with('cycle_formation') 
        ->paginate(6); 
        return view('administration.partPages.prof.liste_profs')->with('professeur',$professeur) ; 
    }
    public function create()
    {
        //
        return view('administration.partPages.prof.inscription_prof') ; 
    }
    public function store(Request $request)
    {
        //
        $cyc = new Cycle_formation() ; 
        $cyc->nom_formation = $request->input('cycle') ; 
        $cyc->professeur_cni= $request->input('cniiii') ; 
        $cyc->regulateur = $request->input('regu') ; 
        $cyc->annee_formation = $request->input('annee_cycl') ;  
        $cyc->save() ; 
        return redirect('/enseignants') ; 
    }
    public function update(Request $request, $id)
    {
        //
        $cyc = Cycle_formation::find($id) ; 
        $nom = $request->input('formation') ; 
        $annee = $request->input('annee') ; 
        $reg = $request->input('reg') ;
        $cyc->nom_formation = $nom ; 
        $cyc->annee_formation = $annee ; 
        $cyc->regulateur = $annee ; 
        $cyc->save() ; 
        return redirect('/enseignants') ;  
    }
    public function destroy(Request $request, $id)
    {
        Cycle_formation::find($id)->delete();
        return redirect("/enseignants") ;  
    }
}
