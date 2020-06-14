<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

class CatalogController extends Controller
{
    public function index() {
        return \View::make('admin.catalog.catalog');
    }

    public function new () {
//        $item = new curd;
        return \View::make('admin.catalog.form', [
//            'item' => $item,
        ]);
    }
}
