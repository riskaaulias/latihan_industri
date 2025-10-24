@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Data Pembeli</div>

                <div class="card-body">

                @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                    <a href="{{ route('pembeli.create') }}" class="btn btn-primary">Add</a>
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nama Pembeli</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Telepon</th>
                    <th scope="col">Action</th>
                    </tr>
                    </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                    @foreach($pembelis as $data)
                    <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{$data->nama_pembeli}}</td>
                    <td>{{$data->jenis_kelamin}}</td>
                    <td>{{$data->telepon}}</td>
                    <td>
                        <a href="{{ route('pembeli.edit', $data->id) }}" class="btn btn-success">Edit</a>
                        <a href="{{ route('pembeli.show', $data->id) }}" class="btn btn-warning">Show</a>
                        <form action="{{ route('pembeli.destroy', $data->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin?')">Delete</button>
                        </form>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
