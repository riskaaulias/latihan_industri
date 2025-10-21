@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Data Biodata</div>

                <div class="card-body">
                    <form action="{{ route('biodata.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                    <div class="mb-3">
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap">
                         @error('nama_lengkap')
                        <small style="color:red">{{ $message }}</small><br>
                         @enderror
                    </div>
                    <div class="mb-3">
                        <label>Jenis Kelamin:</label>
                        <select name="jenis_kelamin" id=""  class="form-control">
                            <option value=""></option>
                            <option value="perempuan">Perempuan</option>
                             <option value="laki-laki">Laki-laki</option>
                        </select>
                         @error('jenis_kelamin')
                        <small style="color:red">{{ $message }}</small><br>
                         @enderror
                    </div>
                     <div class="mb-3">
                        <label>Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir">
                         @error('tanggal_lahir')
                        <small style="color:red">{{ $message }}</small><br>
                         @enderror
                    </div>
                    <div class="mb-3">
                        <label>Tempat Lahir</label>
                        <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir">
                         @error('tempat_lahir')
                        <small style="color:red">{{ $message }}</small><br>
                         @enderror
                    </div>
                     <div class="mb-3">
                        <label>Agama</label>
                        <select name="agama" id=""  class="form-control">
                            <option value=""></option>
                            <option value="islam">Islam</option>
                            <option value="hindu">Hindu</option>
                            <option value="kristen">Kristen</option>
                            <option value="buddha">Buddha</option>
                        </select>
                         @error('agama')
                        <small style="color:red">{{ $message }}</small><br>
                         @enderror
                    </div>
                    <div class="mb-3">
                        <label>Alamat</label>
                        <input type="text" class="form-control" name="alamat" placeholder="Alamat">
                         @error('alamat')
                        <small style="color:red">{{ $message }}</small><br>
                         @enderror
                    </div>
                     <div class="mb-3">
                        <label>Telepon</label>
                        <input type="text" class="form-control" name="telepon" placeholder="Telepon">
                         @error('telepon')
                        <small style="color:red">{{ $message }}</small><br>
                         @enderror
                    </div>
                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Email">
                         @error('email')
                        <small style="color:red">{{ $message }}</small><br>
                         @enderror
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



