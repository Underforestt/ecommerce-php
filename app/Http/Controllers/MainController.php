<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(): string
    {
        $products = Product::get();
        return view('index', compact('products'));
    }

    public function categories(): string
    {
        $categories = Category::get();
        return view('categories', compact('categories'));
    }

    public function category($code): string
    {
        $category = Category::where('code', $code)->first();
        return view('category', compact('category'));
    }

    public function product($category, $product = null): string
    {
        return view('product', ['product' => $product]);
    }


}
