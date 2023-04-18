<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandeAbsencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demande_absences', function (Blueprint $table) {
            $table->id();
            $table->string('genre',50);
            $table->string('cni',30);
            $table->date('debutAbs');
            $table->date('finAbs');
            $table->string('argument')->nullable();
            $table->foreign('cni')->references('cni')->on('professeurs') ; 
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('demande_absences');
    }
}
