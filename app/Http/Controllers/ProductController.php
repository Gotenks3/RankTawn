<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Enums\ProductState;
use App\Enums\ProductSelling;
use App\Http\Requests\ProductCreateRequest;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;
use InterventionImage;
use App\Services\ImageService;

class ProductController extends Controller
{
    public function index() 
    {
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
        $status = ProductState::asSelectArray();
        $sell = ProductSelling::asSelectArray();

        return view('products.create', compact('status','sell'));
    }

    public function store(ProductCreateRequest $request)
    {
        // dd($request);

        $imageFile = $request->image1;

        $fileNameToStore = ImageService::upload($imageFile, 'products');   

        Product::create([
            'name' => $request->name,
            'content' => $request->content,
            'image1' => $fileNameToStore,
            'image2' => 'sample.png',
            'image3' => 'sample.png',
            'image4' => 'sample.png',
            'state' => $request->state,
            'price' => $request->price,
            'is_selling' => $request->is_selling
        ]);

        return redirect()->route('product.index');
    }
}
