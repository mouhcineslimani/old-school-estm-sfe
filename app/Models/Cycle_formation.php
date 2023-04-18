<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cycle_formation extends Model
{
    use HasFactory;
    
    // tbale name 
    protected $table = 'Cycle_formations' ;
    // primary key 
    public $primaryKey = "id" ; 
    public $timestamps = false;
}
