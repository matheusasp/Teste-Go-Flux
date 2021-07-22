<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransportadorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transportador', function (Blueprint $table) {
            $table->uuid('id')->primary()->autoIncrement();
            $table->string('name');
            $table->string('doc');
            $table->string('about');
            $table->string('active');
            $table->string('site');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transportador');
    }
}
