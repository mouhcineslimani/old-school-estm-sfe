<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfesseursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professeurs', function (Blueprint $table) {
            $table->string('cni',30);
            $table->primary('cni') ; 
 			$table->string('nom_prof',45);
 			$table->string('prenom_prof',45);
            $table->string('lieu_naissance',50);
            $table->date('date_naissance');
            $table->string('tel_prof',45);
            $table->date('date_arrivee');
            $table->string('specialiste',45);
           $table->string('adresse',45);   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('professeurs');
    }
}
