<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class productController extends Controller
{
    public function index(){
        $productList = Product::all();
        return view('admin.products.index', array(
            'productList' => $productList
        ));
    }

    public function create(){
        return view('admin.products.create');
    }

    public function store(Request $request){
        Product::create(
            $request->all()
        );
        return redirect()->route('admin.products.index');
    }

    public function edit($id){
        $product = Product::find($id);
        return view('admin.products.edit', array(
            'product' => $product
        ));
    }

    public function update(Request $request, $id){
        $product = Product::find($id);
        $product->update(
            $request->all()
        );
        return redirect()->route('admin.products.index');
    }

    public function destroy($id){
        Product::destroy($id);
        return redirect()->route('admin.products.index');
    }
}
