<?php

namespace App\Http\Controllers;

use App\Models\Celana;
use Illuminate\Http\Request;

class CelanaController extends Controller
{
    public function index()
    {
        $celanas = Celana::all();
        return view('index', compact('celanas'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'ukuran' => 'required',
            'harga' => 'required|integer',
            'stok' => 'required|integer',
        ]);

        Celana::create($request->all());
        return redirect()->route('celanas.index')->with('success', 'Celana berhasil ditambahkan.');
    }

    public function show(Celana $celana)
    {
        return view('show', compact('celana'));
    }

    public function edit(Celana $celana)
    {
        return view('edit', compact('celana'));
    }

    public function update(Request $request, Celana $celana)
    {
        $request->validate([
            'nama' => 'required',
            'ukuran' => 'required',
            'harga' => 'required|integer',
            'stok' => 'required|integer',
        ]);

        $celana->update($request->all());
        return redirect()->route('celanas.index')->with('success', 'Celana berhasil diperbarui.');
    }

    public function destroy(Celana $celana)
    {
        $celana->delete();
        return redirect()->route('celanas.index')->with('success', 'Celana berhasil dihapus.');
    }
}
