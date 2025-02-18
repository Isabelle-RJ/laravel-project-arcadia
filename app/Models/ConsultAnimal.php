<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class ConsultAnimal extends Model
{
 use HasFactory;

    protected $fillable = [
        'consult_id',
        'animal_id',
        'nb_view',
        'created_at',
        'updated_at',
    ];
}
