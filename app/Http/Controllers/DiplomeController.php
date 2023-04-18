<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB ; 
use App\Models\Diplome ; 
use App\Models\Professeur ; 
class DiplomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
        $professeur = Professeur::with('diplome')
        ->with('cycle_formation') 
        ->paginate(6); 
        return view('administration.partPages.prof.liste_profs')->with('professeur',$professeur) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('administration.partPages.prof.inscription_prof') ; 
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
        $dip = new Diplome() ; 
        $dip->nom_diplome = $request->input('diplome') ; 
        $dip->professeur_cni = $request->input('cniiii') ; 
        $dip->annee_diplome = $request->input('annee') ;  
        $dip->save() ; 
        return redirect('diplomes') ; 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
         
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $dip = Diplome::find($id) ; 
        $nom = $request->input('dip') ; 
        $annee = $request->input('anne') ; 
        $dip->nom_diplome = $nom ; 
        $dip->annee_diplome = $annee ; 
        $dip->save() ; 
        return redirect('/enseignants') ;  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Diplome::find($id)->delete();
        return redirect("/enseignants") ;  
    }
}
