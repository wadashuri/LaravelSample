<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserTableSeeder::class,
            PostTableSeeder::class,
            CategoryTableSeeder::class,
            LikeTableSeeder::class,
          ]);
    }
}
