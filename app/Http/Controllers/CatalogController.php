<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;

class CatalogController extends Controller
{
    public function index() {
        return \View::make('catalog.catalog');
    }

    public function products() {
        return \View::make('catalog.products');
    }

    public function details() {
        return \View::make('catalog.product_details');
    }

    public function detail($id) {
        $item = Product::findOrFail($id);
        /* @var $item Product*/
        return \View::make('catalog.product_details', [
            'item' => $item,
        ]);
    }
}
