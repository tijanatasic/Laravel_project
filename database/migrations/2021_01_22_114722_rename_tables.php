<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::rename('gosts', 'gost');
        Schema::rename('rezervacijas', 'rezervacija');
        Schema::rename('stos', 'sto');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::rename('rezervacija', 'rezervacijas');
        Schema::rename('gost', 'gosts');
        Schema::rename('sto', 'stos');
    }
}
