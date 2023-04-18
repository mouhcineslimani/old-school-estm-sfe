<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Models\Abscence_professeur ; 
use App\Models\Professeur ; 
use Illuminate\Support\Facades\DB;
class AbsenceProfesseurContoroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {  
        $search = $request->input('sear') ;
        if($search){
        $abs = Professeur::where('cni','like','%'.$search.'%')->paginate(1); 
        return view('administration.partPages.prof.liste_absences')->with('abs',$abs) ;
        }
        else 
        { 
            $abs = Professeur::with('absence')->get();   
            return view('administration.partPages.prof.liste_absences')->with('abs',$abs) ;
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
        return view('administration.partPages.prof.ajout_absences');
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
        $abs = new Abscence_professeur() ; 
        $abs->cni = $request->input('cni') ;
        $abs->jour = $request->input('jour') ;
        $abs->debut = $request->input('du') ;
        $abs->fin = $request->input('a') ;
        $abs->comments = $request->input('comments') ;
        $abs->save();
        return redirect('absences') ;
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
        $id = $request->input('id') ; 
        $jour = $request->input('joure') ;  
        $debut = $request->input('d') ; 
        $fin = $request->input('f') ; 
        $comments = $request->input('c') ;
        $abs = Abscence_professeur::find($id) ; 
        $abs->jour = $jour ; 
        $abs->debut = $debut ; 
        $abs->fin=$fin ; 
        $abs->comments = $comments ; 
        $abs->save() ; 
        return redirect('/absences') ; 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($cni)
    {
        //
        DB::table('absence_professeurs')->where('cni', $cni)->delete(); 
        return redirect('absences') ; 
    }
}        
