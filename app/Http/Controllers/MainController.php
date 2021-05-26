<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(): string
    {
        return view('index');
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

    public function product($product = null): string
    {
        dump($product);
        return view('product', ['product' => $product]);
    }
}
