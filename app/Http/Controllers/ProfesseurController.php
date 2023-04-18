<?php

namespace App\Http\Controllers;
use Illuminate\Http\UploadedFile ;
use App\Models\Professeur;
use Illuminate\Http\Request;  
use App\Models\Cycle_formation ; 
use App\Models\Diplome ; 
use Illuminate\Support\Facades\DB ; 
class ProfesseurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    
        $search = $request->input('search') ;
        if($search){
        $professeur = Professeur::where('cni','like','%'.$search.'%')->paginate(1); 
        return view('administration.partPages.prof.liste_profs')->with('professeur',$professeur) ;
        }
        else 
        { 
            $professeur = Professeur::with('diplome')
            ->with('cycle_formation') 
            ->paginate(6);   
            return view('administration.partPages.prof.liste_profs')->with('professeur',$professeur) ;
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
        $prof = new Professeur() ;
        $prof->cni  = $request->input('cni');
        $prof->nom_prof  = $request->input('nom');
        $prof->prenom_prof  = $request->input('prenom');
        $prof->lieu_naissance  = $request->input('lieu_naissance');
        $prof->date_naissance  = $request->input('date_naissance');
        $prof->tel_prof  = $request->input('tel');
        $prof->date_arrivee  = $request->input('date_arrivee');
        $prof->specialiste  = $request->input('specialiste');
        $prof->adresse  = $request->input('adresse');
        if($request->file('image')){
            $image = $request->file('image');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $new_name);
            $prof->image  = $new_name;
        }
        $prof->save() ; 
        return redirect('enseignants') ; 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Professeur  $professeur
     * @return \Illuminate\Http\Response
     */
    public function show($cni)
    {
        //
        // $prof = Professeur::find($cni) ;   
        // return view('administration.partPages.prof.liste_profs')->with('dip',$prof) ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Professeur  $professeur
     * @return \Illuminate\Http\Response
     */
    public function edit($cni)
    {
        // 
        $prof = Professeur::find($cni) ;   
        return view('administration.partPages.prof.liste_profs')->with('prof',$prof) ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Professeur  $professeur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cni)
    {
        $p = Professeur::find($cni) ; 
        $p->cni = $request->input('cnii') ; 
        $p->nom_prof = $request->input('Nom') ; 
        $p->prenom_prof = $request->input('Prenom') ; 
        $p->tel_prof = $request->input('Tel') ;
        $p->lieu_naissance = $request->input('Lieu_naissance') ;  
        $p->specialiste = $request->input('Specialiste') ;
        $p->date_naissance = $request->input('Date_naissance') ;   
        $p->adresse = $request->input('Adresse') ; 
        $id = $request->input('id') ; 
        $name = $request->input('a') ; 
        $date = $request->input('date') ;  
        // $d = Diplome::find($id) ; 
        // $d->nom_diplome = $request->input($name) ; 
        // $d->save() ; 
        // for($i = 0;$i<count($id);$i++){ 
        //     $d = Diplome::find($id[$i]) ; 
        //     $d->nom_diplome = $request->input($name[$i]) ; 
        //     $d->annee_diplome = $request->input($date[$i]) ;
        //     $d->save() ;      
        // }
        $image = $request->file('imagee');
        if($image) {
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $new_name);
            $p->image  = $new_name;
        }

        $p->save() ; 
        return redirect('/enseignants') ; 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Professeur  $professeur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $cni)
    {
        //
        $p = Professeur::find($cni) ;     
        $cf= Cycle_formation::where('professeur_cni',$p->cni)->delete(); 
        $p->delete() ;
        return redirect('enseignants') ; 
    }

    public function demandeAbsence()
    {
        $d = Professeur::with('deman_abs')->get() ;   
        return view('administration.partPages.prof.abs_demande')->with('d',$d); 
    }

}
