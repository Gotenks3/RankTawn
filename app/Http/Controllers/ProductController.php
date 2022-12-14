<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Enums\ProductState;

class ProductController extends Controller
{
    public function index() 
    {
        // dd(Product::all());
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function show($product)
    {
        $product = Product::findOrFail($product);

        return view('products.show', compact('product'));
    }

    public function create() 
    {

        // $products = Product::all();
        return view('products.create');
    }

    public function store(Request $request)
    {
        // dd($request);

        Product::create([
            'name' => $request->name,
            'content' => $request->content,
            'image1' => 'sample.png',
            'image2' => 'sample.png',
            'image3' => 'sample.png',
            'image4' => 'sample.png',
            'state' => '1',
            'price' => '1000',
            'is_selling' => '1'
        ])->save();

        return redirect()->route('product.index');
    }
}
