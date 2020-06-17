<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CatalogController extends Controller
{

    public function index (Request $request) {
        $order = $request->get('order', 'id');
        $order_type = $request->get('type', 'desc');
        if (!in_array($order, ['id'])) {
            $order = 'id';
        }
        if (!in_array($order_type, ['asc', 'desc'])) {
            $order_type = 'desc';
        }
        $query = Product::orderBy($order, $order_type);

        if ($request->exists('search')) {
            $search = $request->get('search');
            $search = '%' . $search . '%';
            $query->where('name', 'LIKE', $search);
        }

        $items = $query->paginate(10);
        return \View::make('admin.catalog.catalog', [
            'items' => $items,
            'search' => $request->get('search')
        ]);
    }

    public function new () {
//        $item = new curd;
        return \View::make('admin.catalog.form', [
//            'item' => $item,
        ]);
    }
}
