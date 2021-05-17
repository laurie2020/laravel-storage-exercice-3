<?php

namespace Database\Factories;

use App\Models\Caracteristique;
use Illuminate\Database\Eloquent\Factories\Factory;

class CaracteristiqueFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Caracteristique::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'icone' => $this->faker->randomElement($array=array('fas fa-snowman', 'fas fa-toilet-paper', 'fas fa-hat-wizard', 'fas fa-hippo', 'fas fa-glass-martini-alt', 'fas fa-poo', 'fas fa-hat-cowboy-side', 'fas fa-laptop-code', 'fas fa-car-crash', 'fas fa-undo')),
            'chiffre'=> random_int(0, 1000),
            'nom' => $this->faker->name()
        ];
    }
}
