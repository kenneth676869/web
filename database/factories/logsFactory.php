<?php

namespace Database\Factories;

use App\Models\logs;
use Illuminate\Database\Eloquent\Factories\Factory;

class logsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = logs::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'userid' => $this->faker->word,
        'log' => $this->faker->word,
        'logdetails' => $this->faker->word,
        'logtype' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
