<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Panggil model Product

class ProdukController extends Controller
{
    // 1. Menampilkan Form Tambah
    public function create()
    {
        return view('produk.create');
    }

    // 2. Menyimpan Data Produk Baru (Handle Post Request)
    public function store(Request $request)
    {
        // Validasi inputan form
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
        ]);

        // Gunakan model untuk menyimpan data ke database
        Product::create([
            'name' => $request->name,
            'price' => $request->price
        ]);

        return "Produk berhasil disimpan!";
    }

    // 3. Menampilkan Form Edit dengan Data Lama
    public function edit($id)
    {
        // Cari produk berdasarkan ID, jika tidak ketemu akan error 404
        $product = Product::findOrFail($id);
        return view('produk.edit', compact('product'));
    }

    // 4. Mengupdate Data Produk (Handle Post Request)
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
        ]);

        // Cari data yang mau diubah
        $product = Product::findOrFail($id);

        // Gunakan model untuk mengupdate data produk
        $product->update([
            'name' => $request->name,
            'price' => $request->price
        ]);

        return "Produk berhasil diupdate!";
    }
}