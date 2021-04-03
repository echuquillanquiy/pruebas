<?php

namespace Database\Factories;

use App\Models\Apellidos;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ApellidosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Apellidos::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'lastname' => $this->faker->lastName,
            'user_id' => function() {
                return User::factory()->create()->id;
            }
        ];
    }
}
