<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

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

//    public function details($id) {
//        $item = Category::findOrFail($id);
//        /* @var $item Category*/
//        return \View::make('catalog.product_details', [
//            'item' => $item,
//        ]);
//    }
}
