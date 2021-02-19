<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNewProduct;
use App\Http\Requests\UpdateProduct;
use App\Product;

class ProductController extends Controller
{

    public function index()
    {
        $products   = Product::with('category')->get();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(StoreNewProduct $request)
    {
        $data['product_name_ar']       = $request->product_name_ar;
        $data['product_name_en']       = $request->product_name_en;
        $data['category_id']           = $request->category_id;
        $data['price']                 = $request->price;
        toastr()->success('تم اضافة المنتج بنجاح!');
        Product::create($data);
        return redirect()->route('products.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $product = Product::where('id', '=', $id)->first();
        return view('products.edit', compact('product'));
    }

    public function update(UpdateProduct $request, $id)
    {

        $products = Product::where('id', '=', $id)->first();
        $data['product_name_ar']       = $request->product_name_ar;
        $data['product_name_en']       = $request->product_name_en;
        $data['category_id']           = $request->category_id;
        $data['price']                 = $request->price;
        toastr()->success('تم تعديل المنتج بنجاح!');
        $products->update($data);
        return redirect()->route('products.index');
    }

    public function destroy($id)
    {
        Product::where('id', '=',$id)->delete();
        toastr()->success('تم حذف المنتج بنجاح!');
        return redirect()->route('products.index');
    }
}
