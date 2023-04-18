<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //sidebar routes 
    public function dashboard()
    {
        return view('administration.partPages.dashboard') ; 
    } 
    // public function profList()
    // {
    //     return view('administration.partPages.prof.liste_profs') ; 
    // }
    // public function profInscription()
    // {
    //     return view('administration.partPages.prof.inscription_prof') ; 
    // }
    // public function profAbsenceList()
    // {
    //     return view('administration.partPages.prof.liste_absences') ; 
    // }
    // public function profAbscenceAdd ()
    // {
    //     return view('administration.partPages.prof.ajout_absences') ; 
    // }
    // public function profEmploi ()
    // {
    //     return view('administration.partPages.prof.emploi_prof') ; 
    // }
    // public function profEmploiَAdd ()
    // {
    //     return view('administration.partPages.prof.ajout_emploi_prof') ; 
    // }
     
}
