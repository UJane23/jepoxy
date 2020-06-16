<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 *
 * @property int $id
 * @property string $article
 * @property string $image_url
 * @property string $name
 * @property string $description
 * @property string $availability
 * @property string $category_id
 * @property string $type_id
 * @property int $published
 * @property string $updated_ts
 * @property string $created_ts
 *
 * @package App\Models
 */

class Product extends Model
{
    protected $table = 'products';
    protected $guarded = ['id'];
}
