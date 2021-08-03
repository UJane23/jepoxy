<?php


namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Type;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index(Request $request) {
        $categories = Category::query()
            ->orderBy('name', 'asc')
            ->get();

        $types = Type::query()
            ->orderBy('name', 'asc')
            ->get();

        $productsQ = Product::where('published', '=', '1')
            ->orderBy('name', 'asc');

        if ($request->get('search', "") !== "") {
            $search = $request->get('search', "");
            $productsQ->where('name', 'like', '%'.$search.'%');
        }

        $products = $productsQ->paginate(10);

        return \View::make('catalog.products', [
            'categories' => $categories,
            'types' => $types,
            'products' => $products,
        ]);
    }

    public function detail($id) {
        $item = Product::findOrFail($id);
        /* @var $item Product*/
        return \View::make('catalog.product_detail', [
            'item' => $item,
        ]);
    }

    public function category () {
        return $this->hasOne(Category::class, 'category_id', 'name');
    }
}
