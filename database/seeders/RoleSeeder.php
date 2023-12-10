<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
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
                'name' => 'Super Admin',
                'label' => 'Super Admin',
                'flag' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Manager',
                'label' => 'Manager',
                'flag' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Standard User',
                'label' => 'Standard User',
                'flag' => true,
                'created_at' => now(),
                'updated_at' => now()
            ]
            ];

            DB::table('roles')->insert($roles);
    }
}
