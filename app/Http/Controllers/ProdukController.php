<?php

namespace App\Http\Controllers;

use App\Models\JenisProduk;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produks = Produk::all();
        return view('produks.index', compact('produks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jenisProduks = JenisProduk::all();
        return view('produks.create', compact('jenisProduks'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data yang diterima
        $request->validate([
            'kode' => 'required|string|max:10',
            'nama' => 'required|string|max:45',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
            'rating' => 'required|integer|min:1|max:5',
            'minimal' => 'required|integer',
            'jenis_produk_id' => 'required|exists:jenis_produks,id',
            'deskripsi' => 'required|string',
        ]);



        // Create the Produk instance with the validated data
        Produk::create($request->all());

        // Redirect back to the Produk index with a success message
        return redirect()->route('produks.index')
            ->with('success', 'Produk created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Produk $produk)
    {
        return view('produks.show', compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produk $produk)
    {
        $jenisProduks = JenisProduk::all();
        return view('produks.edit', compact('produk', 'jenisProduks'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produk $produk)
    {
        // Validate the incoming request data
        $request->validate([
            'kode' => 'required|string|max:10',
            'nama' => 'required|string|max:45',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
            'rating' => 'required|integer|min:1|max:5', // Ensure rating is between 1 and 5
            'minimal' => 'required|integer',
            'jenis_produk_id' => 'required|exists:jenis_produks,id',
            'deskripsi' => 'required|string',
        ]);

        // Update the Produk instance with the validated data
        $produk->update($request->all());

        // Redirect back to the Produk index with a success message
        return redirect()->route('produks.index')
            ->with('success', 'Produk updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produk $produk)
    {
        $produk->delete();

        return redirect()->route('produks.index')
            ->with('success', 'Produk deleted successfully.');
    }
}
