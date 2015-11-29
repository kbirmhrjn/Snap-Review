<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    protected $tables = [
                            'business',
                            'reviews',
                            'users',
                            'categories',

                    ] ;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Model::unguard();
        $this->truncateTables();
        $this->call(CategorySeeder::class);
        $this->call(CitySeeder::class);
        $this->call(UserSeeder::class);

        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        Model::reguard();
    }

    public function truncateTables()
    {
        foreach ($this->tables as $table) {
            DB::table($table)->truncate();
        }
    }
}
