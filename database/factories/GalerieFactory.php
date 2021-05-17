<?php

namespace Database\Factories;

use App\Models\Galerie;
use Illuminate\Database\Eloquent\Factories\Factory;

class GalerieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Galerie::class;

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
            'description' => $this->faker->realText()
        ];
    }
}
