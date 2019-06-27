<?php

namespace App\Http\Controllers\Home;

use App\Category;
use App\CategoryProduct;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index(Category $category, Product $products)
    {
        return view('cabinet.product.index',[
            'products' => $products->all(),
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
        ];

        if(!empty($request->all()) && $request->validate($rules)){
            $data = $request->except(['submit']);
            $store = $product::create($data);
            if($store->id){
                $products = $product::all();
                return redirect()->route('products.index', [
                    'products' => $products
                ]);
            }
        }

        $categories = Category::all();

        return view('cabinet.product.store', [
            'categories' => $categories
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
        }else{
            $categories = Category::all();
            $product = Product::find($request->id);
        }

        return view('cabinet.product.update', [
            'categories' => $categories,
            'product' => $product
        ]);
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
