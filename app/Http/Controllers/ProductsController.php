<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Productos;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function all()
    {
        $products = Productos::all();



        return view('products.index', ['products' => $products]);
    }
}
