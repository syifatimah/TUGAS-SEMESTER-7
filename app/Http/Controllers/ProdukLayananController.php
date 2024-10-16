<?php

namespace App\Http\Controllers;

use App\Models\ProdukLayanan;
use Illuminate\Http\Request;

class ProdukLayananController extends Controller
{
    public function index()
    {
        return ProdukLayanan::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string',
            'deskripsi' => 'nullable|string',
            'harga' => 'required|numeric',
            'tipe' => 'required|in:produk,layanan',
            'stok' => 'nullable|integer',
        ]);

        return ProdukLayanan::create($validated);
    }

    public function show($id)
    {
        return ProdukLayanan::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => 'required|string',
            'deskripsi' => 'nullable|string',
            'harga' => 'required|numeric',
            'tipe' => 'required|in:produk,layanan',
            'stok' => 'nullable|integer',
        ]);

        $produkLayanan = ProdukLayanan::findOrFail($id);
        $produkLayanan->update($validated);

        return $produkLayanan;
    }

    public function destroy($id)
    {
        $produkLayanan = ProdukLayanan::findOrFail($id);
        $produkLayanan->delete();

        return response()->json(['message' => 'Produk atau layanan berhasil dihapus']);
    }
}