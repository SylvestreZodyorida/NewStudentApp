<?php

use App\Models\Series;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $series=Series::all();
    return view('welcome',compact('series'));
});
