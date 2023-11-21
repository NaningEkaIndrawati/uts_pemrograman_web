<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\Customer;

class AdminController extends Controller
{
    public function index()
    {
        // Logika untuk halaman dashboard admin
        return view('dashboard');
    }

    
    public function products()
    {
    $product = Product::all(); // Mendapatkan semua produk dari database
    return view('product', ['product' => $product]); // Menampilkan daftar produk ke dalam view
    }


    public function orders()
    {
        // Logika untuk menampilkan daftar pesanan
        $orders = Order::all(); // Misalkan Order adalah model yang merepresentasikan pesanan
        return view('admin.orders.index', ['orders' => $orders]); // Menampilkan daftar pesanan ke dalam view
    }

    public function customers()
    {
        // Logika untuk menampilkan daftar pelanggan
        $customers = Customer::all(); // Misalkan Customer adalah model yang merepresentasikan pelanggan
        return view('admin.customers.index', ['customers' => $customers]); // Menampilkan daftar pelanggan ke dalam view
    }

    public function createProduct()
    {
        return view('admin.products.create'); // Menampilkan formulir untuk menambah produk
    }

    public function storeProduct(Request $request)
    {
        // Validasi data dari formulir
        $validatedData = $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
            // Sesuaikan dengan kebutuhan validasi Anda
        ]);

        // Simpan data produk baru ke dalam database
        Product::create($validatedData);

        return redirect()->route('admin.products')->with('success', 'Produk berhasil ditambahkan');
    }

    public function editProduct($id)
    {
        $product = Product::findOrFail($id); // Mengambil data produk berdasarkan ID
        return view('admin.products.edit', ['product' => $product]); // Menampilkan formulir edit produk
    }

    public function updateProduct(Request $request, $id)
    {
        // Validasi data dari formulir
        $validatedData = $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
            // Sesuaikan dengan kebutuhan validasi Anda
        ]);

        // Perbarui data produk yang ada di dalam database
        $product = Product::findOrFail($id);
        $product->update($validatedData);

        return redirect()->route('admin.products')->with('success', 'Produk berhasil diperbarui');
    }

    public function destroyProduct($id)
    {
        // Hapus data produk dari database
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('admin.products')->with('success', 'Produk berhasil dihapus');
    }

    // Metode-metode lain yang dibutuhkan untuk fungsi admin lainnya
}
