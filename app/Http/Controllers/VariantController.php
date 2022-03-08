<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Variant;
use Illuminate\Http\Request;

class VariantController extends Controller
{
    public function index()
    {
        $variants = Variant::latest()->get();
        return view('products.variants.index',compact('variants'));

    }

    public function create()
    {
        $products = Product::latest()->get();
        return view('products.variants.create',compact('products'));
    }


    public function store(Request $request)
    {
        Variant::create(request()->validate([
            'product_id'=> 'required',
            'gender'=>'',
            'color'=>'',
            'size'=>'',
            'price'=>'required',

        ]));
        return redirect (route('variants'));
    }

    public function show($id)
    {
        //
    }


    public function edit(Variant $variant)
    {
        $products = Product::latest()->get();

        return view('products.variants.edit',compact('variant','products'));
    }


    public function update(Variant $variant)
    {
        $variant->update(request()->validate([
            'product_id'=> 'required',
            'gender'=>'',
            'color'=>'',
            'size'=>'',
            'price'=>'required',

        ]));
        return redirect (route('variants'));

    }


    public function delete(Product $product)
    {
        $product->delete();
        return redirect (route('products'));

    }
}
