<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fillieres_Series extends Model
{
    use HasFactory;
    protected $fillable= [
        "id_filliere",
        "id_serie",
    ];
}
