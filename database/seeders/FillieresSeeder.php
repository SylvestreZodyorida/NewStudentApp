<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FillieresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('fillieres')->insert([

            ['Nom' => "Santé publique polyvalente",'Etablissement' => 'Institut Régional de Santé Publique (IRSP) -- UAC'],

            ['Nom' => "Géographie et Aménagement du Territoire",'Etablissement' => 'Faculté des Lettres, Arts et Sciences Humaines-Adjarra (FLASH-Adjarra) -- UAC'],

            ['Nom' => "Socio-Anthropologie",'Etablissement' => 'Faculté des Lettres, Arts et Sciences Humaines-Adjarra (FLASH-Adjarra) -- UAC'],

            ['Nom' => "Anglais",'Etablissement' => 'Faculté des Lettres, Arts et Sciences Humaines-Adjarra (FLASH-Adjarra) -- UAC'],

            ['Nom' => "Classes préparatoires Mathématiques, Physiques et Science de l’Ingénieur (MPSI) et Physique-Chimie et Science de l’Ingénieur (PCSI)",'Etablissement' => 'Institut de Mathématiques et de Sciences Physiques (IMSP) -- UAC'],

            ['Nom' => "Allemand",'Etablissement' => "Faculté des Lettres,Langues, Arts et Communications(FLLAC) -- UAC"],

            ['Nom' => "Anglais",'Etablissement' => "Faculté des Lettres,Langues, Arts et Communications(FLLAC) -- UAC"],

            ['Nom' => "Espagnol",'Etablissement' => "Faculté des Lettres,Langues, Arts et Communications(FLLAC) -- UAC"],

            ['Nom' => "Lettres Modernes",'Etablissement' => "Faculté des Lettres,Langues, Arts et Communications(FLLAC) -- UAC"],

            ['Nom' => "Sciences du Langage et de la Communication",'Etablissement' => "Faculté des Lettres,Langues, Arts et Communications(FLLAC) -- UAC"],

            ['Nom' => "Aministration Culturelle",'Etablissement' => "Institut National des Métiers d'Arts, d'Archéologie et de la Culture (INMAAC) -- UAC"],

        ]);
    }
}
