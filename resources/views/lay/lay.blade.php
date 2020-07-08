<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @yield('header')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
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
      <a class="nav-item nav-link" href="#">Home</a>
      <a class="nav-item nav-link" href="#">Produk</a>
      <a class="nav-item nav-link" href="#">Tentang</a>
      <a class="nav-item nav-link" href="#">Kontak</a>
      <a class="nav-item nav-link tombol" href="{{ route('login') }}">Masuk</a>
      <a class="nav-item nav-link tombol" href="{{ route('register') }}">Daftar</a>

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



@yield('copyright')
<div class="footer">
	<div class="row justify-content-center">
		<div class="col-lg-11">
			<h5 class="mt-3" align="center">Kontak Developer</h5>
			<div class="row">
				<div class="col-lg">
					<p>Ini bagian sosial Media</p>
				</div>
				<div class="col-lg">
					<p>Ini bagian Alamat</p>
				</div>
				<div class="col-lg">
					<p>Ini bagian kontak</p>
				</div>
			</div>
		</div>
	</div>
</div>

@yield('footer')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>