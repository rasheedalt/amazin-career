<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'firstname' => 'Raji',
                'lastname' => 'Rasheed',
                'email' => 'rrasheedalt@gmail.com',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'
            ],
            [
                'firstname' => 'Admin',
                'lastname' => 'Test',
                'email' => 'admin@test.com',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'
            ],
        ];

        foreach($users as $user){
            \App\Models\User::updateOrCreate(['email' => $user['email'] ],$user);
        }
    }
}
