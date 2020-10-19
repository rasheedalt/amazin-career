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
                'display_name' => 'Business Plan',
                'description' => "A business plan is a written description of your business's future, a document that tells what you plan to do and how you plan to do it. If you jot down a paragraph on the back of an envelope describing your business strategy, you've written a plan, or at least the germ of one. Amazin Careers got you covered for a well detailed business plan.",
            ],
            [
                'name' => 'company_registration',
                'display_name' => 'Company Registration',
                'description' => "A company is a corporate structure with separate legal personality status. It is statutorily regulated and incorporated for the purpose of profit maximization. All companies, whether a private company limited by shares, private unlimited or a company limited by guarantee must be registered in accordance with the Companies and Allied Matters Act (CAMA), which is the principal law that regulates companies in Nigeria. Let Amazin Careers take you through the process involved."
            ],
            [
                'name' => 'cover_letters',
                'display_name' => 'Cover Letters',
                'description' => "At Amazin career we have believe and experienced that Cover letters can be daunting, but they become simple when you break them down into three parts. Make an appointment with us to improve your cover letter though our professionalism in crafting a better cover letter for your dream job position in any career area in the industry."
            ],
            [   
                'name' => 'CV_reviews',
                'display_name' => 'CV Reviews',
                'description' => "Landing a new job is like a game and it’s being played all around you. Our Expert CV Consultants have helped over 1000 professionals and jobseekers get new jobs by just working on their CV. You don't know how many opportunities you miss out on because of your CV."
            ],
            [
                'name' => 'linkedIn_optimization',
                'display_name' => 'LinkedIn Optimization',
                'description' => "LinkedIn now has over 500 million members worldwide; it is the pond that recruiter’s fish for talent and is an essential networking/job hunting tool. It also presents your personal brand and professional footprint to the outside world and poses an opportunity and risk in equal measures."
            ],
        ];

        foreach($services as $service){
            \App\Models\Service::updateOrCreate([
                'name' => $service['name'],
                'display_name' => $service['display_name'],
            ], $service);
        }
    }
}
