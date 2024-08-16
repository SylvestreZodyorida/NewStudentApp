<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Matieres extends Model
{
    use HasFactory;
    protected $fillable= [
        "Nom",
        "id_serie",
        "Coefficient",
    ];
}
