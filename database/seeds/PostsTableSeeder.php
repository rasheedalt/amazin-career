<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->delete();

        $faker = Faker\Factory::create();

        for($i = 0; $i < 20; $i++) {
            \App\Models\Post::create([
                'title' => $faker->word,
                'body' => $faker->sentences(5, true),
                'user_id' => 1,
            ]);
        }
    }
}
