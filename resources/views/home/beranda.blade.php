@extends('lay/lay')

@section('header')

@section('title', 'Kedai Kopi Kulo')

@section('nav')

@section('slideshow')

@section('panel')

@section('konten')
<h2 class="mt-5 text-tunggal" align="center"> Produk Kami</h2>

<div class="row justify-content-center mt-3">
<div class="col-lg-6">
<form>
  <div class="input-group mb-3">
  <input type="text" name="cari" class="form-control" autocomplete="off" placeholder="Cari Kopi Favoritmu disini..." aria-describedby="button-addon2">
  <div class="input-group-append">
    <button class="btn btn-outline-secondary cari" type="button" id="button-addon2">Cari</button>
  </div>
</div>
</form>
</div>
</div>

<div class="row d-flex justify-content-center">
<div class="col-lg-11">
  <div class="row">
	<div class="col-lg">
   		<div class="card mt-3">
   			<img class="card-img-top" src="{{url('img/cup_kopi1.png')}}" alt="Card image cap">
     		<div class="card-body">
			<h5 class="card-title text-tunggal">Judul Kopi</h5>
			<h6 class="card-subtitle mb-2 text-muted text-tunggal">Keterangan</h6>
			<a href="#" class="tombol float-right">Lihat </a>
		</div>
	</div>
</div>
<div class="col-lg">
    <div class="card mt-3">
    	 <img class="card-img-top" src="{{url('img/cup_kopi1.png')}}" alt="Card image cap">
     	<div class="card-body">
    		<h5 class="card-title text-tunggal">Judul Kopi</h5>
    		<h6 class="card-subtitle mb-2 text-muted text-tunggal">Keterangan</h6>
    		<a href="#" class="tombol float-right">Lihat </a>
  		</div>
	</div>
</div>
<div class="col-lg">
    <div class="card mt-3">
    	 <img class="card-img-top" src="{{url('img/cup_kopi1.png')}}" alt="Card image cap">
     	<div class="card-body">
    		<h5 class="card-title text-tunggal">Nama Kopi</h5>
			<h6 class="card-subtitle mb-2 text-muted text-tunggal">Keterangan</h6>
    		<a href="#" class="tombol float-right">Lihat </a>
  		</div>
	</div>
</div>
</div>
</div>
</div>
<!-- Akhir Row -->


<h2 class="mt-5 text-tunggal" align="center"> Tentang Kami</h2>
<div class="row">
	<div class="col-lg-6 gambarproduk">
		<img src="{{url('img/kopi2.svg')}}">
	</div>
	<div class="col-lg-6">
		<div class="produk">
			<h4>Keterangan Produk</h4>
		</div>
	</div>
</div>
</div>
<!--  Akhir Container -->

@endsection

@section('footer')