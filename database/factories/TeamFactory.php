<?php

namespace Database\Factories;

use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeamFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Team::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'image'=>'https://picsum.photos/200/200?random=' .$this->faker->numberBetween($min = 1, $max = 75) ,
            'teammates'=>$this->faker->firstName,
            'job_title'=>$this->faker->jobTitle,
            'desc' =>$this->faker->sentence(5),
            'page_id'=>1

        ];
    }
}
