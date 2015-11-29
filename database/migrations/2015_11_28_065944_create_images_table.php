<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('caption')->nullable();
            $table->string('path');
            $table->string('thumbnail_path');
            $table->string('imageable_type')->index();
            $table->integer('imageable_id')->unsigned()->index();
            $table->string('type')->nullable(); // gallery|cover|profile
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
        Schema::drop('images');
    }
}
