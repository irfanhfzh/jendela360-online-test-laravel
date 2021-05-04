<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Dealer Mobil 360</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/dashboard/">

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
    <link href="{{ asset('css') }}/dashboard.css" rel="stylesheet">
  </head>
  <body>    
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Dealer Mobil 360</a>
    <a href="/" class="text-light nav-link">Go to Home</a>
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="mr-0 text-light nav-link" href="#">Welcome, {{auth()->user()->name}}</a>
        </li>
    </ul>
    </nav>

    <div class="container-fluid">
        <div class="row">
          <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="sidebar-sticky pt-3">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('admin') }}">
                    <span data-feather="home"></span>
                    Dashboard
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('admin.customers') }}">
                    <span data-feather="users"></span>
                    Customers
                  </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.data-mobil') }}">
                        <span data-feather="shopping-cart"></span>
                        Data Mobil
                    </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('admin.manual-orders') }}">
                    <span data-feather="file"></span>
                    Manual Orders
                  </a>
                </li>
              </ul>
      
              <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>Others</span>
              </h6>
              <ul class="nav flex-column mb-2">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('logout') }}">
                    <span data-feather="power"></span>
                    Logout
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('laravel-version') }}">
                    <span data-feather="file-text"></span>
                    Laravel Version
                  </a>
                </li>
              </ul>
            </div>
          </nav>
      
          <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
              <h1 class="h2">@yield('name')</h1>
            </div>
            <div class="container">
                @yield('content')
            </div>
          </main>
        </div>
      </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="{{ asset('assets') }}/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="{{ asset('assets') }}/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
    <script src="{{ asset('js') }}/dashboard.js"></script>
  </body>
</html>
