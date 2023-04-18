<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emploi_prof extends Model
{
    use HasFactory;
    // tbale name 
    protected $table = 'emploi_profs' ;
    // primary key 
    public $primaryKey = "id" ; 
    public $timestamps = false;
}
