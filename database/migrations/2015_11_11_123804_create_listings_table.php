<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('address');
            $table->string('cross_street');
            $table->string('square_feet');
            $table->string('price');
            $table->string('deposit_price');
            $table->string('last_price');
            $table->string('type_of_dwelling');
            $table->string('lease');
            $table->string('bedroom');
            $table->string('bathroom');
            $table->string('carport');
            $table->string('garage');
            $table->string('furnished');
            $table->string('pets');
            $table->string('features');
            $table->string('schools');
            $table->string('photos');
            $table->string('map');
            $table->string('description');
            $table->string('owner_name');
            $table->string('contact_number');
            $table->string('file');
            $table->string('status');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('listings');
    }
}
