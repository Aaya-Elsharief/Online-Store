<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Category;
use App\Image;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Validator;
use Auth;

class HomeController extends Controller
{


    public function index()
    {
        $categories = Category::get();
        return view('home', [
            'products' => $categories
        ]);

    }


}
