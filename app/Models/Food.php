<?php

namespace App\Models;

use DateTimeImmutable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property DateTimeImmutable $created_at
 * @property DateTimeImmutable $updated_at
 */
class Food extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];
}
