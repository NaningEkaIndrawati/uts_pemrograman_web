<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer; // Pastikan model Customer telah dibuat dan sesuai dengan struktur database

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all(); // Mendapatkan semua data pelanggan dari database

        return view('customer.index', ['customers' => $customers]);
        // Mengirimkan data pelanggan ke view 'customer.index'
    }

    public function show($id)
    {
        $customer = Customer::find($id); // Mendapatkan data pelanggan berdasarkan ID

        return view('customer.show', ['customer' => $customer]);
        // Mengirimkan data pelanggan ke view 'customer.show'
    }

    public function create()
    {
        return view('customer.create');
        // Menampilkan form untuk membuat pelanggan baru
    }

    public function store(Request $request)
    {
        // Validasi input dari form untuk membuat pelanggan baru
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:customers',
        ]);

        $customer = Customer::create($validatedData); // Membuat pelanggan baru dalam database

        return redirect()->route('admin.customers')->with('success', 'Pelanggan berhasil ditambahkan');
        // Redirect ke halaman pengelolaan pelanggan dengan pesan sukses
    }

    public function edit($id)
    {
        $customer = Customer::find($id); // Mendapatkan data pelanggan berdasarkan ID

        return view('customer.edit', ['customer' => $customer]);
        // Menampilkan form untuk mengedit data pelanggan
    }

    public function update(Request $request, $id)
    {
        // Validasi input dari form untuk mengedit data pelanggan
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:customers,email,' . $id,
            // ... atur validasi lainnya sesuai kebutuhan
        ]);

        $customer = Customer::find($id); // Mendapatkan data pelanggan berdasarkan ID
        $customer->update($validatedData); // Update data pelanggan dalam database

        return redirect()->route('admin.customers')->with('success', 'Data pelanggan berhasil diperbarui');
        // Redirect ke halaman pengelolaan pelanggan dengan pesan sukses
    }

    public function destroy($id)
    {
        $customer = Customer::find($id); // Mendapatkan data pelanggan berdasarkan ID
        $customer->delete(); // Hapus data pelanggan dari database

        return redirect()->route('admin.customers')->with('success', 'Pelanggan berhasil dihapus');
        // Redirect ke halaman pengelolaan pelanggan dengan pesan sukses
    }
}
