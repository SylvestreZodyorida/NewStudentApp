<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MatieresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('matieres')->insert([

            //svt
            ['Nom' => "SVT", 'Id_serie' => 1, 'Coefficient' => 2,],
            ['Nom' => "SVT", 'Id_serie' => 2, 'Coefficient' => 2,],
            ['Nom' => "SVT", 'Id_serie' => 3, 'Coefficient' => 2,],
            ['Nom' => "SVT", 'Id_serie' => 4, 'Coefficient' => 2,],
            ['Nom' => "SVT", 'Id_serie' => 5, 'Coefficient' => 5,],


             //pct
            ['Nom' => "PCT", 'Id_serie' => 4, 'Coefficient' => 5,],
            ['Nom' => "PCT", 'Id_serie' => 5, 'Coefficient' => 4,],

            //maths
            ['Nom' => "Maths", 'Id_serie' => 1, 'Coefficient' => 2,],
            ['Nom' => "Maths", 'Id_serie' => 2, 'Coefficient' => 2,],
            ['Nom' => "Maths", 'Id_serie' => 3, 'Coefficient' => 2,],
            ['Nom' => "Maths", 'Id_serie' => 4, 'Coefficient' => 6,],
            ['Nom' => "Maths", 'Id_serie' => 5, 'Coefficient' => 4,],

            //EPS
            ['Nom' => "EPS", 'Id_serie' => 1, 'Coefficient' => 1,],
            ['Nom' => "EPS", 'Id_serie' => 2, 'Coefficient' => 1,],
            ['Nom' => "EPS", 'Id_serie' => 3, 'Coefficient' => 1,],
            ['Nom' => "EPS", 'Id_serie' => 4, 'Coefficient' => 1,],
            ['Nom' => "EPS", 'Id_serie' => 5, 'Coefficient' => 1,],

            //Economie
            ['Nom' => "Economie", 'Id_serie' => 3, 'Coefficient' => 4,],

            //Hist-Géo
            ['Nom' => "Hist-Géo", 'Id_serie' => 1, 'Coefficient' => 3,],
            ['Nom' => "Hist-Géo", 'Id_serie' => 2, 'Coefficient' => 5,],
            ['Nom' => "Hist-Géo", 'Id_serie' => 3, 'Coefficient' => 4,],
            ['Nom' => "Hist-Géo", 'Id_serie' => 4, 'Coefficient' => 2,],
            ['Nom' => "Hist-Géo", 'Id_serie' => 5, 'Coefficient' => 2,],

            //Philosophie
            ['Nom' => "Philosophie", 'Id_serie' => 1, 'Coefficient' => 4,],
            ['Nom' => "Philosophie", 'Id_serie' => 2, 'Coefficient' => 3,],
            ['Nom' => "Philosophie", 'Id_serie' => 3, 'Coefficient' => 3,],
            ['Nom' => "Philosophie", 'Id_serie' => 4, 'Coefficient' => 2,],
            ['Nom' => "Philosophie", 'Id_serie' => 5, 'Coefficient' => 2,],

            //1ère Langue vivante (LV I)
            ['Nom' => "1ère Langue vivante (LV I)", 'Id_serie' => 1, 'Coefficient' => 3,],
            ['Nom' => "1ère Langue vivante (LV I)", 'Id_serie' => 2, 'Coefficient' => 3,],
            ['Nom' => "1ère Langue vivante (LV I)", 'Id_serie' => 3, 'Coefficient' => 2,],

            //2ème Langue vivante (LV II)
            ['Nom' => "2ème Langue vivante (LV II)", 'Id_serie' => 1, 'Coefficient' => 2,],
            ['Nom' => "2ème Langue vivante (LV II)", 'Id_serie' => 2, 'Coefficient' => 2,],
            ['Nom' => "2ème Langue vivante (LV II)", 'Id_serie' => 3, 'Coefficient' => 2,],

            //Anglais
            ['Nom' => "Anglais", 'Id_serie' => 4, 'Coefficient' => 2,],
            ['Nom' => "Anglais", 'Id_serie' => 5, 'Coefficient' => 2,],

            //Français
            ['Nom' => "Français", 'Id_serie' => 1, 'Coefficient' => 5,],
            ['Nom' => "Français", 'Id_serie' => 2, 'Coefficient' => 4,],
            ['Nom' => "Français", 'Id_serie' => 3, 'Coefficient' => 4,],
            ['Nom' => "Français", 'Id_serie' => 4, 'Coefficient' => 2,],
            ['Nom' => "Français", 'Id_serie' => 5, 'Coefficient' => 2,],

        ]);
    }
}
