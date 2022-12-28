
@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <h1 class="mb-3">{{ $post->title }}</h1>

        <p>By. <a href="/posts?author={{ $post->author->username}}" class="text-decoration-none">{{$post->author->name}}</a> 
        in <a href="/posts?category={{$post->category->slug}}" 
        class="text-decoration-none">{{$post->category->name}}</a></p>

        @if($post->image)
            <div style="max-height: 900px; overflow:hidden;">
            <img src="{{asset('storage/' . $post->image)}}" alt="{{$post->category->name}}" class="img-fluid ">    
            </div>
            @else
            <img src="https://images.unsplash.com/photo-1669046222569-a7672da06e12?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80?{{$post->category->name}}" alt="{{$post->category->name}}" class="img-fluid ">    
            @endif
<article classs="my-3 fs-5">
        {!! $post->body !!}
        </article>
        
<a href ="/posts" class="d-block mt-3">Back to Posts<a>
    </div>
</div>



@endsection

