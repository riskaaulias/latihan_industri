@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Murid</div>

                <div class="card-body">
                    <form action="{{ route('murid.update', $murid->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama_lengkap" value="{{$murid->nama_lengkap}}">
                    </div>
                    <div class="mb-3">
                        <label>Jenis Kelamin</label>
                        <select name="jenis_kelamin" id=""  class="form-control" value="{{$murid->jenis_kelamin}}">
                            <option value=""></option>
                            <option value="perempuan">Perempuan</option>
                             <option value="laki-laki">Laki-laki<murid>
                        </select>
                        
                    </div>
                     <div class="mb-3">
                        <label>Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tanggal_lahir" value="{{$murid->tanggal_lahir}}">
                    </div>
                    <div class="mb-3">
                        <label>Tempat Lahir</label>
                        <input type="text" class="form-control" name="tempat_lahir" value="{{$murid->tempat_lahir}}">
                    </div>
                     <div class="mb-3">
                        <label>Agama</label>
                         <select name="agama" id="" class="form-control" value="{{$murid->agama}}">
                            <option value=""></option>
                            <option value="islam">Islam</option>
                             <option value="hindu">Hindu</option>
                              <option value="kristen">Kristen</option>
                            <option value="buddha">Buddha</option>
                        </select>
                       
                    </div>
                    <div class="mb-3">
                        <label>Alamat</label>
                        <input type="text" class="form-control" name="alamat" value="{{$murid->alamat}}">
                    </div>
                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" value="{{$murid->email}}">
                    </div>
                    <div class="mb-3">
                        <label>Id Kelas</label>
                        <input type="text" class="form-control" name="id_kelas" value="{{$murid->id_kelas}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection