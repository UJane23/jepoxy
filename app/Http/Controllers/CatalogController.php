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
    public function index (Request $request, $href_category = null) {
        $currentRoute = "catalog";

        $categories = Category::query()
            ->orderBy('name', 'asc')
            ->get();

        $types = Type::query()
            ->orderBy('name', 'asc')
            ->get();

        $productsQ = Product::where('published', '=', '1');

        if ($href_category !== null) {
            $id = null;
            foreach ($categories as $category) {
                if ($href_category == $category->href_category) {
                    $id = $category->id;
                }
            }
            if ($id == null) {
                abort(404);
            }
            $currentRoute = "show_by_category";
            $productsQ->where('category_id', $id);
        }

        if ($request->get('search', "") !== "") {
            $search = $request->get('search', "");
            $productsQ->where('name', 'like', '%'.$search.'%');
        }

        if ($request->get('sortby')) {
            switch ($request->get('sortby')) {
                case 'price_asc':
                    $productsQ->orderBy('price', 'asc');
                    break;
                case 'price_desc':
                    $productsQ->orderBy('price', 'desc');
                    break;
                case 'id':
                    $productsQ->orderBy('id', 'desc');
                    break;
                case 'name_asc':
                    $productsQ->orderBy('name', 'asc');
                    break;
                case 'name_desc':
                    $productsQ->orderBy('name', 'desc');
                    break;
            }
        }

        $products = $productsQ->paginate(10);

        $category_data = DB::table('products')
            ->select(DB::raw('category_id, COUNT(id) AS sum'))
            ->where('published', '=','1')
            ->groupBy('category_id')
            ->get()
            ->pluck('sum', 'category_id')
            ->toArray();

        $sortLinks = $this->getSortLinks($href_category);

        return \View::make('catalog.products', [
            'categories' => $categories,
            'types' => $types,
            'products' => $products,
            'category_data' => $category_data,
            'currentRoute' => $currentRoute,
            'sort_links' => $sortLinks,
        ]);
    }

    protected function getSortLinks($href_category): array // (string $href_category)
    {
        $requestData = request()->input();
        if ($href_category !== null) {
            $currentRoute = "show_by_category";
            $requestData['href_category'] = $href_category;
        } else {
            $currentRoute = "catalog";
        }

        return [
            [
                "name" => "Без сортировки",
                "link" => route($currentRoute, array_merge($requestData, ['sortby' => ''])),
                "is_selected" => !isset($requestData['sortby']) || $requestData['sortby'] == '',
            ],
            [
                "name" => "По увеличению цены",
                "link" => route($currentRoute, array_merge($requestData, ['sortby' => 'price_asc'])),
                "is_selected" => isset($requestData['sortby']) && $requestData['sortby'] == 'price_asc',
            ],
            [
                "name" => "По уменьшению цены",
                "link" => route($currentRoute, array_merge($requestData, ['sortby' => 'price_desc'])),
                "is_selected" => isset($requestData['sortby']) && $requestData['sortby'] == 'price_desc',
            ],
            [
                "name" => "По обновлению",
                "link" => route($currentRoute, array_merge($requestData, ['sortby' => 'id'])),
                "is_selected" => isset($requestData['sortby']) && $requestData['sortby'] == 'id',
            ],
            [
                "name" => "По названию (А-Я)",
                "link" => route($currentRoute, array_merge($requestData, ['sortby' => 'name_asc'])),
                "is_selected" => isset($requestData['sortby']) && $requestData['sortby'] == 'name_asc',
            ],
            [
                "name" => "По названию (Я-А)",
                "link" => route($currentRoute, array_merge($requestData, ['sortby' => 'name_desc'])),
                "is_selected" => isset($requestData['sortby']) && $requestData['sortby'] == 'name_desc',
            ]
        ];
    }

    public function detail($id) {
        $item = Product::findOrFail($id);
        $products = Product::where('published', '=', '1')->get();

        /* @var $item Product*/
        return \View::make('catalog.product_detail', [
            'item' => $item,
            'products' => $products,
        ]);
    }

    public function category () {
        return $this->hasOne(Category::class, 'category_id', 'name');
    }
}
