<?php

namespace App\Models;

use DateTimeImmutable;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $description
 * @property DateTimeImmutable $created_at
 * @property DateTimeImmutable $update_at
 */
class Zoo extends Model
{
    /**
     * @var string
     */
    protected $table = 'zoo';

    protected $fillable = [
        'name',
        'description',
    ];
}
