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
 *
 * @package App\Models
 */

class Product extends Model
{
    const CATEGORIES_MAP = [
        1 => 'Аксессуары для волос',
        2 => 'Игрушки',
        3 => 'Мобили',
        4 => 'Аксессуары Эпоксидная Смола',
        5 => 'Украшения Эпоксидная Смола',
    ];

    const TYPES_MAP = [
        1 => 'Брелки',
        2 => 'Броши',
        3 => 'Бусины',
        4 => 'Гребни',
        5 => 'Заколки',
        6 => 'Кольца',
        7 => 'Комплекты',
        8 => 'Кулоны',
        9 => 'Маленькие игрушки',
        10 => 'Ободки',
        11 => 'Повязка',
        12 => 'Подставки',
        13 => 'Пуговицы',
        14 => 'Резинки',
        15 => 'Расчески',
        16 => 'Серьги',
        17 => 'Шкатулки',
    ];

    protected $table = 'products';
    protected $guarded = ['id'];

    public function getCategoryName(): string {
        return self::CATEGORIES_MAP[$this->category_id] ?? "unknown category";

//        if (isset(self::CATEGORIES_MAP[$this->category_id])) {
//            return self::CATEGORIES_MAP[$this->category_id];
//        } else {
//            return "unknown category";
//        }
    }

    public function getTypeName(): string {
        return self::TYPES_MAP[$this->type_id] ?? "unknown type";
    }
}
