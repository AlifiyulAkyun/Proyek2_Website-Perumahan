@extends('layouts.main')

@section('container')


<div class="container">
  <div class="row justify-content-center">

    <div class="col-xl-10 col-lg-14 col-md-12">

      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <div class="row">

            <div class="col-lg-6 d-none d-lg-block ">
              <img src="../img/GO1.jpeg" class="img-thumbnail" alt="Masuk">
            </div>
            <div class="col-md-5">
              <main class="form-signin w-100 m-auto">
             
                  <div class="text-center">

                   <br>
                    <h1 class="h4 mb-5 fw-normal">Create Account</h1>
                  </div>
             

                  <form action ="/register" method = "post">
                    @csrf
                  <div class="form">
                    <label for="name">Name <span class="text-danger">*</span></label>
                    
                    <input type="text" name="name" class="form-control @error('name')is-invalid @enderror" id="name" placeholder="Enter your name..." required value="{{ old('name')}}">
                    @error('name')
                    <div class="invalid-feedback">
                     {{ $message }}
                  </div>
                  @enderror
                    
                  </div>
                  <br>
                  <div class="form">
                    <label for="username">Username <span class="text-danger">*</span></label>
                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Enter your username..." required value="{{ old('username')}}">
                    @error('username')
                    <div class="invalid-feedback">
                     {{ $message }}
                  </div>
                  @enderror
                  
                  </div>
                  <br>
                  <div class="form">
                    <label for="email">Email <span class="text-danger">*</span></label>
                    <input type="email"  name="email" class="form-control @error('email')is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email')}}">
                    @error('email')
                    <div class="invalid-feedback">
                     {{ $message }}
                  </div>
                  @enderror
                   
                  </div>
                  <br>
                  <div class="form">

                    <label for="password">Password <span class="text-danger">*</span></label>
                    <input type="password"  name="password"  class="form-control @error('password')is-invalid @enderror"  id="password" placeholder="Password" required >
                    @error('password')
                    <div class="invalid-feedback">
                     {{ $message }}
                  </div>
                  @enderror
                    

                  </div>
                  <br>

                  <button class="w-100 btn btn-lg btn-primary" type="submit">Sign Up</button>

                </form>
                <div class=" text-center py-3">
                  <div class="small"><a href="/login"><h6>Alraedy have an account? Sign in!</h6></a></div>
                </div>
              </main>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



@endsection