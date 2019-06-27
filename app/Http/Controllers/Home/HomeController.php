<?php

namespace App\Http\Controllers\Home;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    protected $products;
    protected $category;

    public function __construct(
        Category $category,
        Product $product
    )
    {
        $this->products = $product;
        $this->category = $category;
    }

    public function index()
    {
        $category = $this->category->getTop();
        $products = $this->products->getTop();
        return view('home.index',[
            'categories' => $category,
            'products' => $products
        ]);
    }

    public function cabinet()
    {
        $categories = Category::all();
        return view('cabinet.category.index',[
            'categories' => $categories
        ]);
    }

    public function category(Request $request)
    {
        $products = $this->products->where('category_id', $request->id)->get();
        return view('home.category', [
            'products' => $products
        ]);
    }

    public function product(Request $request)
    {
        $product = Product::find($request->id);
        return view('home.product',[
            'product' => $product
        ]);
    }

    public function getTop($table)
    {
        return DB::table($table)
            ->orderBy('rating')
            ->limit(5)
            ->get()->toArray();
    }

}