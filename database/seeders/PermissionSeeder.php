<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            [
                'name' => 'View',
                'label' => 'View',
                'flag' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Create',
                'label' => 'Create',
                'flag' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Update',
                'label' => 'Update',
                'flag' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Delete',
                'label' => 'Delete',
                'flag' => true,
                'created_at' => now(),
                'updated_at' => now()
            ]
            ];

            DB::table('permissions')->insert($permissions);
    }
}
