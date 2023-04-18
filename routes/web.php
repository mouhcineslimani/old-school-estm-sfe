<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController ; 
use App\Http\Controllers\ProfesseurController ; 
use App\Http\Controllers\DiplomeController ; 
use App\Http\Controllers\CycleForController ; 
use App\Http\Controllers\Demande_absenceController ; 
use App\Http\Controllers\AbsenceProfesseurContoroller ;  
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// //--------------------- acceuil ----------------------------------------
Route::get('/home',[dashboardController::class,'index']) ; 
// //----------------------------------------------------------------------
//---------------------     Enseignants       --------------------------
 Route::get('enseignants/create','ProfesseurController@create');
Route::post('enseignants','ProfesseurController@store');
Route::get('enseignants/{cni}/edit','ProfesseurController@edit');
Route::put('enseignants/{cni}','ProfesseurController@update');
Route::delete('enseignants/{cni}','ProfesseurController@destroy'); 
Route::get('enseignants','ProfesseurController@index');
// //----------------------------------------------------------------------
//---------------------     Absence des Enseignants       -------------- 
Route::get('absences/create','AbsenceProfesseurContoroller@create');
Route::post('absences','AbsenceProfesseurContoroller@store');
Route::get('absences/{cni}/edit','AbsenceProfesseurContoroller@edit');
Route::put('absences/{id}','AbsenceProfesseurContoroller@update');
Route::delete('absences/{id}','AbsenceProfesseurContoroller@destroy'); 
Route::get('absences','AbsenceProfesseurContoroller@index'); 
//----------------------------------------------------------------------
// //---------------------     Seance prof       --------------------------
Route::get('seance','EmploiProfController@index');
Route::get('seance/create','EmploiProfController@create');
Route::post('seance','EmploiProfController@store');
Route::get('seance/{cni}/edit','EmploiProfController@edit');
Route::put('seance/{cni}','EmploiProfController@update');
Route::delete('seance/{cni}','EmploiProfController@destroy'); 
// //----------------------------------------------------------------------
//---------------------     diplomes prof       --------------------------
Route::get('diplomes','DiplomeController@index');
Route::get('diplomes/create','DiplomeController@create');
Route::post('diplomes','DiplomeController@store');
Route::get('diplomes/{cni}/edit','DiplomeController@edit');
Route::put('diplomes/{id}','DiplomeController@update'); 
Route::delete('diplomes/{cni}','DiplomeController@destroy'); 
//----------------------------------------------------------------------
//---------------------     cycles prof       --------------------------
Route::get('cycles','CycleForController@index');
Route::get('cycles/create','CycleForController@create');
Route::post('cycles','CycleForController@store');  
Route::put('cycles/{id}','CycleForController@update');
Route::delete('cycles/{id}','CycleForController@destroy'); 
//---------------------------------------------------------------------- 
//--------------------- demandes absences     --------------------------
Route::delete('demandes/{cni}','Demande_absenceController@destroy'); 
Route::get('/demandes','Demande_absenceController@index');
//----------------------------------------------------------------------
//--------------------- login ------------------------------------------  
Route::get('/substitution',function()
{
    return view('administration.partPages.prof.abs_subsit') ;
}) ; 
Route::get('/cartes',function()
{
    return view('administration.partPages.prof.cartes') ;
}) ; 


Route::get('/login',function()
{
    return view('pagescommunes.login') ;
}) ; 







//-------- les économistes 
Route::get('/economistes',function(){
    return view('administration.partPages.economistes.listesEco') ; 
}) ;
//------- lock screen 
Route::get('/administration/lockSession',function(){
    return view('administration.partPages.lockscreen') ; 
}) ;
//------- profile
Route::get('/profile',function(){
    return view('administration.partPages.profile') ; 
}) ;


// teachers routers 
Route::get('/enseignant',function(){
    return view('pagescommunes.login') ; 
}) ;