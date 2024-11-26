<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function index()
    {
        $drivers = Driver::all();
        return view('admin.drivers.index', compact('drivers'));
    }

    public function create()
    {
        return view('admin.drivers.create');
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
            $filePath = $request->file('image')->store('drivers', 'public');
            $validated['image_url'] = $filePath;
        }

        Driver::create($validated);

        return redirect()->route('admin.drivers.index')->with('success', 'Driver added successfully!');
    }

    public function edit(Driver $driver)
    {
        return view('admin.drivers.edit', compact('driver'));
    }

    public function update(Request $request, Driver $driver)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:drivers,email,' . $driver->id,
            'phone' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($driver->image_url) {
                Storage::disk('public')->delete($driver->image_url);
            }

            $filePath = $request->file('image')->store('drivers', 'public');
            $validated['image_url'] = $filePath;
        }

        $driver->update($validated);

        return redirect()->route('admin.drivers.index')->with('success', 'Driver updated successfully!');
    }

    public function destroy(Driver $driver)
    {
        if ($driver->image_url) {
            Storage::disk('public')->delete($driver->image_url);
        }

        $driver->delete();

        return redirect()->route('admin.drivers.index')->with('success', 'Driver deleted successfully!');
    }
}
