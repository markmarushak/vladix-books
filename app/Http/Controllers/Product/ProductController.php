<?php

namespace App\Http\Controllers\Product;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImages;
use App\Traits\Uploadable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    use Uploadable;

    public function index(Category $category, Product $products)
    {
        return view('admin.product.index',[
            'products' => $products->orderBy('created_at','desc')->get(),
            'categories' => $category->all()
        ]);
    }

    public function store(Request $request, Product $product)
    {
        $rules = [
                'name' => 'required|unique:product',
                'author' => 'required',
                'year' => 'required',
                'price' => 'required|integer',
                'edition' => 'required',
                'language' => 'required',
                'description' => 'required',
                'category_id' => 'required',
                'images'
        ];

        if(!empty($request->all()) && $request->validate($rules)){
            $data = $request->except(['submit','images']);
            $store = $product::create($data);
            if($store->id){
                $path = $this->upload($request->images);
                $product_images = ProductImages();
                $product_images->path = $path;
                $product_images->product_id = $path;
                $product_images->save();

                $products = $product::orderBy('created_at')->get();
                return redirect()->route('products.index', [
//                    'products' => $products
                ]);
            }
        }

        $categories = Category::all();

        return view('admin.product.store', [
            'categories' => $categories
        ]);
    }

    public function edit($id)
    {
        $categories = Category::all();
        $product = Product::find($id);
        return view('admin.product.update', [
            'categories' => $categories,
            'product' => $product
        ]);
    }

    public function update(Request $request)
    {
        $rules = [
            'name' => 'required',
            'category_id' => 'required'
        ];
        if($request->validate($request->all(), $rules)){
            Product::find($request->id)->update($request->all());
            return redirect()->route('products.index');
        }

        return redirect()->route('products.index');
    }

    public function delete(Request $request, Product $product)
    {
        if($request->id){
            $product::find($request->id)->delete();
        }
        $data = $product::all();
        return redirect()->route('products.index',[
            'products' => $data
        ]);
    }
}
