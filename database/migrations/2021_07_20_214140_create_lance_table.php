<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lance', function (Blueprint $table) {
            $table->uuid("id")->primary()->autoIncrement();
            $table->uuid("id_provider");
            $table->uuid("id_offer");
            $table->double("value");
            $table->double("amount");

            $table->foreign( 'id_provider' )->references( 'id' )->on( 'transportador' );
            $table->foreign( 'id_offer' )->references( 'id' )->on( 'ofertas' );
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lance');
    }
}
