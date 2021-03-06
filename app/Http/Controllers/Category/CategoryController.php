<?php

namespace App\Http\Controllers\Category;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('created_at', 'desc')->get();
        return view('admin.category.index',[
            'categories' => $categories
        ]);
    }

    public function store(Request $request, Category $category)
    {
        $data = $request->all();
        $rules = [
            'name' => 'required|unique:category'
        ];
        if(!empty($data) && $request->validate($rules)){
            $category::create([
                'name' => $request->name
            ]);
            $data = $category::all();
        }
        return redirect()->route('category.index', [
            'categories' => $data
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

        return view('admin.category.update', [
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
        return redirect()->route('category.index',[
            'categories' => $data
        ]);
    }
}
