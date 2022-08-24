<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('marcas')->insert([
            'nombre' => "AUDI",
        ]);
        DB::table('marcas')->insert([
            'nombre' => "BMW",
        ]);
        DB::table('marcas')->insert([
            'nombre' => "NISSAN",
        ]);
        DB::table('marcas')->insert([
            'nombre' => "HONDA",
        ]);
        DB::table('marcas')->insert([
            'nombre' => "MAZDA",
        ]);
    }
}
