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

class Category extends Model
{
    protected $table = 'categories';
    protected $guarded = ['id'];
}
