<?php

use Illuminate\Database\Seeder;
use GuzzleHttp\Client;

class CategorySeeder extends Seeder
{
    protected $categoryUrl = 'https://www.kimonolabs.com/api/e1gu9yv0?apikey=cQBrKjnK5fz9c0GBVnVm1Gv94s2vPZ8H'; // external url for categories
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $client = new Client();

        $body = $client->get($this->categoryUrl)->getBody();

        $response = json_decode($body);

        foreach($response->results->collection1 as $category)
        {
            factory('App\Category')->create(['title' => $category->categories, 'slug' => str_slug($category->categories)]);
        }
    }
}
