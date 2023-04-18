<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEchangesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('echanges', function (Blueprint $table) {
            $table->integer('id') ; 
            $table->primary('id') ; 
            $table->string('description',100) ; 
            $table->double('prix') ; 
            $table->string('economistes_cni',30) ; 
            $table->foreign('economistes_cni')->references('cni')->on('economistes') ; 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('echanges');
    }
}
