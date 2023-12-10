<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments = [
            [
                'name' => 'IT',
                'label' => 'IT',
                'flag' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'HR',
                'label' => 'HR',
                'flag' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Finance',
                'label' => 'Finance',
                'flag' => true,
                'created_at' => now(),
                'updated_at' => now()
            ]
            ];

            DB::table('departments')->insert($departments);
    }
}
