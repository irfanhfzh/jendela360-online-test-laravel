<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Dealer Mobil 360</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/pricing/">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets') }}/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    
    <!-- Custom styles for this template -->
    <link href="{{ asset('css') }}/pricing.css" rel="stylesheet">
  </head>
  <body>    
        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal">Dealer Mobil 360</h5>
        @guest            
        <a class="btn btn-outline-primary mr-3" href="{{ route('login') }}">Login</a>
        <a class="btn btn-outline-primary" href="{{ route('register') }}">Register</a>
        @endguest
        @auth
          <a class="nav-link text-dark mr-3" href="#">Welcome, {{auth()->user()->name}}</a>
          <a class="btn btn-outline-primary" href="{{route('logout')}}">Logout</a>
        @endauth
        </div>

        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Data Mobil</h1>
        </div>

        <div class="container">
            @yield('content')

        <footer class="pt-4 my-md-5 pt-md-5 border-top">
            <div class="row">
            <div class="col-12 col-md">            
                <small class="d-block mb-3 text-center">Irfan Hafizh &copy; 2021</small>
            </div>
            </div>
        </footer>
        </div>    
  </body>
</html>
