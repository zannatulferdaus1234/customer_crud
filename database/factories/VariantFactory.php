<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class VariantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {


        return [
            'product_id'=> Product::factory(),

            'gender'    => 'male',
            'color'     => $this->faker->colorName(),
            'size'      => 'medium',
            'price'      => '100',

        ];
    }
}
