<?php

use Illuminate\Database\Seeder;

class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->delete();

        $faker = Faker\Factory::create();

        for($i = 0; $i < 50; $i++) {
            \App\Models\Job::create([
                'title' => $faker->word,
                'description' => $faker->sentences(5, true),
                'application_mode' => $faker->word,
                'is_active' => true,
                'salary' => 23000,
                'state_id' => $faker->numberBetween(75,111)
            ]);
        }
    }
}
