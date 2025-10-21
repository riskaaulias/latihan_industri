
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Data Post</div>

                <div class="card-body">
                    <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                    <div class="mb-3">
                        <label>Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Title">
                         @error('title')
                        <small style="color:red;">{{ $message }}</small><br>
                         @enderror
                    </div>
                    <div class="mb-3">
                        <label>Content</label>
                        <input type="text" class="form-control" name="content" placeholder="Content">
                        @error('content')
                        <small style="color:red;">{{ $message }}</small><br>
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