<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);
        return view('pages.cart', compact('cart'));
    }

    public function addToCart(Request $request, $id)
    {
        $productController = new ProductController();
        $products = $productController->getProducts();

        $product = $products[$id] ?? null;
        if (!$product) return redirect()->back()->with('error', 'Product not found.');

        $cart = session()->get('cart', []);
        $quantity = (int) $request->input('quantity', 1);

        if (isset($cart[$id])) {
            $cart[$id]['quantity'] += $quantity;
        } else {
            $cart[$id] = [
                'id' => $product['id'],
                'name' => $product['name'],
                'price' => $product['price'],
                'image' => 'images/' . $product['img'],
                'quantity' => $quantity,
            ];
        }

        session()->put('cart', $cart);
        return redirect()->route('cart.index')->with('success', "{$product['name']} added to cart!");
    }

    public function increaseQuantity($id)
    {
        $cart = session()->get('cart', []);
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
        }
        return redirect()->route('cart.index');
    }

    public function decreaseQuantity($id)
    {
        $cart = session()->get('cart', []);
        if (isset($cart[$id])) {
            if ($cart[$id]['quantity'] > 1) {
                $cart[$id]['quantity']--;
            } else {
                unset($cart[$id]);
            }
            session()->put('cart', $cart);
        }
        return redirect()->route('cart.index');
    }

    public function removeFromCart($id)
    {
        $cart = session()->get('cart', []);
        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }
        return redirect()->route('cart.index')->with('success', 'Item removed from cart.');
    }

    public function clearCart()
    {
        session()->forget('cart');
        return redirect()->route('cart.index')->with('success', 'Cart cleared.');
    }
}
