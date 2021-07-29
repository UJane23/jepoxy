<?php

namespace App\Models;

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
 * @property int $category_id
 * @property int $type_id
 * @property int $published
 * @property string $updated_ts
 * @property string $created_ts
 * @property int $price
 * @property string $preview_text
 *
 * @package App\Models
 */

class Product extends Model
{
    protected $table = 'products';
    protected $guarded = ['id'];

    public function category () {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    public function type () {
        return $this->hasOne(Type::class, 'id', 'type_id');
    }
}
