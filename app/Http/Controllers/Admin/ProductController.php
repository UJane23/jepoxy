<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Type;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index (Request $request) {
        $order = $request->get('order', 'id');
        $order_style = $request->get('order_style', 'desc');
        if (!in_array($order, ['id'])) {
            $order = 'id';
        }
        if (!in_array($order_style, ['asc', 'desc'])) {
            $order_style = 'desc';
        }
        $query = Product::orderBy($order, $order_style);

        if ($request->exists('search')) {
            $search = $request->get('search');
            $search = '%' . $search . '%';
            $query->where('name', 'LIKE', $search);
        }
        $categories = Category::query()
            ->orderBy('name', 'asc')
            ->get();

        $types = Type::query()
            ->orderBy('name', 'asc')
            ->get();

        $items = $query->paginate(10);

        return \View::make('admin.catalog.list', [
            'items' => $items,
            'categories' => $categories,
            'types' => $types,
            'search' => $request->get('search')
        ]);
    }

    public function new () {
        $item = new Product;
        $categories = Category::query()
            ->orderBy('name', 'asc')
            ->get();

        $types = Type::query()
            ->orderBy('name', 'asc')
            ->get();

        return \View::make('admin.catalog.form', [
            'item' => $item,
            'categories' => $categories,
            'types' => $types
        ]);
    }

    public function save (Request $request) {
//        var_dump($_POST);
//        die;
//        $validator = $request->validate([
//            'article' => 'required|numeric|max:5', //size:
//            'image_url' => 'mimes:jpeg,bmp,png',
//            'name' => 'required|max:30',
//            'price' => 'required|numeric',
//            'description' => 'required|max:510',
//            'preview_text' => 'required|max:190',
//            'availability' => 'required|numeric',
//        ]);
//
//        if ($validator->fails()) {
//            return back()
//                ->withErrors($validator)
//                ->withInput();
//        }

        //!!!!!!!!!!!!
        //find . -maxdepth 1 -iname "*.jpg" | xargs -L1 -I{} convert -resize 20% "{}" _resized/"{}" - меняет вес картинки в % в текущей директории в _resized/
        //convert myfigure.png -resize 200x100 myfigure.jpg
        //convert -resize 50% myfigure.png myfigure.jpg

        // magick 20210627_123403.jpg -crop "50%x+%[fx:0.25*w]+%[fx:0.25*h]" +repage result.jpg



        /** @var Product $item */
        $id = $request->get('id', 0);
        if ($id == 0 ) {
            $item = new Product();
        } else {
            $item = Product::findOrFail($id); //($request->get('id'))
        }

        $item->article = $request->get('article');
        if($request->hasFile('image')) {
            $item->image_url = $request->file('image')->store('public/product_images');
        }
        $item->name = $request->get('name');
        $item->description = $request->get('description');
        $item->availability = $request->get('availability');
        $item->category_id = $request->get('category_id', 0);
        $item->type_id = $request->get('type_id',0);
        $item->published = $request->get('published', 0);
        $item->article = $request->get('article', 0);
        $item->price = $request->get('price', 0);
        $item->preview_text = $request->get('preview_text', 0);
        $item->size = $request->get('size', 0);
        $item->material = $request->get('material', 0);
        $item->save();

        return \Redirect::route('catalog_list');
    }

    public function edit ($id) {
        $item = Product::find($id);
        $categories = Category::query()
            ->orderBy('name', 'asc')
            ->get();

        $types = Type::query()
            ->orderBy('name', 'desc')
            ->get();

        return \View::make('admin.catalog.form', [
            'item' => $item,
            'categories' => $categories,
            'types' => $types
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
