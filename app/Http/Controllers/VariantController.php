<?php

namespace App\Http\Controllers;

use App\Models\Variant;
use Illuminate\Http\Request;

class VariantController extends Controller
{
    public function index()
    {
        $variants = Variant::latest()->get();
        return view('variants.index',compact('variants'));

    }

    public function create()
    {
        return view('variants.create');
    }


    public function store(Request $request)
    {
        Variant::create(request()->validate([
            'product_id'=> 'required',
            'gender'=>'required',
            'color'=>'required',
            'size'=>'required',

        ]));
        return redirect (route('variants'));
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
