<?php

namespace App\Http\Controllers;

use App\Models\Pembeli;
use Illuminate\Http\Request;

class PembeliController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pembelis = Pembeli::all();

        return view('pembeli.indexpembeli', compact('pembelis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('pembeli.createpembeli');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_pembeli' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string|max:255',
            'telepon' => 'required|string|max:255',
        ], [
            'nama_pembeli.required' => 'Nama tidak boleh kosong!',
            'jenis_kelamin.required' => 'Merek tidak boleh kosong!',
            'telepon.required' => 'Harga tidak boleh kosong!',
        ]);

        $pembelis = new Pembeli;
        $pembelis->nama_pembeli       =$request->input('nama_pembeli');
        $pembelis->jenis_kelamin      =$request->input('jenis_kelamin');
        $pembelis->telepon            =$request->input('telepon');
        $pembelis->save();

        session()->flash('success', 'Data Berhasil Ditambahkan');
        return redirect()->route('pembeli.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pembelis = Pembeli::findOrFail($id);
        return view('pembeli.showpembeli', compact('pembelis'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pembelis = Pembeli::findOrFail($id);
        return view('pembeli.editpembeli', compact('pembelis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_pembeli' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string|max:255',
            'telepon' => 'required|string|max:255',
        ], [
            'nama_pembeli.required' => 'Nama tidak boleh kosong!',
            'jenis_kelamin.required' => 'Merek tidak boleh kosong!',
            'telepon.required' => 'Harga tidak boleh kosong!',
        ]);

        $pembelis = Pembeli::findOrFail($id);
        $pembelis->nama_pembeli       =$request->input('nama_pembeli');
        $pembelis->jenis_kelamin      =$request->input('jenis_kelamin');
        $pembelis->telepon            =$request->input('telepon');
        $pembelis->save();

        session()->flash('success', 'Data Berhasil Ditambahkan');
        return redirect()->route('pembeli.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pembelis = Pembeli::findOrFail($id);

        $pembelis->delete();
        return redirect()->route('pembeli.index')->with('success', 'Data Berhasil Dihapus');
    }
}
