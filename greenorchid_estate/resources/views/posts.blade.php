@extends('layouts.main')
@section('container')
<h1 class="mb-3 text-center">{{$title}}</h1>
<div class="row justify-content-center mb-3">
  <div class="col-md-6">
    <form action="/posts">

      @if(request('category'))
      <input type="hidden" name="category" value="{{request('category')}}">
      @endif
      @if(request('author'))
      <input type="hidden" name="author" value="{{request('author')}}">
      @endif
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search.." name="search" value="{{request('search')}}">
        <button class="btn btn-danger" type="submit">Search</button>
      </div>
    </form>
  </div>
</div>


@if($posts->count())
<div class="card mb-3">
  @if($posts[0]->image)
  <div class="text-center">
    <div style="max-height: 900px; overflow:hidden;">
      <img src="{{asset('storage/' . $posts[0]->image)}}" alt="{{$posts[0]->category->name}}" class="img-fluid ">
    </div>
  </div>
  @else
  <img src="https://images.unsplash.com/photo-1669046222569-a7672da06e12?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80?{{$posts[0]->category->name}}" class="card-img-top" alt="{{$posts[0]->category->name}}">
  @endif


  <div class="card-body text-center">
    <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{$posts[0]->title}}</a></h3>
    <p>
      <small class="text-muted">
        <small class="text-muted"> By. <a href="/posts?author={{$posts[0]->author->username}}" class="text-decoration-none">{{$posts[0]->author->name}}</a>
          in <a href="/posts?category={{$posts[0]->category->slug}}" class="text-decoration-none">{{$posts[0]->category->name}}</a>{{$posts[0]->created_at->diffForHumans()}}
        </small>
    </p>
    <p class="card-text">{{$posts[0]->excerpt}}</p>
    <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
  </div>
</div>



  <div class="row">
    @foreach($posts->skip(1) as $post)

    <div class="col-md-4 mb-3">
      <div class="card">
        <div class="position-absolute bg-dark px-3 py-2 text-white" style="background-color:rgba (0,0,0,0.7)"><a href="/posts?category={{$post->category->slug}}" class="text-white text-decoration-none">{{$post->category->name}}</a></div>

        @if($post->image)

        <img src="{{asset('storage/' . $post->image)}}" alt="{{$post->category->name}}" class="img-fluid ">

        @else
        <img src="https://images.unsplash.com/photo-1669046222569-a7672da06e12?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80?{{$post->category->name}}" class="card-img-top" alt="{{$post->category->name}}">
        @endif


        <div class="card-body">
          <h5 class="card-title">{{ $post->title }}</h5>
          <p>
            <small class="text-muted"> By. <a href="/posts?author={{ $post->author->username}}" class="text-decoration-none">{{$post->author->name}}</a>
              {{$post->created_at->diffForHumans()}}
            </small>
          </p>
          <p class="card-text">{{ $post->excerpt}}</p>
          <div class="p-1 pb-0">
            <h5 class="text-primary mb-3">{{ $post->price }}</h5>
            @if(request('price'))
      <input type="hidden" name="price" value="{{request('price')}}">
      @endif


          </div>
          <div class="d-flex border-top">
            <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>{{ $post->area }}</small>
            @if(request('area'))
      <input type="hidden" name="area" value="{{request('area')}}">
      @endif
            <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>{{ $post->bed }}</small>
            <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>{{ $post->bath}}</small>
          </div>
        
          <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read more</a>

        </div>
      </div>
    </div>
    @endforeach
 
</div>
@else
<p class="text-center fs-4">No post found.</p>
@endif

<div class="d-flex justify-content-end">
  {{$posts->links()}}
</div>
</div>
<!-- Footer Start -->
<div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
  <div class="container py-5">
    <div class="row g-5">
      <div class="col-lg-3 col-md-6">
        <h5 class="text-white mb-4">Get In Touch</h5>
        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jl. Soekarno Hatta No.36, Kota Malang</p>
        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>0341475669</p>
        <p class="mb-2"><i class="fa fa-envelope me-3"></i>www.greenorchidrecidence.com</p>
        <div class="d-flex pt-2">
          <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
          <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
          <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>

        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <h5 class="text-white mb-4">Quick Links</h5>
        <a class="btn btn-link text-white-50" href="/about">About Us</a>
        <a class="btn btn-link text-white-50" href="/posts">Property</a>
        <a class="btn btn-link text-white-50" href="/facilities">Facilities</a>
        <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
        <a class="btn btn-link text-white-50" href="">Terms & Condition</a>
      </div>
      <div class="col-lg-3 col-md-6">
        <h5 class="text-white mb-4">Photo Gallery</h5>
        <div class="row g-2 pt-2">
          <div class="col-4">
            <img class="img-fluid rounded bg-light p-1" src="{{asset('assets/img/g1.jpeg')}}" alt="">
          </div>
          <div class="col-4">
            <img class="img-fluid rounded bg-light p-1" src="{{asset('assets/img/g2.jpeg')}}" alt="">
          </div>
          <div class="col-4">
            <img class="img-fluid rounded bg-light p-1" src="{{asset('assets/img/g3.jpeg')}}" alt="">
          </div>
          <div class="col-4">
            <img class="img-fluid rounded bg-light p-1" src="{{asset('assets/img/g4.jpeg')}}" alt="">
          </div>
          <div class="col-4">
            <img class="img-fluid rounded bg-light p-1" src="{{asset('assets/img/g5.jpeg')}}" alt="">
          </div>
          <div class="col-4">
            <img class="img-fluid rounded bg-light p-1" src="{{asset('assets/img/g6.jpeg')}}" alt="">
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <h5 class="text-white mb-4">Newsletter</h5>
        <p>Green Orchid official</p>
        <div class="position-relative mx-auto" style="max-width: 400px;">

        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="copyright">
      <div class="row">
        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
          &copy; <a class="border-bottom" href="#">greenorchidrecidence</a>, All Right Reserved.


        </div>
        <div class="col-md-6 text-center text-md-end">
          <div class="footer-menu">
            <a href="">Home</a>
            <a href="">Cookies</a>
            <a href="">Help</a>
            <a href="">FQAs</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Footer End -->
<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

@endsection