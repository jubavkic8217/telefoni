<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTelefon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telefons', function (Blueprint $table) {
            $table->id();
            $table->string('model');
            $table->string('slika');
            $table->string('procesor');
            $table->integer('cena');
            $table->string('ram');
            $table->string('kamera');
            $table->string('baterija');
            $table->string('memorija');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('telefons');
    }
}
