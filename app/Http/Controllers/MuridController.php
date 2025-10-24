<?php

namespace App\Http\Controllers;

use App\Models\Murid;
use App\Models\Kelas;
use Illuminate\Http\Request;

class MuridController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $murid = Murid::all();

        return view('murid.indexmurid', compact('murid'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kelas = Kelas::all();
        return view('murid.createmurid', compact('kelas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $request->validate(
            [
            'nama_lengkap'  => 'required|string|max:255',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required|date',
            'tempat_lahir'  => 'required|string',
            'agama'         => 'required|string',
            'alamat'        => 'required|string',
            'email'         => 'required|email',
            'id_kelas'      => 'required|string'
        ], [
            'nama_lengkap.required'  => 'Nama tidak boleh kosong!',
            'jenis_kelamin.required' => 'Jenis kelamin tidak boleh kosong!',
            'tanggal_lahir.required' => 'Tanggal lahir tidak boleh kosong!',
            'tempat_lahir.required'  => 'Tempat lahir tidak boleh kosong!',
            'agama.required'         => 'Agama tidak boleh kosong!',
            'alamat.required'        => 'Alamat tidak boleh kosong!',
            'email.required'         => 'Email tidak boleh kosong!',
            'id_kelas.required'      => 'Email tidak boleh kosong!'
        ]);

        $murid                   =new Murid;
        $murid->nama_lengkap     =$request->input('nama_lengkap');
        $murid->jenis_kelamin    =$request->input('jenis_kelamin');
        $murid->tanggal_lahir    =$request->input('tanggal_lahir');
        $murid->tempat_lahir     =$request->input('tempat_lahir');
        $murid->agama            =$request->input('agama');
        $murid->alamat           =$request->input('alamat');
        $murid->email            =$request->input('email');
        $murid->id_kelas         =$request->input('id_kelas');

        $murid->save();
      
             
            session()->flash('success', 'Data Berhasil Ditambahkan');
            return redirect()->route('murid.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $murid = Murid::findOrFail($id);
        return view('murid.showmurid', compact('murid'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         $murid = Murid::findOrFail($id);
         return view('murid.editmurid', compact('murid'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
            'nama_lengkap'  => 'required|string|max:255',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required|date',
            'tempat_lahir'  => 'required|string',
            'agama'         => 'required|string',
            'alamat'        => 'required|string',
            'email'         => 'required|email',
            'id_kelas'      => 'required|string'
        ], [
            'nama_lengkap.required'  => 'Nama tidak boleh kosong!',
            'jenis_kelamin.required' => 'Jenis kelamin tidak boleh kosong!',
            'tanggal_lahir.required' => 'Tanggal lahir tidak boleh kosong!',
            'tempat_lahir.required'  => 'Tempat lahir tidak boleh kosong!',
            'agama.required'         => 'Agama tidak boleh kosong!',
            'alamat.required'        => 'Alamat tidak boleh kosong!',
            'email.required'         => 'Email tidak boleh kosong!',
            'id_kelas.required'      => 'Email tidak boleh kosong!'
        ]);

        $murid = Murid::findOrFail($id);
        $murid->nama_lengkap     =$request->input('nama_lengkap');
        $murid->jenis_kelamin    =$request->input('jenis_kelamin');
        $murid->tanggal_lahir    =$request->input('tanggal_lahir');
        $murid->tempat_lahir     =$request->input('tempat_lahir');
        $murid->agama            =$request->input('agama');
        $murid->alamat           =$request->input('alamat');
        $murid->email            =$request->input('email');
        $murid->id_kelas         =$request->input('id_kelas');

        $murid->save();
      
             
            session()->flash('success', 'Data Berhasil Ditambahkan');
            return redirect()->route('murid.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $murid = Murid::findOrFail($id);

        $murid->delete();
        return redirect()->route('murid.index')->with('success', 'Data Berhasil Dihapus');
    }
}
