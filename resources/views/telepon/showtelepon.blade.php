@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Data Telepon</div>

                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                    <div class="mb-3">
                        <label>Nomor</label>
                        <input type="text" class="form-control" name="nomor" value="{{$telepon->nomor}}" disabled>
                    </div>
                     <div class="mb-3">
                        <label>Id Pengguna</label>
                        <input type="text" class="form-control" name="id_pengguna" value="{{$telepon->id_pengguna}}" disabled>
                    </div>
                    <a href="{{route('telepon.index')}}" type="submit" class="btn btn-primary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection