<?php

namespace App\Http\Controllers;
use App\Models\Professeur;
use App\Models\Demande_absence;
use App\Models\Abscence_professeur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB ;
class dashboardController extends Controller
{
    //
    function index ()
    {
        $nombre_f = Professeur::all();  
        $demande_abs =  Demande_absence::all() ; 
        $abs =  Abscence_professeur::all() ;  
        return view("administration.partPages.dashboard" , compact("nombre_f","demande_abs","abs")) ; 
     }
}
