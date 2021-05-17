<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->lastName(),
            'prenom' => $this->faker->firstName(),
            'age' => $this->faker->numberBetween(0, 100),
            'email' => $this->faker->email(),
            'password' => $this->faker->password(),
            'photo' => $this->faker->image('public/img', 200, 200, 'cats', false)
        ];
    }
}
