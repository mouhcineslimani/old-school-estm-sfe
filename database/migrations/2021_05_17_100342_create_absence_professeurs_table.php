<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsenceProfesseursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absence_professeurs', function (Blueprint $table) {
            $table->increments('id');
            $table->date('jour') ; 
            $table->time('debut') ; 
            $table->time('fin') ; 
            $table->string('comments',255) ; 
            $table->string('cni',30);
            $table->foreign('cni')->references('cni')->on('professeurs');        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('absence_professeurs');
    }
}

