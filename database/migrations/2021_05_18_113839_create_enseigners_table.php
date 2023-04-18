<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnseignersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enseigners', function (Blueprint $table) {
            $table->increments('id');
            $table->string("professeur_cni",30) ; 
            $table->string('matiere_ref_mat',10) ; 
            $table->string('nom_classe',45) ;  
            $table->foreign('professeur_cni')->references('cni')->on('professeurs') ; 
            $table->foreign('nom_classe')->references('nom_classe')->on('classes') ; 
            $table->foreign('matiere_ref_mat')->references('ref_mat')->on('matieres') ;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enseigners');
    }
}
