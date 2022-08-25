<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;


class AnioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('anios')->insert([
            'nombre' => "2018",
        ]);
        DB::table('anios')->insert([
            'nombre' => "2019",
        ]);
        DB::table('anios')->insert([
            'nombre' => "2020",
        ]);
        DB::table('anios')->insert([
            'nombre' => "2021",
        ]);
        DB::table('anios')->insert([
            'nombre' => "2022",
        ]);

    }
}
