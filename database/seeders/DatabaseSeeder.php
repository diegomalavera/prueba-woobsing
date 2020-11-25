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
        \App\Models\Rols::create([
            'name' => 'Rol 1'
        ]);

        \App\Models\Rols::create([
            'name' => 'Rol 2'
        ]);
    }
}
