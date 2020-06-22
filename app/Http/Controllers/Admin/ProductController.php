<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
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
        return \View::make('admin.catalog.list', [
            'items' => $items,
            'search' => $request->get('search')
        ]);
    }

    public function new () {
        $item = new Product;
        return \View::make('admin.catalog.form', [
            'item' => $item,
        ]);
    }

    public function save ($id, Request $request) {
        /** @var Callback $item */
        $item = Product::findOrNew($id);

        $id = $request->get('id', 0);
        $item = Product::findOrFail($id);
        $item->article = $request->get('article');

        if($request->hasFile('image')) {
            $item->image_url = $request->file('image')->store('public/images');
        }

        $item->name = $request->get('name');
        $item->description = $request->get('description');
        $item->availability = $request->get('availability');
        $item->category_id = $request->get('category_id');
        $item->type_id = $request->get('type_id');
        $item->published = $request->get('published', 0);
        $item->save();

        return \Redirect::route('catalog_list');
    }

    public function edit ($id) {
        $items = Product::find($id);
        $products = \DB::table('products')->select('id','name')->get();
        return \View::make('admin.catalog.form', [
            'item' => $item,
        ]);
    }

    public function delete ($id) {
        $item = Product::find($id);
        if ($item) {
            $item->delete();
        }
        return \Redirect::route('catalog_list');
    }
}
