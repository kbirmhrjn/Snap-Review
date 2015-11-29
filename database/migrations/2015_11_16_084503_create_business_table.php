<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business', function(Blueprint $table){
            $table->increments('id');
            $table->string('title')->index();
            $table->text('history')->nullable();
            $table->string('address1')->index();
            $table->string('address2')->index()->nullable();
            $table->string('city')->index();
            $table->string('state')->nullable();
            $table->string('postal_code')->index();
            $table->string('zipcode')->index()->nullable();
            $table->string('phone');
            $table->string('website')->index()->nullable();
            $table->string('menu_website')->nullable();
            $table->json('hours')->nullable();
            $table->boolean('closed')->nullable(); // permanent
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
        Schema::drop('business');
    }
}
