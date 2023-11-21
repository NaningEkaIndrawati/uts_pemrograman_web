<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flower;

class FlowerController extends Controller
{
    public function index()
    {
        $flowers = Flower::all();
        return view('flowers.index', compact('flowers'));
    }

    public function create()
    {
        return view('flowers.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
        ]);

        Flower::create($validatedData);
        return redirect()->route('flowers.index')->with('success', 'Flower created successfully');
    }

    public function show($id)
    {
        $flower = Flower::findOrFail($id);
        return view('flowers.show', compact('flower'));
    }

    public function edit($id)
    {
        $flower = Flower::findOrFail($id);
        return view('flowers.edit', compact('flower'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            // Tambahkan validasi lain jika diperlukan
        ]);

        $flower = Flower::findOrFail($id);
        $flower->update($validatedData);

        return redirect()->route('flowers.index')->with('success', 'Flower updated successfully');
    }

    public function destroy($id)
    {
        $flower = Flower::findOrFail($id);
        $flower->delete();

        return redirect()->route('flowers.index')->with('success', 'Flower deleted successfully');
    }
}

