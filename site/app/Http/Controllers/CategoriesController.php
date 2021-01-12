<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function view($id)
    {
    $category=Category::find($id);
    return view('categories.view',[
        'products'=>$category->products,
        'category'=>$category
    ]);

    }
}
