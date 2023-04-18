<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnImageProfesseurs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('professeurs', function (Blueprint $table) {
            //
            $table->string('image')->nullable()->after('adresse') ; 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('professeurs', function (Blueprint $table) {
            //
            $table->dropColumn('image') ; 
        });
    }
}
