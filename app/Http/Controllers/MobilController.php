<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mobils = Mobil::all();
        return view('admin.mobil.index', compact('mobils'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.mobil.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kategori' => 'required|string|max:255',
            'no_polisi' => 'required|string|max:255|unique:mobils',
            'merk_type' => 'required|string|max:255',
            'noka' => 'required|string|max:255',
            'nosin' => 'required|string|max:255',
            'tahun_pembuatan' => 'required|integer',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('mobil_images', 'public');
        }

        Mobil::create($data);

        return redirect()->route('admin.mobil.index')->with('success', 'Mobil berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mobil $mobil)
    {
        return view('admin.mobil.show', compact('mobil'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mobil $mobil)
    {
        return view('admin.mobil.edit', compact('mobil'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mobil $mobil)
    {
        $request->validate([
            'kategori' => 'required|string|max:255',
            'no_polisi' => 'required|string|max:255|unique:mobils,no_polisi,' . $mobil->id,
            'merk_type' => 'required|string|max:255',
            'noka' => 'required|string|max:255',
            'nosin' => 'required|string|max:255',
            'tahun_pembuatan' => 'required|integer',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($mobil->gambar) {
                Storage::disk('public')->delete($mobil->gambar);
            }
            $data['gambar'] = $request->file('gambar')->store('mobil_images', 'public');
        }

        $mobil->update($data);

        return redirect()->route('admin.mobil.index')->with('success', 'Mobil berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mobil $mobil)
    {
        if ($mobil->gambar) {
            Storage::disk('public')->delete($mobil->gambar);
        }

        $mobil->delete();

        return redirect()->route('admin.mobil.index')->with('success', 'Mobil berhasil dihapus.');
    }
}
