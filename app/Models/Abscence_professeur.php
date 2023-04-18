<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Professeur ; 

class Abscence_professeur extends Model
{
    use HasFactory;
    // tbale name 
    protected $table = "absence_professeurs" ;
    // primary key 
    public $primaryKey = "id" ;  
    public $timestamps = false;
    public function professeur()
    { 
        return $this->belongsTo(Professeur::class,'cni'); 
    }
}
