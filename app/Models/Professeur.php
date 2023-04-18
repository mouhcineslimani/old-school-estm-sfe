<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professeur extends Model
{
    use HasFactory;
    // tbale name 
    protected $table = 'professeurs' ;
    // primary key 
    public $primaryKey = "cni" ; 
    public $incrementing = false;
    public $timestamps = false;
    public function diplome()
    {
        return $this->hasMany(Diplome::class, 'professeur_cni');
    }
    public function cycle_formation()
    {
        return $this->hasMany(Cycle_formation::class, 'professeur_cni');
    }
    public function absence()
    {
        return $this->hasMany(Abscence_professeur::class, 'cni') ;
    }
    public function deman_abs()
    {
        return $this->hasMany(Demande_absence::class, 'cni') ;
    }
    public function emploi_p()
    {
        return $this->hasMany(Emploi_prof::class, 'professeur_cni') ;
    }
 }
