<?php

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
            StatesTableSeeder::class,
            ServicesTableSeeder::class,
            JobsTableSeeder::class,
            ScholarshipsTableSeeder::class,
            PostsTableSeeder::class,
            UsersTableSeeder::class,
        ]);
    }
}
