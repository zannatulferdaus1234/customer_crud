<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    protected $model = Customer::class;

    public function definition()
    {
        return [
            'name'      => $this->faker->name(),
            'email'     => $this->faker->unique()->email(),
            'dob'       => $this->faker->dateTime('dob'),
            'city'      => $this->faker->city('city'),
            'country'   => $this->faker->country('country'),
            'status'    => '0',
            'password'  => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ];
    }
}
