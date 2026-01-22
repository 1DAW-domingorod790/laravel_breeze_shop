<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    public function catalog()
    {
        $response = Http::get('https://fakestoreapi.com/products');
        // dd($response);
        return view('products.catalog', ['products' => $response->json()]);
    }

    public function add(Request $request): RedirectResponse
    {
        // dd($request->id);
        $id = $request->id;

        $response = Http::get('https://fakestoreapi.com/products/' . $id);

        $product = $response->json();

        // Borra todo el carrito de golpe
        // session()->forget('added_products');

        session()->push('added_products', $product);

        return redirect(route('products.catalog'));
    }

    public function cart()
    {
        return view('products.cart', ['products' => session('added_products')]);
    }
}
