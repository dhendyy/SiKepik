<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // Menampilkan daftar kategori
    public function index()
    {
        $categories = Category::all(); // Ambil semua data kategori dari database
        return view('admin.categorys.index', compact('categorys'));
    }

    // Menampilkan form tambah kategori
    public function create()
    {
        return view('admin.categorys.create');
    }

    // Menyimpan kategori baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        Category::create($request->all()); // Simpan data kategori
        return redirect()->route('admin.categorys.index')->with('success', 'Kategori berhasil ditambahkan.');
    }

    // Menampilkan form edit kategori
    public function edit(Category $category)
    {
        return view('admin.categorys.edit', compact('category'));
    }

    // Update data kategori
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        $category->update($request->all()); // Update data kategori
        return redirect()->route('admin.categorys.index')->with('success', 'Kategori berhasil diperbarui.');
    }

    // Hapus kategori dari database
    public function destroy(Category $category)
    {
        $category->delete(); // Hapus kategori
        return redirect()->route('admin.categorys.index')->with('success', 'Kategori berhasil dihapus.');
    }
}
