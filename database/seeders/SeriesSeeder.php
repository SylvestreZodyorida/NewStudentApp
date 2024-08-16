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

            ['Nom' => "A1"],1
            ['Nom' => "A2"],2
            ['Nom' => "B"],3
            ['Nom' => "C"],4
            ['Nom' => "D"],5
            ['Nom' => "E"],6
            ['Nom' => "F1"],7
            ['Nom' => "F2"],8
            ['Nom' => "F3"],9
            ['Nom' => "F4"],10
            ['Nom' => "G1"],11
            ['Nom' => "G2"],12
            ['Nom' => "G3"],13
            ['Nom' => "Filière Eau et Assainissement"],14

        ]);
    }
}
