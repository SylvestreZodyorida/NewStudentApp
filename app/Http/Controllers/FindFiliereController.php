<?php

namespace App\Http\Controllers;

use App\Models\Series;
use App\Models\Matieres;
use App\Models\Fillieres;
use Illuminate\Http\Request;
use App\Models\Fillieres_Series;
use App\Models\Fillieres_matieres;

class FindFiliereController extends Controller
{
    public function next_step(Request $request){
        $serie = Series::where('id', $request->serie)->first();
        $matieres = Matieres::where('id_serie', $request->serie)->get();
        return view('step2', compact('serie','matieres'));
    }

    public function proccess(Request $request){
        $serie = Series::where('id', $request->serie)->first();//trouver la série du bachelier
        $findFiliereBySeries = Fillieres_Series::where('id_serie', $serie->id)->get();//trouver les filieres qui prennent en compte la série

        dd($findFiliereBySeries);

        $resultat=[];//tableau contenant tous les résultats

        foreach ($findFiliereBySeries as $filiere) {
            $findFiliere = Fillieres::where('id', $filiere->id)->first();
            $findMatiereOfFilieres = Fillieres_matieres::where('id_filliere', $findFiliere->id)->get();

            $mi_moyenne = [];
            $totalMoyXcoef = 0;
            $totalCoef = 0;

            dd($findMatiereOfFilieres);

            foreach ($findMatiereOfFilieres as $matiere) {
                if (isset($request->{'note_' . $matiere->matiere})) {
                    $coef = $request->{'coef_' . $matiere->matiere};
                    $moyXcoef = $request->{'note_' . $matiere->matiere} * $coef;

                    $mi_moyenne[] = [
                        'matiere' => $matiere->matiere,
                        'coef' => $coef,
                        'moyXcoef' => $moyXcoef,
                    ];

                    // Calcul des totaux
                    $totalMoyXcoef += $moyXcoef;
                    $totalCoef += $coef;
                } else {
                    dd("errot");
                    return back()->with('error', 'La note pour la matière ' . $matiere->matiere . " n'est pas renseignée.");
                }
                // dd('ok');

            }

            // Calcul du résultat final en divisant la somme des moyXcoef par la somme des coefficients
           $resultatFinal =  $totalMoyXcoef / $totalCoef ;

            // dd($resultatFinal);

            $resultat = [
                'nom_filiere' => $findFiliere->Nom,
                'etablissement' => $findFiliere->Etablissement,
                'moyenne' => $resultatFinal,
            ];
        }
        dd($resultat);

        $matieres = Matieres::where('id_serie', $request->serie)->get();
        // dd($matieres);
        return view('step2', compact('serie','matieres'));
    }
}
