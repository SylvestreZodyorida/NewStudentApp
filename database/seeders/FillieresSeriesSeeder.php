<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FillieresSeriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('fillieres__series')->insert([

            ['id_filliere' => 1, 'id_serie' => 4 ],
            ['id_filliere' => 1, 'id_serie' => 5 ],

            ['id_filliere' => 2, 'id_serie' => 1 ],
            ['id_filliere' => 2, 'id_serie' => 2 ],
            ['id_filliere' => 2, 'id_serie' => 3 ],
            ['id_filliere' => 2, 'id_serie' => 4 ],
            ['id_filliere' => 2, 'id_serie' => 5 ],//séries manquantes : DEAT et DT/STI


            ['id_filliere' => 3, 'id_serie' => 1 ],
            ['id_filliere' => 3, 'id_serie' => 2 ],
            ['id_filliere' => 3, 'id_serie' => 3 ],
            ['id_filliere' => 3, 'id_serie' => 4 ],
            ['id_filliere' => 3, 'id_serie' => 5 ],//séries manquantes : DEAT et DT/STI

            ['id_filliere' => 4, 'id_serie' => 1 ],
            ['id_filliere' => 4, 'id_serie' => 2 ],
            ['id_filliere' => 4, 'id_serie' => 3 ],
            ['id_filliere' => 4, 'id_serie' => 4 ],
            ['id_filliere' => 4, 'id_serie' => 5 ],//séries manquantes : DEAT et DT/STI


            ['id_filliere' =>5, 'id_serie' => 4 ],
            ['id_filliere' =>5, 'id_serie' => 5 ],
            ['id_filliere' =>5, 'id_serie' =>  6], //E
            ['id_filliere' =>5, 'id_serie' => 7], //
            ['id_filliere' =>5, 'id_serie' => 8], //
            ['id_filliere' =>5, 'id_serie' => 9], //
            ['id_filliere' =>5, 'id_serie' => 10], //

            ['id_filliere' => 6, 'id_serie' => 1 ],
            ['id_filliere' => 6, 'id_serie' => 2 ],
            ['id_filliere' => 6, 'id_serie' => 3 ],

            ['id_filliere' => 7, 'id_serie' => 1 ],
            ['id_filliere' => 7, 'id_serie' => 2 ],
            ['id_filliere' => 7, 'id_serie' => 3 ],
            ['id_filliere' => 7, 'id_serie' => 4 ],
            ['id_filliere' => 7, 'id_serie' => 5 ],

            ['id_filliere' => 8, 'id_serie' => 1 ],
            ['id_filliere' => 8, 'id_serie' => 2 ],
            ['id_filliere' => 8, 'id_serie' => 3 ],

            ['id_filliere' => 9, 'id_serie' => 1 ],
            ['id_filliere' => 9, 'id_serie' => 2 ],
            ['id_filliere' => 9, 'id_serie' => 3 ],
            ['id_filliere' => 9, 'id_serie' => 4 ],
            ['id_filliere' => 9, 'id_serie' => 5 ],

            ['id_filliere' => 10, 'id_serie' => 1 ],
            ['id_filliere' => 10, 'id_serie' => 2 ],
            ['id_filliere' => 10, 'id_serie' => 3 ],
            ['id_filliere' => 10, 'id_serie' => 4 ],
            ['id_filliere' => 10, 'id_serie' => 5 ],
            ['id_filliere' => 10, 'id_serie' => 11 ],
            ['id_filliere' => 10, 'id_serie' => 13 ],

            ['id_filliere' => 11, 'id_serie' => 1 ],
            ['id_filliere' => 11, 'id_serie' => 2 ],
            ['id_filliere' => 11, 'id_serie' => 3 ],
            ['id_filliere' => 11, 'id_serie' => 4 ],
            ['id_filliere' => 11, 'id_serie' => 5 ],

        ]);
    }
}
