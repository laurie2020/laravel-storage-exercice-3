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
            'icone' => $this->faker->randomElement($array = array("fa-facebook-f", 'fab fa-twitter', 'fa-youtube', 'fab fa-amazon', 'fab fa-google', 'fab fa-firefox', 'fab fa-safari', "fab fa-wifi", "fab fa-internet-explorer", 'fab fa-chrome')),
            'chiffre'=> random_int(0, 1000),
            'nom' => $this->faker->name()
        ];
    }
}
