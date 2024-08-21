<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FillieresMatieresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('fillieres_matieeres')->insert([

            ['id_filliere' => 1, "matiere" =>"SVT" ],
            ['id_filliere' => 1, "matiere" =>"PCT" ],
            ['id_filliere' => 1, "matiere" =>"Maths" ],

            ['id_filliere' => 2, "matiere" =>"Français" ],
            ['id_filliere' => 2, "matiere" =>"Hist-Géo" ],
            ['id_filliere' => 2, "matiere" =>"Maths" ],
            ['id_filliere' => 2, "matiere" =>"Anglais" ],

            ['id_filliere' => 3, "matiere" =>"Français" ],
            ['id_filliere' => 3, "matiere" =>"Hist-Géo" ],
            ['id_filliere' => 3, "matiere" =>"Maths" ],
            ['id_filliere' => 3, "matiere" =>"Anglais" ],

            ['id_filliere' => 4, "matiere" =>"Français" ],
            ['id_filliere' => 4, "matiere" =>"Hist-Géo" ],
            ['id_filliere' => 4, "matiere" =>"Anglais" ],

            ['id_filliere' => 5, "matiere" =>"Français" ],
            ['id_filliere' => 5, "matiere" =>"Maths" ],
            ['id_filliere' => 5, "matiere" =>"PCT" ],

            ['id_filliere' => 6, "matiere" =>"1ère Langue vivante (LV I)" ],
            ['id_filliere' => 6, "matiere" =>"2ème Langue vivante (LV II)" ],
            ['id_filliere' => 6, "matiere" =>"Français" ],
            ['id_filliere' => 6, "matiere" =>"Hist-Géo" ],

            ['id_filliere' => 7, "matiere" =>"1ère Langue vivante (LV I)" ],
            ['id_filliere' => 7, "matiere" =>"Hist-Géo" ],
            ['id_filliere' => 7, "matiere" =>"Français" ],

            ['id_filliere' => 8, "matiere" =>"1ère Langue vivante (LV I)" ],
            ['id_filliere' => 8, "matiere" =>"2ème Langue vivante (LV II)" ],
            ['id_filliere' => 8, "matiere" =>"Français" ],
            ['id_filliere' => 8, "matiere" =>"Hist-Géo" ],

            ['id_filliere' => 9, "matiere" =>"Français" ],
            ['id_filliere' => 9, "matiere" =>"Philosophie" ],
            ['id_filliere' => 9, "matiere" =>"1ère Langue vivante (LV I)" ],

            ['id_filliere' => 10, "matiere" =>"Français" ],
            ['id_filliere' => 10, "matiere" =>"1ère Langue vivante (LV I)" ],
            ['id_filliere' => 10, "matiere" =>"Philosophie" ],
            // ['id_filliere' => 10, "matiere" =>"Etude de cas" ],

            ['id_filliere' => 10, "matiere" =>"Français" ],
            ['id_filliere' => 10, "matiere" =>"Hist-Géo" ],
            ['id_filliere' => 10, "matiere" =>"Philosophie" ],
        ]);
    }
}
