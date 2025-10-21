<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BiodatasController extends Controller
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
        $biodatas = Biodata::all();

        return view('biodata.indexbiodata', compact('biodatas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('biodata.createbiodata');
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
            'telepon'       => 'required|string',
            'email'         => 'required|email'
        ], [
            'nama_lengkap.required'  => 'Nama tidak boleh kosong!',
            'jenis_kelamin.required' => 'Jenis kelamin tidak boleh kosong!',
            'tanggal_lahir.required' => 'Tanggal lahir tidak boleh kosong!',
            'tempat_lahir.required'  => 'Tempat lahir tidak boleh kosong!',
            'agama.required'         => 'Agama tidak boleh kosong!',
            'alamat.required'        => 'Alamat tidak boleh kosong!',
            'telepon.required'       => 'Telepon tidak boleh kosong!',
            'email.required'         => 'Email tidak boleh kosong!'
        ]);

        $biodatas                   =new Biodata;
        $biodatas->nama_lengkap     =$request->input('nama_lengkap');
        $biodatas->jenis_kelamin    =$request->input('jenis_kelamin');
        $biodatas->tanggal_lahir    =$request->input('tanggal_lahir');
        $biodatas->tempat_lahir     =$request->input('tempat_lahir');
        $biodatas->agama            =$request->input('agama');
        $biodatas->alamat           =$request->input('alamat');
        $biodatas->telepon          =$request->input('telepon');
        $biodatas->email            =$request->input('email');

         if ($request->hasFile('cover')) {
            $img = $request->file('cover');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/biodata', $name);
            $biodatas->cover = $name;
        }
        
        $biodatas->save();
             
            session()->flash('success', 'Data Berhasil Ditambahkan');
            return redirect()->route('biodata.index');
            
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $biodatas = Biodata::findOrFail($id);
        return view('biodata.showbiodata', compact('biodatas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $biodatas = Biodata::findOrFail($id);
        return view('biodata.editbiodata', compact('biodatas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $biodatas = Biodata::findOrFail($id);
        $biodatas->nama_lengkap     =$request->nama_lengkap;
        $biodatas->jenis_kelamin    =$request->jenis_kelamin;
        $biodatas->tanggal_lahir    =$request->tanggal_lahir;
        $biodatas->tempat_lahir     =$request->tempat_lahir;
        $biodatas->agama            =$request->agama;
        $biodatas->alamat           =$request->alamat;
        $biodatas->telepon          =$request->telepon;
        $biodatas->email            =$request->email;

        if ($request->hasFile('cover')) {
            $img = $request->file('cover');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/biodata', $name);
            $biodatas->cover = $name;
        }
        
        $biodatas->save();

        session()->flash('success', 'Data Berhasil Dirubah');
        return redirect()->route('biodata.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $biodatas = Biodata::findOrFail($id);

        if($biodatas->cover) {
            $filePath = public_path('images/biodata/' . $biodatas->cover);
            if (File::exists($filePath)){
                File::delete($filePath);
            }
        }
        $biodatas->delete();
         return redirect()->route('biodata.index')->with('success', 'Data Berhasil Dihapus');
    }
}
