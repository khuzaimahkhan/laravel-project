<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);
        $subtotal = 0;
        foreach ($cart as $item) $subtotal += $item['price'] * $item['quantity'];
        $shipping = $subtotal > 0 ? 5 : 0;
        $total = $subtotal + $shipping;

        return view('pages.checkout', compact('cart', 'subtotal', 'shipping', 'total'));
    }

    public function confirmPurchase(Request $request)
    {
        session()->forget('cart');
        return redirect()->route('checkout.thankyou');
    }

    public function thankYou()
    {
        return view('pages.thankyou');
    }
}
