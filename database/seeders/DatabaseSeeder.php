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
        $this->call(AnioSeeder::class);
        $this->call(ModeloSeeder::class);
        $this->call(MarcaSeeder::class);
    }
}
