<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->string('gender');
            $table->text('hometown');
            $table->string('nickname')->nullable();
            $table->string('find_me')->nullable();
            $table->string('title')->nullable();
            $table->text('about_me')->nullable();
            $table->text('website')->nullable();
            $table->string('not_reviewing')->nullable();
            $table->string('reviews')->nullable();
            $table->string('book')->nullable();
            $table->string('concert')->nullable();
            $table->string('movie')->nullable();
            $table->string('last_meal')->nullable();
            $table->string('recent_discovery')->nullable();
            $table->string('current_crush')->nullable();
            $table->string('primary_locale')->default('en_US');
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
