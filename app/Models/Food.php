<?php

namespace App\Models;

use DateTimeImmutable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property string $name
 * @property DateTimeImmutable $created_at
 * @property DateTimeImmutable $updated_at
 */
class Food extends Model
{
    use HasFactory;

    protected $table = 'foods';

    protected $fillable = [
        'name',
    ];

    public function animals(): BelongsTo
    {
        return $this->belongsTo(Animal::class);
    }

    public function foodsConsum(): BelongsTo
    {
        return $this->belongsTo(FoodConsum::class);
    }
}
