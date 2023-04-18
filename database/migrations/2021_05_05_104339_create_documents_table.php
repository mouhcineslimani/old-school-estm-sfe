<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->integer('id') ; 
            $table->string('type_document' , 45) ; 
            $table->string('etat',45) ; 
            $table->string('etudiants_cne',45) ; 
            $table->primary('id') ; 
            $table->foreign('etudiants_cne')->references('cne')->on('etudiants') ;  
;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documents');
    }
}
