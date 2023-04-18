<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEconomistesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('economistes', function (Blueprint $table) {
            $table->string('cni',30);
            $table->primary('cni');
            $table->string('nom_economiste',45);
            $table->string('prenom_econmiste',45);
            $table->date('date_naissance');
            $table->string('lieu_naissance',45);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('economistes');
    }
}
