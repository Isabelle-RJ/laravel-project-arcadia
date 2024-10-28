<?php

namespace App\Models;

use DateTimeImmutable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property string $animal_state
 * @property string $content
 * @property int $user_id
 * @property DateTimeImmutable $created_at
 * @property DateTimeImmutable $updated_at
 */
class VeterinarianReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'animal_state',
        'content',
        'user_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function animal(): BelongsTo
    {
        return $this->belongsTo(Animal::class);
    }
}
