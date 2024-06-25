<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function all()
    {
        $products = Productos::all();



        return view('products.index', ['products' => $products]);
    }

    public function view(int $product_id)
    {
        $product = Productos::findOrFail($product_id);
        return view('products.view', ['product' => $product]);
    }

    public function add()
    {
        return view('products.add');
    }

    public function createProcess()
    {

        $product = new Productos();
        $product->name = request('name');
        $product->category = request('category_id');
        $product->description = request('description');
        $product->ingredients = request('ingredients');
        $product->image = request('image');
        $product->price = request('price');
        $product->exists = request('exists');
        $product->save();
        return redirect()->route('products.index');


    }
}
