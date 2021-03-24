<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RezervacijaForeign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rezervacija', function (Blueprint $table) {
            $table->unsignedbigInteger('gost_id')->unique();
            $table->foreign('gost_id')->references('id')->on('gost');
            $table->unsignedbigInteger('sto_id')->unique();
            $table->foreign('sto_id')->references('id')->on('sto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rezervacija', function (Blueprint $table) {
            $table->dropForeign(['gost_id']);
            $table->dropForeign(['sto_id']);
        });
    }
}
