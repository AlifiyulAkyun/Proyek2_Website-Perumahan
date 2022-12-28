@extends('layouts.main')

@section('container')


<div class="container">
  <div class="row justify-content-center">


    <div class="col-xl-10 col-lg-12 col-md-9">

      <div class="card o-hidden border-0 shadow-lg my-5">

        <div class="card-body p-0">
          <div class="row">

            <div class="col-lg-4 d-none d-lg-block ">
              <img src="../img/GO1.jpeg" class="img-thumbnail" alt="Masuk">
            </div>

            <div class="col-md-6">
             
              <main class="form-signin w-100 m-auto">

              <br>

                <div class="text-center">
                @if(session()->has('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success')}}
              </div>
              @endif

              @if(session()->has('loginError'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError')}}
              </div>
              @endif

        
                  <h1 class="h3 mb-5 fw-normal">Welcome Back !</h1>
                </div>
        

                <form action="/login" method="post">
                  @csrf
                  <div class="form">
                    <label for="email">Email <span class="text-danger">*</span></label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" autofocus required>

                  </div>
                  <br>
                  <div class="form">
                    <label for="password">Password <span class="text-danger">*</span></label>
                    <input type="password" name="password" class="form-control " id="password" placeholder="Password" required>

                  </div>
                  <br>

                  <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>

                </form>
                <div class=" text-center py-3">
                  <div class="small"><a href="/register">
                      <h6>Need an account? Sign up!</h6>
                    </a></div>
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