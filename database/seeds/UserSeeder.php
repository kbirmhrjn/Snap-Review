<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the User Seeder with Businesses associated with users
     *
     * @return void
     */
    public function run()
    {
        factory('App\User', 50)->create()->each(function($u) {

            $business = factory('App\Business')->create();

            $reviews = factory('App\Review')->create(['user_id' => $u->id]);

            $business->reviews()->save($reviews);

            $u->business()->attach($business, ['role' => 'manager']);
        });
    }
}
