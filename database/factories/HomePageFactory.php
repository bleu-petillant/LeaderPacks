<?php

namespace Database\Factories;

use App\Models\HomePage;
use Illuminate\Database\Eloquent\Factories\Factory;

class HomePageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = HomePage::class;
    

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'header_video' =>'https://www.youtube.com/embed/ISQKNR7lJgI',
            'header_text' =>$this->faker->sentence(10),
            'inovation_text' =>$this->faker->sentence(10),
            'first_number' =>$this->faker->numberBetween(1,9999),
            'second_number' =>$this->faker->numberBetween(1,9999),
            'third_number' =>$this->faker->numberBetween(1,9999),
            'about_text' =>$this->faker->sentence(10),
            'product_image' =>'https://picsum.photos/200/200?random=' .$this->faker->numberBetween($min = 1, $max = 75) ,
            'product_text' =>$this->faker->sentence(10),
        ];
    }
}
