<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store(Request $request){

        $name = $request->name;
        $description = $request->description;
        $price = $request->price;

        $product = new Product();

        $product->name = $name;
        $product->description = $description;
        $product->price = $price;

        $product->save();

        return redirect(route('home'));

    }

    public function index(){

        $products = Product::all();

        return view('products.index', ['products'=>$products]);

    }
}
