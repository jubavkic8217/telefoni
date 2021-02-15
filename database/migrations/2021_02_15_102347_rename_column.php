<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('stavkanarudzbine', function (Blueprint $table) {
            $table->renameColumn('telefon_id', 'telefon_identifikator');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('stavkanarudzbine', function (Blueprint $table) {
            $table->renameColumn('telefon_identifikator', 'telefon_id');
        });
    }
}
