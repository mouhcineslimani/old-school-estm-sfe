<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->string('cne',40) ; 
            $table->string('nom_etudiant',45) ;
            $table->string('prenom_etudiant',45) ; 
            $table->string('tel_etudiant',45) ; 
            $table->string('cni_etudiant',45)->nullable() ; 
            $table->date('date_naissance') ; 
            $table->string('nom_pere',45)  ; 
            $table->string('prenom_pere',45) ; 
            $table->string('tel-pere',45) ; 
            $table->string('profession_pere',45) ; 
            $table->string('nom_classe',45) ; 
            $table->primary('cne') ; 
            $table->foreign('nom_classe')->references('nom_classe')->on('classes') ; 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etudiants');
    }
}
