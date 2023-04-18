<?php

namespace App\Http\Controllers;

use App\Models\Emploi_prof;
use Illuminate\Http\Request; 
use App\Models\Professeur ; 
class EmploiProfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $search = $request->input('sear') ;
        if($search){
        $e = Professeur::with('emploi_p')->where('cni','like','%'.$search.'%')->paginate(1); 
        return view('administration.partPages.prof.emploi_prof')->with('e',$e);
        }
        else 
        {  
            $e = Professeur::with('emploi_p')->paginate(6);    
            return view('administration.partPages.prof.emploi_prof')->with('e',$e);
        }  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 
        return view('administration.partPages.prof.ajout_emploi_prof') ; 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $emploi = new Emploi_prof() ; 
        $cni = $request->input('cni') ; 
        $nombre = $request->input('nombre') ; 
        $class = $request->input('matiere') ; 
        $niveau = $request->input('ann_sc') ;
         
        $emploi->niveau_scolaire = $niveau ; 
        $emploi->heure_necessaire = $nombre ;
        $emploi->matiere = $class ;
        $emploi->professeur_cni = $cni ; 
        $emploi->save() ; 
        return redirect("/seance") ; 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Emploi_prof  $emploi_prof
     * @return \Illuminate\Http\Response
     */
    public function show(Emploi_prof $emploi_prof)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Emploi_prof  $emploi_prof
     * @return \Illuminate\Http\Response
     */
    public function edit(Emploi_prof $emploi_prof)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Emploi_prof  $emploi_prof
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Emploi_prof $emploi_prof)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Emploi_prof  $emploi_prof
     * @return \Illuminate\Http\Response
     */
    function destroy (Request $request, $id)
    {
        //
        return 123 ; 
    }
}
