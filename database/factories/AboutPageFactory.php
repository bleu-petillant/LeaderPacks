<?php

namespace Database\Factories;

use App\Models\AboutPage;
use Illuminate\Database\Eloquent\Factories\Factory;

class AboutPageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AboutPage::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'image' =>'https://picsum.photos/200/200?random=' .$this->faker->numberBetween($min = 1, $max = 75) ,
             'image_alt' =>'image',
            'spirit_text' =>$this->faker->sentence(10),
            'factory_text' =>$this->faker->sentence(10),
            'research_text' =>$this->faker->sentence(10),

   
        ];
    }
}
