<?php

namespace Database\Factories;

use App\Models\ProductPage;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductPageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProductPage::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_text' => $this->faker->sentence(10),
            'image' => 'https://picsum.photos/200/300?random=' .$this->faker->numberBetween($min = 1, $max = 75) ,
            'technologie_text' => $this->faker->sentence(10),
            'innovation_text' =>$this->faker->sentence(10),
        ];
    }
}
