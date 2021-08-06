<?php


namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Type;
use DB;
use Illuminate\Http\Request;
use function Illuminate\Support\Arr;

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
        $category_data = DB::table('products')
            ->select(DB::raw('category_id, COUNT(id) AS sum'))
            ->where('published', '=','1')
            ->groupBy('category_id')
            ->get()
            ->pluck('sum', 'category_id')
            ->toArray();

        return \View::make('catalog.products', [
            'categories' => $categories,
            'types' => $types,
            'products' => $products,
            'category_data' => $category_data,
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
