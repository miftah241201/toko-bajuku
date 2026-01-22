<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();

        return view('products.index', compact('products', 'categories'));
    }

    public function store(Request $request)
    {
        // hanya admin boleh tambah produk
        if (auth()->user()->role !== 'admin') {
            abort(403);
        }

        Product::create([
            'name'        => $request->name,
            'price'       => $request->price,
            'stock'       => $request->stock,
            'category_id' => $request->category_id,
            'image'       => $request->image 
        ]);

        return redirect('/products');
    }

    public function destroy($id)
    {
        
        if (auth()->user()->role !== 'admin') {
            abort(403);
        }

        Product::where('id', $id)->delete();

        return redirect('/products');
    }
}
