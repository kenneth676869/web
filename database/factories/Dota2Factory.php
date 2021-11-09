<?php

namespace Database\Factories;

use App\Models\Dota2;
use Illuminate\Database\Eloquent\Factories\Factory;

class Dota2Factory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Dota2::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
        'hero_type' => $this->faker->word,
        'hero_skills' => $this->faker->word,
        'rating' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
