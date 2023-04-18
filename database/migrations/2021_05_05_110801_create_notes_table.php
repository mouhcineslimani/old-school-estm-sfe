<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->string('matiere_ref_mat',10);
            $table->string('etudiants_cne',40);
            $table->double('ds1');
            $table->double('ds2');
            $table->double('ds3');
            $table->double('note_activite');
            $table->string('remarque',45);
            $table->primary('matiere_ref_mat','etudiants_cne');
            $table->foreign('matiere_ref_mat')->references('ref_mat')->on('matieres');
            $table->foreign('etudiants_cne')->references('cne')->on('etudiants');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notes');
    }
}
