<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $kelas = Kelas::all();

        return view('kelas.indexkelas', compact('kelas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kelas.createkelas');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'nama_kelas' => 'required|string|max:255',
        ], [
            'nama_kelas.required' => 'Nama Kelas tidak boleh kosong!',
        ]);

        $kelas = new Kelas;
        $kelas->nama_kelas       =$request->input('nama_kelas');
        $kelas->save();

        session()->flash('success', 'Data Berhasil Ditambahkan');
        return redirect()->route('kelas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kelas = Kelas::findOrFail($id);
        return view('kelas.showkelas', compact('kelas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kelas = Kelas::findOrFail($id);
        return view('kelas.editkelas', compact('kelas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_kelas' => 'required|string|max:255',
        ], [
            'nama_kelas.required' => 'Nama Kelas tidak boleh kosong!',
        ]);

        $kelas = Kelas::findOrFail($id);
        $kelas->nama_kelas     =$request->nama_kelas;
        $kelas->save();

        session()->flash('success', 'Data Berhasil Dirubah');
        return redirect()->route('kelas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kelas = Kelas::findOrFail($id);

        $kelas->delete();
        return redirect()->route('kelas.index')->with('success', 'Data Berhasil Dihapus');
    }
}
