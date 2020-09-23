<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = [
            [
                'name' => 'write_business_plan',
                'display_name' => 'Business Plan'
            ],
            [
                'name' => 'company_registration',
                'display_name' => 'Company Registration',
            ],
            [
                'name' => 'cover_letters',
                'display_name' => 'Cover Letters',
            ],
            [   
                'name' => 'CV_reviews',
                'display_name' => 'CV Reviews',
            ],
            [
                'name' => 'linkedIn_optimization',
                'display_name' => 'LinkedIn Optimization',
            ],
        ];

        foreach($services as $service){
            \App\Models\Service::updateOrCreate([
                'name' => $service['name'],
                'display_name' => $service['display_name'],
            ]);
        }
    }
}
