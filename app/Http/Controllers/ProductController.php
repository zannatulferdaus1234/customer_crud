<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::latest()->get();
        return view('products.index',compact('products'));

    }

    public function create()
    {
        return view('products.create');
    }


    public function store(Request $request)
    {
        Product::create(request()->validate([
            'name'=>'required|min:2',
        ]));
        return redirect (route('products'));
    }

    public function show($id)
    {
        //
    }


    public function edit(Product $product)
    {
        return view('products.edit',compact('product'));
    }


    public function update(Product $product)
    {
        $product->update(request()->validate([
            'name'=>'required',
        ]));
        return redirect (route('products'));

    }


    public function delete(Product $product)
    {
        $product->delete();
        return redirect (route('products'));

    }
}
