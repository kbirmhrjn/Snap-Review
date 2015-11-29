<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBizFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biz_features', function (Blueprint $table) {
            $table->increments('id');
            $table->string('reservations')->nullable(); // true|false
            $table->string('takeout')->nullable(); // true|false
            $table->string('attire')->nullable(); // true|false
            $table->string('good_for_groups',10)->nullable();
            $table->json('parking')->nullable(); //street | yes|no
            $table->string('pool',10)->nullable(); // Yes|No Not sure
            $table->string('good_for_dancing',10)->nullable(); // Yes|No Not sure
            $table->string('alcohol',10)->nullable(); // Beer & wine only, Full Bar, No, Not sure
            $table->string('tv',10)->nullable(); // yes.no not sure
            $table->string('noise',10)->nullable(); // quiet, average, loud, very loud not sure
            $table->string('credit_cards',10)->nullable(); // yes|no Not sure
            $table->json('music')->nullable(); // DJ, Live, Juke Box, Music Videos, Background, Karaoke No
            $table->json('ambience')->nullable(); // Divey|Hipster|Casual|Touristy|Trendy|Intimate|Romantic|Classy|Upscale
            $table->string('outdoor_seating')->nullable();
            $table->string('per_person')->nullable(); //Under $10, $$11-$50 $$ 51-80 $$ Over 80
            $table->string('price_range')->nullable(); // Inexpensive|Moderate|Pricey|Ultry High-end
            $table->string('smoking')->nullable(); //Yes|No|Outdoors|Notsure
            $table->string('best_night')->nullable(); //Sun-Sat
            $table->string('waiter_service')->nullable();
            $table->string('caters')->nullable();
            $table->integer('business_id')->unsigned()->index();
            $table->foreign('business_id')->references('id')->on('business');
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
        Schema::drop('biz_features');
    }
}
