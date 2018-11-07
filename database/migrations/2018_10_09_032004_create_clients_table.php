<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('sector_id')->unsigned();
            $table->integer('branch_id')->unsigned();
            $table->integer('origin_id')->unsigned();
            
            $table->string('name');
            $table->string('cod_rif', 128)->unique();
            $table->enum('type', ['CORPORATIVO', 'REGULAR']);
            $table->enum('nacionality', ['NACIONAL', 'EXTRANJERO']);
            $table->enum('exempt_ob', ['SI', 'NO']);
            $table->string('comercial_name');
            $table->string('business_group');
            $table->string('years_op');

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
        Schema::dropIfExists('clients');
    }
}
