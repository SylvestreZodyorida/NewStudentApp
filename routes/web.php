<?php

use App\Models\Series;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FindFiliereController;

Route::get('/', function () {

    $series=Series::all();
    return view('welcome',compact('series'));
});

Route::post("/next_step", [FindFiliereController::class, "next_step"])->name("next_step");
Route::post("/process", [FindFiliereController::class, "proccess"])->name("proccess");
