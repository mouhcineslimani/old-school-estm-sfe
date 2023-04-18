<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCycleFormationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cycle_formations', function (Blueprint $table) {
            $table->increments('id'); 
            $table->date('annee_formation') ; 
            $table->string('regulateur') ; 
            $table->string('nom_formation') ;
            $table->string('professeur_cni',30) ; 
            $table->foreign('professeur_cni')->references('cni')->on('professeurs')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cycle_formations');
    }
}
