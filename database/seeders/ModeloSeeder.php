<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;


class ModeloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modelos')->insert([
            'nombre' => "A4",
        ]);
        DB::table('modelos')->insert([
            'nombre' => "Frontier",
        ]);
        DB::table('modelos')->insert([
            'nombre' => "Pick up",
        ]);
        DB::table('modelos')->insert([
            'nombre' => "Civic",
        ]);
        DB::table('modelos')->insert([
            'nombre' => "Jetta",
        ]);
    }
}
