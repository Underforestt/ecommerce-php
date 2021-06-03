<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function cart(): string
    {
        $orderId = session('orderId');
        if (!is_null($orderId))
        {
            $order = Order::findOrFail($orderId);
        }
        return view('cart', compact('order'));
    }

    public function cartPlace(): string
    {
        return view('order');
    }

    public function cartAdd($productId)
    {
        $orderId = session('orderId');
        if (is_null($orderId))
        {
            $order = Order::create();
            session(['orderId' => $order->id]);

        }
        else
        {
            $order = Order::find($orderId);
        }
        $order->products()->attach($productId);

        return view('cart', compact('order'));
    }
}
