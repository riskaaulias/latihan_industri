@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Data pembeli</div>

                <div class="card-body">
                    <form action="{{ route('pembeli.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                    <div class="mb-3">
                        <label>Nama Pembeli</label>
                        <input type="text" class="form-control" name="nama_pembeli" placeholder="Nama Pembeli">
                         @error('nama_pembeli')
                        <small style="color:red;">{{ $message }}</small><br>
                         @enderror
                    </div>
                    <div class="mb-3">
                            <label>Jenis Kelamin : </label>
                            <input type="radio" name="jenis_kelamin" value= "Laki-laki" >Laki-laki
                            <input type="radio" name="jenis_kelamin" value= "Perempuan" >Perempuan
                             @error('jenis_kelamin')
                            <small style="color:red"> {{$message}} </small>                                
                            @enderror
                        </div>
                    <div class="mb-3">
                        <label>Telepon</label>
                        <input type="text" class="form-control" name="telepon" placeholder="Telepon">
                         @error('telepon')
                        <small style="color:red;">{{ $message }}</small><br>
                         @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection