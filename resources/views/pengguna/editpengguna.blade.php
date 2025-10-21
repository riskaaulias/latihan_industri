@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Pengguna</div>

                <div class="card-body">
                    <form action="{{ route('pengguna.update', $penggunas->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                         @method('PUT')
                    <div class="mb-3">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama" value="{{$penggunas->nama}}">
                         @error('nama')
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