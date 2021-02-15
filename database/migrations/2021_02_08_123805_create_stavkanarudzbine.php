<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStavkanarudzbine extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stavkanarudzbines', function (Blueprint $table) {
            $table->foreignId('narudzbina_id')->constrained('narudzbinas');
            $table->foreignId('telefon_id')->constrained('telefons');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stavkanarudzbines');
    }
}
