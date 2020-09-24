<?php

use Illuminate\Database\Seeder;

class ScholarshipsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('scholarships')->delete();

        $faker = Faker\Factory::create();

        for($i = 0; $i < 50; $i++) {
            \App\Models\Scholarship::create([
                'title' => $faker->word,
                'description' => $faker->sentences(5, true),
                'application_mode' => $faker->word,
                'is_active' => true,
            ]);
        }
    }
}
