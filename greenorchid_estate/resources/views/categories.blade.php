
@extends('layouts.main')
@section('container')
<h2 class="mb-5">Categories</h1>

    <div class="row">

    @foreach ($categories as $category)
   
        <div class="col-md-4">
            <a href="/posts?category={{$category->slug}}">
        <div class="card text-bg-dark">
        <img src="https://images.unsplash.com/photo-1669046222569-a7672da06e12?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80?{{$category->name}}" class="card-img" alt="{{$category->name}}">
        <div class="card-img-overlay d-flex align-items-center p-0">
            <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color:rgba(0,0,0, 0.1)">{{$category->name}}</h5>
          
        </div>
        </div>
        </a>
        </div>
        @endforeach
    </div>
    
</div>
<!-- @foreach($categories as $category)
<ul>
    <li>
    <h2><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h2>
    </li>
</ul>



@endforeach -->
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

