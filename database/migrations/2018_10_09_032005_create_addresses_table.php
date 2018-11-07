<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('client_id')->unsigned()->nullable();
            $table->integer('country_id')->unsigned();
            $table->integer('city_id')->unsigned();

            $table->string('name', 128)->nullable();

            $table->string('address_1');//urbanización-sector 
            $table->string('address_2');//avenida-calle
            $table->string('edifice');//edificio
            $table->string('floor');
            $table->string('office');
            $table->string('pto_reference');
            $table->string('number_phone');
            $table->string('number_fax');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
