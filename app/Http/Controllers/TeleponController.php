<?php

namespace App\Http\Controllers;

use App\Models\Telepon;
use App\Models\Pengguna;
use Illuminate\Http\Request;

class TeleponController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datatelepon = Telepon::all();

        return view('telepon.indextelepon', compact('datatelepon'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $datapengguna = Pengguna::all();
        return view('telepon.createtelepon', compact('datapengguna'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
        [
            'nomor' => 'required|string|max:255',
        ],
        [
            'nomor.required' => 'Nomor tidak boleh kosong!',
        ]);

        $telepon = new Telepon;
        $telepon->nomor       =$request->nomor;
        $telepon->id_pengguna =$request->id_pengguna;
        $telepon->save();

        session()->flash('success', 'Data Berhasil Ditambahkan');
        return redirect()->route('telepon.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $telepon = Telepon::findOrFail($id);
        return view('telepon.showtelepon', compact('telepon'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         $datatelepon = Telepon::findOrFail($id);
         $datapengguna = Pengguna::all();
         return view('telepon.edittelepon', compact('datatelepon', 'datapengguna'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $request->validate([
            'nomor' => 'required|string|max:255',
        ], [
            'nomor.required' => 'Nomor tidak boleh kosong!',
        ]);

        $datatelepon = Telepon::findOrFail($id);
        $datatelepon->nomor         =$request->nomor;
        $datatelepon->id_pengguna   =$request->id_pengguna;
        $datatelepon->save();

        session()->flash('success', 'Data Berhasil Dirubah');
        return redirect()->route('telepon.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $telepon = Telepon::findOrFail($id);

        $telepon->delete();
        return redirect()->route('telepon.index')->with('success', 'Data Berhasil Dihapus');
    }
}
