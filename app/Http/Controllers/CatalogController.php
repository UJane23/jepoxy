<?php


namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Type;

class CatalogController extends Controller
{
    public function index() {
        return \View::make('catalog.catalog');
    }

    public function products() {
        $categories = Category::query()
            ->orderBy('name', 'asc')
            ->get();
        ;
        $types = Type::query()
            ->orderBy('name', 'asc')
            ->get();
        ;
        $products = Product::query()
            ->orderBy('name', 'asc')
            ->get();
        ;
        return \View::make('catalog.products', [
            'categories' => $categories,
            'types' => $types,
            'products' => $products
        ]);
    }

    public function detail($id) {
        $item = Product::findOrFail($id);
        /* @var $item Product*/
        return \View::make('catalog.product_details', [
            'item' => $item,
        ]);
    }
}
