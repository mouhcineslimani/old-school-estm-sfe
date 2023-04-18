<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParcoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parcours', function (Blueprint $table) {
            $table->integer('id_parcours') ; 
            $table->date('annee') ; 
            $table->string('cycle',45) ; 
            $table->string('remarque',100) ; 
            $table->string('etudiants_cne',40) ; 
            $table->primary('id_parcours') ; 
            $table->foreign('etudiants_cne')->references('cne')->on('etudiants') ; 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parcours');
    }
}
