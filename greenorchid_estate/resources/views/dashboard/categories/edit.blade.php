@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Post</h1>
</div>

<div class="col lg-8">
<form method="post" action="/dashboard/categories/{{$post->slug}}" class="mb-5" enctype="multipart/form-data">
    @method('put')    
    @csrf
   
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control @error ('nama') is-invalid @enderror" id="nama" name="nama" required autofocus value="{{old('nama', $post->nama)}}">
            @error('nama')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>


        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            @error('deskripsi')
            <p class="text-danger">{{$message}}</p>
            @enderror
            <input id="deskripsi" type="hidden" name="deskripsi" value="{{old('deskripsi', $post->deskripsi)}}">
            <trix-editor input="deskripsi"></trix-editor>

        </div>


        <button type="submit" class="btn btn-primary">Update Post</button>
    </form>
</div>
<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');
    const price = document.querySelector('#price');
    const area = document.querySelector('#area');
    const bed = document.querySelector('#bed');
    const bath = document.querySelector('#bath');

    title.addEventListener('change', function() {
        fetch('/dashboard/posts/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
            .then(harga => price.value = harga.price)
    });

    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    })

    function previewImage() {
        
        const image=document.querySelector('#image');
        const imgPreview=document.querySelector('.img-preview');

        imgPreview.style.display='block';

        const ofReader = new FileReader();
        ofReader.readAsDataURL(image.files[0]);

        ofReader.onload = function(oFREvent){
            imgPreview.src=of=oFREvent.target.result;
        }
    }
</script>
@endsection