<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;

class LayoutController extends Controller
{
    public function index() {
        $products = Product::query()->get();
        $categories = Category::query()->get();
        return \View::make('pages.index', [
            'products' => $products,
            'categories' => $categories,
        ]);
    }
}
