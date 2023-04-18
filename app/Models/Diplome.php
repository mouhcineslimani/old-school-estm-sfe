<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diplome extends Model
{
    use HasFactory;
    
    // tbale name 
    protected $table = 'diplomes' ;
    // primary key 
    public $primaryKey = "id" ; 
    public $timestamps = false;
}
