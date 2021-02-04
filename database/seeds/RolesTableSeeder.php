<?php

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'id' => 1,
                'name' => 'Super Admin',
                'hierachy' => 10,
            ],
            [
                'id' => 2,
                'name' => 'Admin',
                'hierachy' => 9,
            ],
            [
                'id' => 3,
                'name' => 'Staff',
                'hierachy' => 8,
            ],
        ];

        foreach($roles as $role){
            Role::updateOrCreate([
                'id' => $role['id'],
                'name' => $role['name'],
            ], $role);
        }
    }
}
