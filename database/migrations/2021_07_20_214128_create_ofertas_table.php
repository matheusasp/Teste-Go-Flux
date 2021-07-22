<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ofertas', function (Blueprint $table) {
            $table->uuid('id')->primary()->autoIncrement();
            $table->uuid('id_customer');
            $table->string("from");
            $table->string("to");
            $table->double("initial_value");
            $table->double("amount");
            $table->string("amount_type");

            $table->foreign( 'id_customer' )->references( 'id' )->on( 'cliente' );
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ofertas');
    }
}
