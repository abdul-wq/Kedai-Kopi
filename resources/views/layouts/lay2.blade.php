<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @yield('header')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{url('css/home.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amaranth:ital@1&display=swap" rel="stylesheet">
   

    <title>@yield('title')</title>
  </head>
  <body>

<!-- Navbar -->
@yield('nav')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
  
    <div class="navbar-nav ml-auto">
      @guest
          <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>
          @if (Route::has('register'))
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>
          @endif
      @else
       <a class="nav-item nav-link mr-3" href="/home">Home</a>
        <a class="nav-item nav-link mr-3" href="/produk">Produk</a>
        <a class="nav-item nav-link mr-3" href="/checkout">Check Out</a>
          <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
              </div>
          </li>
      @endguest
    </div>
  </div>
</nav>


@yield('slideshow')
<!-- SlideShow -->
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{url('img/kopi.png')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      	<span class="span">
      		<h1>Nikmati Harimu Bersama Kedai <b>Kopi.Kulo</b></h1>
        	<h3>Lorem Ipsum dolor sit amet.</h3>
      	</span>
      </div>
    </div>
    <div class="carousel-item">
    <img src="{{url('img/kopi2.png')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
       <span class="span">
      		<h1>First slide label</h1>
        	<h3>Lorem Ipsum dolor sit amet.</h3>
      	</span>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{url('img/kopi1.png')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
       <span class="span">
      		<h1>First slide label</h1>
        	<h3>Lorem Ipsum dolor sit amet.</h3>
      	</span>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

@yield('panel')
 <div class="container mb-5">
<!--  	Info panel -->
 <div class="row d-flex justify-content-center">
 	<div class="col-lg-9 info-panel">
        <div class="row">
          <div class="col-lg">
            <img class="imgpanel" src="{{url('img/member.png')}}">
            <h4 class="text-tunggal">20 Anggota</h4>
            <p class="text-tunggal">Lorem ipsum dolor sit amet.</p>
          </div>
          <div class="col-lg">
            <img class="imgpanel" src="{{url('img/member.png')}}">
            <h4 class="text-tunggal">20 anggota</h4>
            <p class="text-tunggal">Lorem ipsum dolor sit amet.</p>
          </div>
          <div class="col-lg">
            <img class="imgpanel" src="{{url('img/member.png')}}">
            <h4 class="text-tunggal">20 anggota</h4>
            <p class="text-tunggal">Lorem ipsum dolor sit amet.</p>
          </div>
        </div>
      </div>
  </div>
 <!--  Akhir Info Panel -->
@yield('konten')





@yield('footer')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>