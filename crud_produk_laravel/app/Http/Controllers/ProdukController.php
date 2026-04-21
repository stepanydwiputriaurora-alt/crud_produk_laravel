<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $produks = Produk::latest()->get();
        return view('produk.index', compact('produks'));
    }

    public function create()
    {
        return view('produk.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'produk' => 'required|string|max:255',
            'nama_produk' => 'required|string|max:255',
            'ukuran' => 'required|string|max:100',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
            'deskripsi' => 'nullable|string',
        ]);

        Produk::create($validated);

        return redirect()->route('produk.index')->with('success', 'Data produk berhasil ditambahkan.');
    }

    public function show(Produk $produk)
    {
        return view('produk.show', compact('produk'));
    }

    public function edit(Produk $produk)
    {
        return view('produk.edit', compact('produk'));
    }

    public function update(Request $request, Produk $produk)
    {
        $validated = $request->validate([
            'produk' => 'required|string|max:255',
            'nama_produk' => 'required|string|max:255',
            'ukuran' => 'required|string|max:100',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
            'deskripsi' => 'nullable|string',
        ]);

        $produk->update($validated);

        return redirect()->route('produk.index')->with('success', 'Data produk berhasil diupdate.');
    }

    public function destroy(Produk $produk)
    {
        $produk->delete();

        return redirect()->route('produk.index')->with('success', 'Data produk berhasil dihapus.');
    }
}