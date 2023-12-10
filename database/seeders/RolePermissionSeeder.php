<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_permissions = [
            [
                'permission_id' => '1',
                'role_id' => '1',
                'flag' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'permission_id' => '2',
                'role_id' => '1',
                'flag' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'permission_id' => '3',
                'role_id' => '1',
                'flag' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'permission_id' => '4',
                'role_id' => '1',
                'flag' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'permission_id' => '1',
                'role_id' => '2',
                'flag' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'permission_id' => '2',
                'role_id' => '2',
                'flag' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'permission_id' => '3',
                'role_id' => '2',
                'flag' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'permission_id' => '4',
                'role_id' => '2',
                'flag' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'permission_id' => '1',
                'role_id' => '3',
                'flag' => true,
                'created_at' => now(),
                'updated_at' => now()
            ]
            ];

            DB::table('role_permissions')->insert($role_permissions);
    }
}
