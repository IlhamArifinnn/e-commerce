<?php

namespace App\Http\Controllers;

use App\Models\KategoriTokoh;
use App\Models\Produk;
use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonis = Testimoni::all();
        return view('testimonis.index', compact('testimonis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $produks = Produk::all();
        $kategoriTokohs = KategoriTokoh::all();
        return view('testimonis.create', compact('produks', 'kategoriTokohs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'nama_tokoh' => 'required|string|max:45',
            'komentar' => 'required|string|max:200',
            'rating' => 'required|integer',
            'produk_id' => 'required|exists:produks,id',
            'kategori_tokoh_id' => 'required|exists:kategori_tokohs,id',
        ]);

        Testimoni::create($request->all());

        return redirect()->route('testimonis.index')
            ->with('success', 'Testimoni created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimoni $testimoni)
    {
        return view('testimonis.show', compact('testimoni'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimoni $testimoni)
    {
        $produks = Produk::all();
        $kategoriTokohs = KategoriTokoh::all();

        // Check if the authenticated user is admin
        if (Auth::user()->role == 'admin') {
            return view('testimonis.edit', compact('testimoni', 'produks', 'kategoriTokohs'));
        }

        // If user is not admin, check if they are the author of the testimonial
        if ($testimoni->user_id == Auth::id()) {
            return view('testimonis.edit', compact('testimoni', 'produks', 'kategoriTokohs'));
        }

        // If neither admin nor testimonial author, return unauthorized view or redirect
        abort(403, 'Unauthorized action.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimoni $testimoni)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'nama_tokoh' => 'required|string|max:45',
            'komentar' => 'required|string|max:200',
            'rating' => 'required|integer',
            'produk_id' => 'required|exists:produks,id',
            'kategori_tokoh_id' => 'required|exists:kategori_tokohs,id',
        ]);

        // Check if the authenticated user is admin
        if (Auth::user()->role == 'admin') {
            $testimoni->update($request->all());
            return redirect()->route('testimonis.index')
                ->with('success', 'Testimoni updated successfully.');
        }

        // If user is not admin, check if they are the author of the testimonial
        if ($testimoni->user_id == Auth::id()) {
            $testimoni->update($request->all());
            return redirect()->route('testimonis.index')
                ->with('success', 'Testimoni updated successfully.');
        }

        // If neither admin nor testimonial author, return unauthorized view or redirect
        abort(403, 'Unauthorized action.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimoni $testimoni)
    {
        // Check if the authenticated user is admin
        if (Auth::user()->role == 'admin') {
            $testimoni->delete();
            return redirect()->route('testimonis.index')
                ->with('success', 'Testimoni deleted successfully.');
        }

        // If user is not admin, check if they are the author of the testimonial
        if ($testimoni->user_id == Auth::id()) {
            $testimoni->delete();
            return redirect()->route('testimonis.index')
                ->with('success', 'Testimoni deleted successfully.');
        }

        // If neither admin nor testimonial author, return unauthorized view or redirect
        abort(403, 'Unauthorized action.');
    }
}
