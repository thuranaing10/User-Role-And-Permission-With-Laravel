<?php

namespace Database\Factories;

use App\Models\Staff;
use Illuminate\Database\Eloquent\Factories\Factory;

class StaffFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Staff::class;

    public function definition()
    {
        return [
            'code' => $this->faker->randomNumber(),
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'mobile' => $this->faker->randomNumber(),
            'join_date' => $this->faker->date(),
            'department_id' => $this->faker->randomNumber(),
            'position' => $this->faker->word(),
            'age' => $this->faker->randomNumber(),
            'gender' => $this->faker->word(),
            'status' => true
        ];
    }
}
