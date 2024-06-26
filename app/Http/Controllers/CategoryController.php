<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('categories.index',[
            'title' => 'Kategori',
            'categories' => Category::all()
        ]);
    }

    public function show(Category $category){
        return view('categories.show',[
            'title' => 'Kategori',
            'category' => $category,
            'themes' => $category->theme
        ]);
    }
}
