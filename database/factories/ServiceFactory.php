<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Service::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'icone' => $this->faker->randomElement($array = array("fa-facebook-f", 'fab fa-twitter', 'fa-youtube', 'fab fa-amazon', 'fab fa-google', 'fab fa-firefox', 'fab fa-safari', "fab fa-wifi", "fab fa-internet-explorer", 'fab fa-chrome')),
            'titre' => $this->faker->jobTitle,
            'description' => $this->faker->realText(),
        ];
    }
}
