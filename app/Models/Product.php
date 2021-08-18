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
 * @property string $size
 * @property string $material
 * @package App\Models
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Category|null $category
 * @property-read \App\Models\Type|null $type
 * @method static \Illuminate\Database\Eloquent\Builder|Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product query()
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereArticle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereAvailability($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereImageUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product wherePreviewText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereMaterial($value)
 * @mixin \Eloquent
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
