<?php

namespace Database\Factories;

use App\Models\Portfolio;
use Illuminate\Database\Eloquent\Factories\Factory;

class PortfolioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Portfolio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->name(),
            'image'=>$this->faker->image('public/img', 200, 200, 'cats', false),
            'categorie' => $this->faker->randomElement($array = array('Vieux', 'Jeune', 'Demi-vieux')),
            'description' => $this->faker->realText()
        ];
    }
}
