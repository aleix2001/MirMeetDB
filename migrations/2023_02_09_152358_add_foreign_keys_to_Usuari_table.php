<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Usuari', function (Blueprint $table) {
            $table->foreign(['Id_Tipus_Usuari'], 'Usuari_ibfk_1')->references(['Id'])->on('TipusUsuari')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Usuari', function (Blueprint $table) {
            $table->dropForeign('Usuari_ibfk_1');
        });
    }
};