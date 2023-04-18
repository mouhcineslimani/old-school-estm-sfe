<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsenceEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absence_etudiants', function (Blueprint $table) {
            $table->increments('id');
            $table->date('jour') ; 
            $table->time('debut') ; 
            $table->time('fin') ;  
            $table->string('cne',40) ; 
            $table->foreign('cne')->references('cne')->on('etudiants');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('absence_etudiants');
    }
}
