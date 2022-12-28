@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Post</h1>
</div>

<div class="col lg-8">
<form method="post" action="/dashboard/posts/{{$post->slug}}" class="mb-5" enctype="multipart/form-data">
    @method('put')    
    @csrf
   
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error ('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{old('title', $post->title)}}">
            @error('title')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control @error ('slug') is-invalid @enderror" id="slug" name="slug" required value="{{old('slug', $post->slug)}}">
            @error('slug')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select class="form-select" name="category_id">
                @foreach($categories as $category)
                @if(old('category_id', $post->category_id) == $category->id)
                <option value="{{$category->id}}" selected>{{$category->name}}</option>
                @else
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endif
                @endforeach

            </select>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control @error ('price') is-invalid @enderror" id="price" name="price" required autofocus value="{{old('price', $post->price)}}">
            @error('price')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="area" class="form-label">Area</label>
            <input type="text" class="form-control @error ('area') is-invalid @enderror" id="area" name="area" required autofocus value="{{old('area', $post->area)}}">
            @error('area')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="bed" class="form-label">Bed</label>
            <input type="text" class="form-control @error ('bed') is-invalid @enderror" id="bed" name="bed" required autofocus value="{{old('bed', $post->bed)}}">
            @error('bed')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="bath" class="form-label">Bath</label>
            <input type="text" class="form-control @error ('bath') is-invalid @enderror" id="bath" name="bath" required autofocus value="{{old('bath', $post->bath)}}">
            @error('bath')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Post Image</label>
            <input type="hidden" name="oldImage" value="{{$post->image}}">

            @if($post->image)
            <img src="{{asset('storage/' .$post->image)}}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
            @else
            <img class="img-preview img-fluid mb-3 col-sm-5">
            @endif
          
            <input class="form-control @error ('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
            @error('image')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            @error('body')
            <p class="text-danger">{{$message}}</p>
            @enderror
            <input id="body" type="hidden" name="body" value="{{old('body', $post->body)}}">
            <trix-editor input="body"></trix-editor>

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