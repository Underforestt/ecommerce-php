<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(): string
    {
        return view('index');
    }

    public function categories(): string
    {
        return view('categories');
    }

    public function category($category): string
    {
        return view('category', compact('category'));
    }

    public function product($product = null): string
    {
        dump($product);
        return view('product', ['product' => $product]);
    }
}
