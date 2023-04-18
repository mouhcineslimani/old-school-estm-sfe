<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmploiProfsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emploi_profs', function (Blueprint $table) {
            $table->integer('id');
            $table->primary('id');
            $table->string('niveau_scolaire',45);
            $table->time('heure_necessaire');
            $table->time('heure_semaine_realise');
            $table->time('heure_ajoutee');
            $table->string('professeur_cni',30);
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
        Schema::dropIfExists('emploi_profs');
    }
}
