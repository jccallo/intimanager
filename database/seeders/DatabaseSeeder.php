<?php

namespace Database\Seeders;

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

        \App\Models\Place::factory(5)->create();

        \App\Models\User::factory(35)->create();

        \App\Models\Friend::factory(10)->create();
        \App\Models\Career::factory(10)->create();
        \App\Models\liability::factory(10)->create();
    }
}
