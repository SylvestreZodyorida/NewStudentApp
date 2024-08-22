<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SeriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('series')->insert([

            ['Nom' => "A1"],
            ['Nom' => "A2"],
            ['Nom' => "B"],
            ['Nom' => "C"],
            ['Nom' => "D"],
            ['Nom' => "E"],
            ['Nom' => "F1"],
            ['Nom' => "F2"],
            ['Nom' => "F3"],
            ['Nom' => "F4"],
            ['Nom' => "G1"],
            ['Nom' => "G2"],
            ['Nom' => "G3"],
            ['Nom' => "Filière Eau et Assainissement"],

        ]);
    }
}
