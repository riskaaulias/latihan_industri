@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Data Pengguna</div>

                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                    <div class="mb-3">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama" value="{{$penggunas->nama}}" disabled>
                         @error('nama')
                        <small style="color:red;">{{ $message }}</small><br>
                         @enderror
                    </div>
                    <a href="{{route('pengguna.index')}}" type="submit" class="btn btn-primary">Back</a>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection