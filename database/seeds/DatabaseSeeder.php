<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
         DB::table('top_level')->insert([
            ['desc' => 'Root A' , 'image' => "http://dreamatico.com/data_images/kitten/kitten-1.jpg" ],
            ['desc' => 'Root B' , 'image' => "http://cdn2-www.cattime.com/assets/uploads/2011/08/best-kitten-names-1.jpg" ]
        ]);

        DB::table('menu_items')->insert([
            ['route_desc' => 'Route 1', 'route_id' => 'route1', 'route_path' => '/route1', 'top_level_id' => 1],
            ['route_desc' => 'Route 2', 'route_id' => 'route2', 'route_path' => '/route2', 'top_level_id' => 1],
            ['route_desc' => 'Route 3', 'route_id' => 'route3', 'route_path' => '/route3', 'top_level_id' => 2],
            ['route_desc' => 'Route 4', 'route_id' => 'route4', 'route_path' => '/route4', 'top_level_id' => 2],
        ]);
    }
}
