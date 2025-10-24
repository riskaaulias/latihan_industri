<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barangs = Barang::all();

        return view('barang.indexbarang', compact('barangs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('barang.createbarang');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required|string|max:255',
            'merek' => 'required|string|max:255',
            'harga' => 'required|string|max:255',
            'stok' => 'required|string|max:255',
        ], [
            'nama_barang.required' => 'Nama tidak boleh kosong!',
            'merek.required' => 'Merek tidak boleh kosong!',
            'harga.required' => 'Harga tidak boleh kosong!',
            'stok.required' => 'Stok tidak boleh kosong!',
        ]);

        $barangs = new Barang;
        $barangs->nama_barang       =$request->input('nama_barang');
        $barangs->merek             =$request->input('merek');
        $barangs->harga             =$request->input('harga');
        $barangs->stok              =$request->input('stok');
        $barangs->save();

        session()->flash('success', 'Data Berhasil Ditambahkan');
        return redirect()->route('barang.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $barangs = Barang::findOrFail($id);
        return view('barang.showbarang', compact('barangs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $barangs = Barang::findOrFail($id);
        return view('barang.editbarang', compact('barangs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_barang' => 'required|string|max:255',
            'merek' => 'required|string|max:255',
            'harga' => 'required|string|max:255',
            'stok' => 'required|string|max:255',
        ], [
            'nama_barang.required' => 'Nama tidak boleh kosong!',
            'merek.required' => 'Merek tidak boleh kosong!',
            'harga.required' => 'Harga tidak boleh kosong!',
            'stok.required' => 'Stok tidak boleh kosong!',
        ]);

        $barangs = Barang::findOrFail($id);
        $barangs->nama_barang       =$request->input('nama_barang');
        $barangs->merek             =$request->input('merek');
        $barangs->harga             =$request->input('harga');
        $barangs->stok              =$request->input('stok');
        $barangs->save();

        session()->flash('success', 'Data Berhasil Ditambahkan');
        return redirect()->route('barang.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $barangs = Barang::findOrFail($id);

        $barangs->delete();
        return redirect()->route('barang.index')->with('success', 'Data Berhasil Dihapus');
    }
}
