<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function store(Request $request)
    {
        // ambil produk
        $product = Product::find($request->product_id);

        // validasi produk ada
        if (!$product) {
            return back()->with('error', 'Produk tidak ditemukan');
        }

        // minimal pembelian 1 kodi
        if ($request->quantity < 1) {
            return back()->with('error', 'Minimal pembelian 1 kodi');
        }

        // cek stok
        if ($request->quantity > $product->stock) {
            return back()->with('error', 'Stok tidak mencukupi');
        }

        // hitung total
        $price = $product->price;
        $total = $request->quantity * $price;

        // simpan transaksi
        Transaction::create([
            'product_id' => $product->id,
            'quantity'   => $request->quantity,
            'price'      => $price,
            'total'      => $total
        ]);

        // kurangi stok produk
        $product->stock = $product->stock - $request->quantity;
        $product->save();

        return back()->with('success', 'Transaksi berhasil');
    }
}
