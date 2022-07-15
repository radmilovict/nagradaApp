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
        Schema::table('nagradas', function (Blueprint $table) {
            $table->renameColumn('kategorija','kategorijaNominacije');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('nagradas', function (Blueprint $table) {
            $table->renameColumn('kategorijaNominacije','kategorija');
        });
    }
};
