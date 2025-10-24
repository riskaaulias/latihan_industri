@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Transaksi</div>

                <div class="card-body">
                    <form action="{{ route('transaksi.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                    <div class="mb-3">
                        <label>Tanggal Transaksi</label>
                        <input type="date" class="form-control" name="tanggal_transaksi" value="{{$transaksi->tanggal_transaksi}}" >
                         @error('tanggal_transaksi')
                        <small style="color:red">{{ $message }}</small><br>
                         @enderror
                    </div>
                     <div class="mb-3">
                        <label>Jumlah</label>
                        <input type="text" class="form-control" name="jumlah" value="{{$transaksi->jumlah}}" >
                         @error('jumlah')
                        <small style="color:red">{{ $message }}</small><br>
                         @enderror
                    </div>
                    <div class="mb-3">
                        <label>Total Harga</label>
                        <input type="text" class="form-control" name="total_harga" value="{{$transaksi->total_harga}}" >
                         @error('total_harga')
                        <small style="color:red">{{ $message }}</small><br>
                         @enderror
                    </div>
                     <div class="form-group">
                        <label>Nama Barang</label>
                        <select class="form-control" name="id_barang">
                            @foreach($barangs as $data)
                            <option value="{{ $data->id }}">{{ $data->nama_barang }}</option>
                            @endforeach
                        </select>
                    <div class="form-group">
                        <label>Nama Pembeli</label>
                        <select class="form-control" name="id_pembeli">
                            @foreach($pembelis as $data)
                            <option value="{{ $data->id }}">{{ $data->nama_pembeli }}</option>
                            @endforeach
                        </select>
                    <button type="submit" class="btn btn-primary">Save</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection



