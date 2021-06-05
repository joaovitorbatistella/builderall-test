<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->foreignId('city_id');
            $table->timestamps();
        });
        Schema::table('client', function($table){
            $table->foreign('city_id')->references('id')->on('city')->onDelete('CASCADE');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('client', function($table)
        {
            $table->dropForeign(['client_city_id_foreign']);
        });
            Schema::dropIfExists('client');
    }
}