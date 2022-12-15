<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Enums\ProductState;
use App\Enums\ProductSelling;
use App\Http\Requests\ProductCreateRequest;
use Illuminate\Support\Arr;

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
        $statu = ProductState::getValues();
        dd($statu);

// dd(array_keys($status));
        foreach($status as $state){
            dd($state);
        }
        $sell = ProductSelling::asSelectArray();

        // $products = Product::all();
        return view('products.create', compact('status','sell'));
    }

    public function store(ProductCreateRequest $request)
    {
        // dd($request);
        // dd($request->image1);

        // ディレクトリ名
        $dir = 'sample';

        // アップロードされたファイル名を取得
        $file_name = $request->image1['originalName'];

        // 取得したファイル名で保存
        $request->file('image')->storeAs('public/' . $dir, $file_name);

        // ファイル情報をDBに保存
        // $image = new Image();
        // $image->name = $file_name;
        // $image->path = 
        // $image->save();

        Product::create([
            'name' => $request->name,
            'content' => $request->content,
            'image1' => 'storage/' . $dir . '/' . $file_name,
            'image2' => 'sample.png',
            'image3' => 'sample.png',
            'image4' => 'sample.png',
            'state' => $request->state,
            'price' => $request->price,
            'is_selling' => $request->is_selling
        ])->save();

        return redirect()->route('product.index');
    }
}
