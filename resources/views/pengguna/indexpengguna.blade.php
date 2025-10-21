@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">Data Pengguna</div>

                <div class="card-body">

                @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                    <a href="{{ route('pengguna.create') }}" class="btn btn-primary">Add</a>
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Action</th>
                    </tr>
                    </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                    @foreach($penggunas as $data)
                    <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{$data->nama}}</td>
                    <td>
                        <a href="{{ route('pengguna.edit', $data->id) }}" class="btn btn-success">Edit</a>
                        <a href="{{ route('pengguna.show', $data->id) }}" class="btn btn-warning">Show</a>
                        <form action="{{ route('pengguna.destroy', $data->id) }}" method="POST">
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
