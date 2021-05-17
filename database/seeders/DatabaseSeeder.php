<?php

namespace Database\Seeders;

use App\Models\Caracteristique;
use App\Models\Galerie;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User as AuthUser;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(25)->create();
        Portfolio::factory(25)->create();
        Caracteristique::factory(25)->create();
        Service::factory(25)->create();
        Galerie::factory(25)->create();
    }
}
