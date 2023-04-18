<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSouhaitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('souhaits', function (Blueprint $table) {
            $table->integer('id') ; 
            $table->primary('id') ; 
            $table->string('nom_cycle_envie',50) ; 
            $table->string('professeur_cni',30) ; 
            $table->foreign('professeur_cni')->references('cni')->on('professeurs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('souhaits');
    }
}
