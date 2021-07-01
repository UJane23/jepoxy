<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Type
 *
 * @property int $id
 * @property string $name
 * @property string $updated_ts
 * @property string $created_ts
 * @package App\Models
 */

class Type extends Model
{
    protected $table = 'types';
    protected $guarded = ['id'];
}
