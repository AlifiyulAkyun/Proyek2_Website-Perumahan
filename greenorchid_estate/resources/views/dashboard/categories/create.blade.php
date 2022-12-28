@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Post</h1>
</div>

<div class="col lg-8">
    <form method="post" action="/dashboard/categories" class="mb-5" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control @error ('nama') is-invalid @enderror" id="nama" name="nama" required autofocus value="{{old('nama')}}">
            @error('nama')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
       
       
       
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Desripsi</label>
            @error('deskripsi')
            <p class="text-danger">{{$message}}</p>
            @enderror
            <input id="deskripsi" type="hidden" name="deskripsi" value="{{old('deskripsi')}}">
            <trix-editor input="deskripsi"></trix-editor>

        </div>


        <button type="submit" class="btn btn-primary">Create Post</button>
    </form>
</div>
<script>
    const nama = document.querySelector('#nama');
    const deskripsi = document.querySelector('#deskripsi');

   nama.addEventListener('change', function() {
        fetch('/dashboard/categories/checkSlug?title=' +nama.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    })


   

    </script>
@endsection