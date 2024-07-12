<?php

namespace App\Http\Controllers;

use App\Models\KategoriTokoh;
use Illuminate\Http\Request;

class KategoriTokohController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategoriTokohs = KategoriTokoh::all();
        return view('kategori_tokohs.index', compact('kategoriTokohs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kategori_tokohs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:45',
        ]);

        KategoriTokoh::create($request->all());

        return redirect()->route('kategori_tokohs.index')
            ->with('success', 'Kategori tokoh created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(KategoriTokoh $kategoriTokoh)
    {
        return view('kategori_tokohs.show', compact('kategoriTokoh'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KategoriTokoh $kategoriTokoh)
    {
        return view('kategori_tokohs.edit', compact('kategoriTokoh'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KategoriTokoh $kategoriTokoh)
    {
        $request->validate([
            'nama' => 'required|string|max:45',
        ]);

        $kategoriTokoh->update($request->all());

        return redirect()->route('kategori_tokohs.index')
            ->with('success', 'Kategori tokoh updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KategoriTokoh $kategoriTokoh)
    {
        $kategoriTokoh->delete();

        return redirect()->route('kategori_tokohs.index')
            ->with('success', 'Kategori tokoh deleted successfully.');
    }
}
