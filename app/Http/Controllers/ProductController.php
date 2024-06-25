<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function catalog()
    {
        $products = Product::all();
        return view('products.catalogo')->with('products', $products);
    }

    public function index()
    {
        $products = Product::with('category')->get();
        return view('products.index')->with('products', $products);
    }

    public function create()
    {
        $categories = Category::all();
        return view('products.create')->with('categories', $categories);
    }

    public function createProcess(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'description' => 'required|string',
            'ingredients' => 'required|string',
            'price' => 'required|integer',
            'image' => 'required|image',
            'stock' => 'required|integer',
        ]);

        $imagePath = $request->file('image')->store('images', 'public');

        Product::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'ingredients' => $request->ingredients,
            'price' => $request->price,
            'image' => $imagePath,
            'stock' => $request->stock,
        ]);

        return redirect()->route('products.index')->with('feedback.message', 'Producto agregado exitosamente');
    }

    public function show($id)
    {
        $product = Product::with('category')->findOrFail($id);
        return view('products.show')->with('product', $product);
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('products.edit')->with(['product' => $product, 'categories' => $categories]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'description' => 'required|string',
            'ingredients' => 'required|string',
            'price' => 'required|integer',
            'image' => 'nullable|image',
            'stock' => 'required|integer',
        ]);

        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->description = $request->description;
        $product->ingredients = $request->ingredients;
        $product->price = $request->price;
        $product->stock = $request->stock;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $product->image = $imagePath;
        }

        $product->save();

        return redirect()->route('products.index')->with('feedback.message', 'Producto actualizado exitosamente');
    }

    public function confirmDelete($id)
    {
        $product = Product::findOrFail($id);
        return view('products.confirm-delete')->with('product', $product);
    }

    public function delete($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')->with('feedback.message', 'Producto eliminado exitosamente');
    }
}
