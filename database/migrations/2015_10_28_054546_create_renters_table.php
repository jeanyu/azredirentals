<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('renters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('services_in_city');
            $table->string('preferred_bedroom');
            $table->string('current_address');
            $table->string('city');
            $table->string('state');
            $table->string('zip_code');
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('password', 60);
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
        Schema::drop('renters');
    }
}
