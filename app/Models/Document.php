<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    // tbale name 
    protected $table = 'documents' ;
    // primary key 
    public $primaryKey = "id" ; 
}
