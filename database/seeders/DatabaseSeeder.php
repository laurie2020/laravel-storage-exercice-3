<?php

namespace Database\Seeders;

use App\Models\Caracteristique;
use App\Models\Galerie;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::factory(50)->create();
        Portfolio::factory(50)->create();
        Caracteristique::factory(50)->create();
        Service::factory(50)->create();
        Galerie::factory(50)->create();
    }
}
