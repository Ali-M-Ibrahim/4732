<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{

    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'salutation'=>fake()->title(),
            'full_name'=>fake()->name(),
            'first_name'=>fake()->firstName(),
            'last_name'=>fake()->lastName(),
            'telephone'=>fake()->phoneNumber(),
            'email'=>fake()->safeEmail(),
             'address'=>fake()->address(),
            'salary'=>fake()->randomFloat()
        ];
    }
}
