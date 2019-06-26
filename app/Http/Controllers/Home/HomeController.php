<?php

namespace App\Http\Controllers\Home;

use App\Category;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    public function index()
    {
        return view('home.index');
    }

    public function cabinet()
    {
        $categories = Category::all();
        return view('cabinet.category.index',[
            'categories' => $categories
        ]);
    }

}