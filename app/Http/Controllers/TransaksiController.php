<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Pembeli;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaksi = Transaksi::all();

        return view('transaksi.indextransaksi', compact('transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $barangs = Barang::all();
        $pembelis = Pembeli::all();
        return view('transaksi.createtransaksi', compact('barangs', 'pembelis'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tanggal_transaksi' => 'required|string|max:255',
            'jumlah' => 'required|string|max:255',
            'total_harga' => 'required|string|max:255',
            'id_barang' => 'required|string|max:255',
            'id_pembeli' => 'required|string|max:255',
        ], [
            'tanggal_transaksi.required' => 'Tanggal Transaksi tidak boleh kosong!',
            'jumlah.required' => 'Jumlah tidak boleh kosong!',
            'total_harga.required' => 'Total Harga tidak boleh kosong!',
            'id_barang.required' => 'Id Barang tidak boleh kosong!',
            'id_pembeli.required' => 'Id Pembeli tidak boleh kosong!',
        ]);

        $transaksi = new Transaksi;
        $transaksi->tanggal_transaksi       =$request->input('tanggal_transaksi');
        $transaksi->jumlah       =$request->input('jumlah');
        $transaksi->total_harga      =$request->input('total_harga');
        $transaksi->id_barang      =$request->input('id_barang');
         $transaksi->id_pembeli     =$request->input('id_pembeli');

        $transaksi->save();

        session()->flash('success', 'Data Berhasil Ditambahkan');
        return redirect()->route('transaksi.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $barangs = Barang::all();
        $pembelis = Pembeli::all();
        return view('transaksi.showtransaksi', compact('transaksi', 'barangs', 'pembelis'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $transaksi = Transaksi::findOrFail($id);
         $barangs = Barang::all();
        $pembelis = Pembeli::all();
        return view('transaksi.edittransaksi', compact('transaksi', 'barangs', 'pembelis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'tanggal_transaksi' => 'required|string|max:255',
            'jumlah' => 'required|string|max:255',
            'total_harga' => 'required|string|max:255',
            'id_barang' => 'required|string|max:255',
            'id_pembeli' => 'required|string|max:255',
        ], [
            'tanggal_transaksi.required' => 'Tanggal Transaksi tidak boleh kosong!',
            'jumlah.required' => 'Jumlah tidak boleh kosong!',
            'total_harga.required' => 'Total Harga tidak boleh kosong!',
            'id_barang.required' => 'Id Barang tidak boleh kosong!',
            'id_pembeli.required' => 'Id Pembeli tidak boleh kosong!',
        ]);

        $transaksi = Transaksi::findOrFail($id);
        $transaksi->tanggal_transaksi       =$request->input('tanggal_transaksi');
        $transaksi->jumlah       =$request->input('jumlah');
        $transaksi->total_harga      =$request->input('total_harga');
        $transaksi->id_barang      =$request->input('id_barang');
        $transaksi->id_pembeli     =$request->input('id_pembeli');

        $transaksi->save();

        session()->flash('success', 'Data Berhasil Ditambahkan');
        return redirect()->route('transaksi.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $transaksi = Transaksi::findOrFail($id);

        $transaksi->delete();
        return redirect()->route('transaksi.index')->with('success', 'Data Berhasil Dihapus');
    }
}
