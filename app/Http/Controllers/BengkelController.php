<?php

namespace App\Http\Controllers;

use App\Models\Bengkel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class BengkelController extends Controller
{
    public function index()
    {
        $bengkels = Bengkel::all();
        return view('admin.bengkels.index', compact('bengkels'));
    }

    public function create()
    {
        return view('admin.bengkels.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:drivers',
            'phone' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $filePath = $request->file('image')->store('bengkels', 'public');
            $validated['image_url'] = $filePath;
        }

        Bengkel::create($validated);

        return redirect()->route('admin.bengkels.index')->with('success', 'Bengkel added successfully!');
    }

    public function edit(Bengkel $bengkel)
    {
        return view('admin.bengkels.edit', compact('bengkel'));
    }

    public function update(Request $request, Bengkel $bengkel)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:drivers,email,' . $driver->id,
            'phone' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($bengkel->image_url) {
                Storage::disk('public')->delete($bengkel->image_url);
            }

            $filePath = $request->file('image')->store('bengkels', 'public');
            $validated['image_url'] = $filePath;
        }

        $bengkel->update($validated);

        return redirect()->route('admin.bengkels.index')->with('success', 'Bengkel updated successfully!');
    }

    public function destroy(Bengkel $bengkel)
    {
        if ($bengkel->image_url) {
            Storage::disk('public')->delete($bengkel->image_url);
        }

        $bengkel->delete();

        return redirect()->route('admin.bengkels.index')->with('success', 'Bengkel deleted successfully!');
    }
}
