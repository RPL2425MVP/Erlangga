<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Paket;

class PaketController extends Controller
{
    public function index()
    {
        $paket = Paket::all();
        return view('admin.paket.index', compact('paket'));
    }

    public function create()
    {
        return view('admin.paket.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_paket' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'harga' => 'required|numeric',
        ]);

        Paket::create($request->all());
        return redirect()->route('admin.paket.index')->with('success', 'Paket berhasil ditambahkan.');
    }

    public function edit(Paket $paket)
    {
        return view('admin.paket.edit', compact('paket'));
    }

    public function update(Request $request, Paket $paket)
    {
        $request->validate([
            'nama_paket' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'harga' => 'required|numeric',
        ]);

        $paket->update($request->all());
        return redirect()->route('admin.paket.index')->with('success', 'Paket berhasil diperbarui.');
    }

    public function destroy(Paket $paket)
    {
        $paket->delete();
        return redirect()->route('admin.paket.index')->with('success', 'Paket berhasil dihapus.');
    }
}
