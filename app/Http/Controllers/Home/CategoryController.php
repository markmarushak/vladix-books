<?php

namespace App\Http\Controllers\Home;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('cabinet.category.index',[
            'categories' => $categories
        ]);
    }

    public function store(Request $request, Category $category)
    {
        $data = $request->all();
        $categories = $category::all();
        $rules = [
            'name' => 'required|unique:category'
        ];
        if(!empty($data) && $request->validate($rules)){
            $category::create([
                'name' => $request->name
            ]);
        }
        return view('cabinet.category.store', [
            'categories' => $categories
        ]);
    }

    public function update(Request $request, Category $category)
    {

        $rules = [
            'name' => 'required'
        ];
        if(!empty($request->name) && $request->validate($rules)){
            $category::where(['id' => $request->id])->update(['name' => $request->name]);
            $category = $request->name;
            return redirect()->route('category.index');
        }else{
            $category = $category::find($request->id);
        }

        return view('cabinet.category.update', [
            'category' => $category,
            'request'  => $request
        ]);
    }

    public function delete(Request $request, Category $category)
    {
        if($request->id){
            $category::find($request->id)->delete();
        }
        $data = $category::all();
        return view('cabinet.product.index',[
            'categories' => $data
        ]);
    }
}
