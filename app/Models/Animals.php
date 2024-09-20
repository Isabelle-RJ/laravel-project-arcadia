<?php

namespace App\Models;

use DateTimeImmutable;
use Illuminate\Database\Eloquent\Model;


/**
 * @property int $id
 * @property int $zoo_id
 * @property string $name
 * @property string $description
 * @property string $image
 * @property DateTimeImmutable $created_at
 * @property DateTimeImmutable $update_at
 */
class Animals extends Model
{

}
