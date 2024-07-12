<?php

namespace App\Http\Controllers;

use App\Models\JenisProduk;
use Illuminate\Http\Request;

class JenisProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jenisProduks = JenisProduk::all();
        return view('jenis_produks.index', compact('jenisProduks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jenis_produks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:45',
        ]);

        JenisProduk::create($request->all());

        return redirect()->route('jenis_produks.index')
            ->with('success', 'Jenis produk created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(JenisProduk $jenisProduk)
    {
        return view('jenis_produks.show', compact('jenisProduk'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JenisProduk $jenisProduk)
    {
        return view('jenis_produks.edit', compact('jenisProduk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JenisProduk $jenisProduk)
    {
        $request->validate([
            'nama' => 'required|string|max:45',
        ]);

        $jenisProduk->update($request->all());

        return redirect()->route('jenis_produks.index')
            ->with('success', 'Jenis produk updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JenisProduk $jenisProduk)
    {
        $jenisProduk->delete();

        return redirect()->route('jenis_produks.index')
            ->with('success', 'Jenis produk deleted successfully.');
    }
}
