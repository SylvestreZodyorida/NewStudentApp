<?php

namespace App\Http\Controllers;

use App\Models\Series;
use App\Models\Matieres;
use Illuminate\Http\Request;

class FindFiliereController extends Controller
{
    public function next_step(Request $request){
        $serie = Series::where('id', $request->serie)->first();
        $matieres = Matieres::where('id_serie', $request->serie)->get();
        return view('step2', compact('serie','matieres'));
    }

    public function proccess(Request $request){
        dd($request);
        $serie = Series::where('id', $request->serie)->first();
        $matieres = Matieres::where('id_serie', $request->serie)->get();
        // dd($matieres);
        return view('step2', compact('serie','matieres'));
    }
}
