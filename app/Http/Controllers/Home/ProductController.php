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
        ];

        if(!empty($request->all()) && $request->validate($rules)){
            $data = $request->except(['category', 'submit']);
            $producted = $product::create($data);
            if($producted->id){
                CategoryProduct::created([
                    'product_id' => $producted->id,
                    'category_id' => $request->category
                ]);
                $products = $product::all();
                return redirect()->route('product.index', [
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
            'name' => 'required'
        ];
        $request->validate($request->all(), $rules);
        Product::find($request->id)->update($request->all());

        return view('cabinet.product.update');
    }

    public function delete(Request $request)
    {
        return view('cabinet.product.delete');
    }
}
