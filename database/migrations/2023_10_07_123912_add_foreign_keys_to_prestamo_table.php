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
        Schema::table('prestamo', function (Blueprint $table) {
            $table->foreign(['idlibro'], 'prestamo_ibfk_1')->references(['id'])->on('libro');
            $table->foreign(['idalumno'], 'prestamo_ibfk_3')->references(['id'])->on('alumno');
            $table->foreign(['idempleado'], 'prestamo_ibfk_2')->references(['id'])->on('empleado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('prestamo', function (Blueprint $table) {
            $table->dropForeign('prestamo_ibfk_1');
            $table->dropForeign('prestamo_ibfk_3');
            $table->dropForeign('prestamo_ibfk_2');
        });
    }
};
