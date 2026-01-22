<?php

namespace App\Http\Controllers;

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
}
