<?php

namespace App\Http\Controllers;

use App\Models\Product; 
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all(); // Mengambil semua produk dari database
        return view('products.index', compact('products')); // Mengirimkan produk ke dalam view
    }

    public function show($id)
    {
        $product = Product::findOrFail($id); // Mengambil produk berdasarkan ID
        return view('products.show', compact('product')); // Menampilkan detail produk ke dalam view
    }

    public function create()
    {
        return view('products.create'); // Menampilkan formulir untuk menambah produk baru
    }

    public function store(Request $request)
    {
        // Validasi data yang diterima dari formulir
        $validatedData = $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
            // Sesuaikan validasi dengan kebutuhan Anda
        ]);

        // Simpan data produk baru ke dalam database
        $product = Product::create($validatedData);

        return redirect()->route('products.show', ['id' => $product->id])
            ->with('success', 'Produk berhasil ditambahkan'); // Redirect ke halaman detail produk dengan pesan sukses
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id); // Mengambil produk berdasarkan ID
        return view('products.edit', ['product' => $product]); // Menampilkan formulir untuk mengedit produk
    }

    public function update(Request $request, $id)
    {
        // Validasi data yang diterima dari formulir
        $validatedData = $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
            // Sesuaikan validasi dengan kebutuhan Anda
        ]);

        // Perbarui data produk yang ada di dalam database
        $product = Product::findOrFail($id);
        $product->update($validatedData);

        return redirect()->route('products.show', ['id' => $product->id])
            ->with('success', 'Produk berhasil diperbarui'); // Redirect ke halaman detail produk dengan pesan sukses
    }

    public function destroy($id)
    {
        // Hapus data produk dari database
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')
            ->with('success', 'Produk berhasil dihapus'); // Redirect ke halaman daftar produk dengan pesan sukses
    }
}

