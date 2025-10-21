@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Biodata</div>

                <div class="card-body">
                    <form action="{{ route('biodata.update', $biodatas->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama_lengkap" value="{{$biodatas->nama_lengkap}}">
                    </div>
                    <div class="mb-3">
                        <label>Jenis Kelamin</label>
                        <select name="jenis_kelamin" id=""  class="form-control" value="{{$biodatas->jenis_kelamin}}">
                            <option value=""></option>
                            <option value="perempuan">Perempuan</option>
                             <option value="laki-laki">laki-laki</option>
                        </select>
                        
                    </div>
                     <div class="mb-3">
                        <label>Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tanggal_lahir" value="{{$biodatas->tanggal_lahir}}">
                    </div>
                    <div class="mb-3">
                        <label>Tempat Lahir</label>
                        <input type="text" class="form-control" name="tempat_lahir" value="{{$biodatas->tempat_lahir}}">
                    </div>
                     <div class="mb-3">
                        <label>Agama</label>
                         <select name="agama" id="" class="form-control" value="{{$biodatas->agama}}">
                            <option value=""></option>
                            <option value="islam">islam</option>
                             <option value="hindu">hindu</option>
                              <option value="kristen">Kristen</option>
                            <option value="buddha">Buddha</option>
                        </select>
                       
                    </div>
                    <div class="mb-3">
                        <label>Alamat</label>
                        <input type="text" class="form-control" name="alamat" value="{{$biodatas->alamat}}">
                    </div>
                     <div class="mb-3">
                        <label>Telepon</label>
                        <input type="text" class="form-control" name="telepon" value="{{$biodatas->telepon}}">
                    </div>
                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" value="{{$biodatas->email}}">
                    </div>
                     <div class="mb-3">
                        <img src="{{ asset('/images/biodata/' . $biodatas->cover) }}" width="100">
                    </div>
                     <div class="mb-3">
                        <label>Cover</label>
                        <input type="file" class="form-control" name="cover">
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection