<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Show all products on frontend
    public function index()
    {
        $products = Product::all();
        return view('pages.products', compact('products'));
    }
    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view('pages.productdet', compact('product'));

    }

    // Show admin product list
    public function adminIndex()
    {
        $products = Product::all();
        return view('pages.admin-products', compact('products'));
    }

    // Show Create Form (Admin)
    public function create()
    {
        return view('pages.product-create');
    }

    // Store New Product
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'desc' => 'required',
            'img' => 'image|mimes:jpg,png,jpeg|max:2048'
        ]);

        $imgPath = null;
        if ($request->hasFile('img')) {
            $imgPath = $request->file('img')->store('products', 'public');
        }

        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'desc' => $request->desc,
            'img' => $imgPath,
        ]);

        return redirect()->route('admin.products')->with('success', 'Product added successfully!');
    }

    // Show Edit Form
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('pages.product-edit', compact('product'));
    }

    // Update Product
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $imgPath = $product->img;
        if ($request->hasFile('img')) {
            $imgPath = $request->file('img')->store('products', 'public');
        }

        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'desc' => $request->desc,
            'img' => $imgPath,
        ]);

        return redirect()->route('admin.products')->with('success', 'Product updated successfully!');
    }

    // Delete Product
    public function destroy($id)
    {
        Product::findOrFail($id)->delete();
        return redirect()->route('admin.products')->with('success', 'Product deleted successfully!');
    }
}
