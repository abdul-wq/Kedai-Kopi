@extends('layouts/lay2')

@section('header')

@section('title', 'Kedai Kopi Kulo')

@section('nav')

@section('slideshow')

@section('konten')

<div class="container">
  <div class="row mt-5 mb-5">
    <div class="col-lg-12"> 
      <div class="card">
        <div class="card-header"><h4> Halaman Check-Out </h4></div> 
        <div class="card-body">
          <?php $no = 1; ?>
          <table class="table">
              <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Jumlah</th>
                <th>Jumlah Harga</th>
                <th>Aksi</th>
              </tr>
              @foreach($pesanan_detail as $pd)
              <tr>
                <td>{{$no++}}</td>
                <td>{{$pd->nama}}</td>
                <td>{{$pd->jumlah_pesan}}</td>
                <td>{{$pd->jumlah_harga}}</td>
                <td>
                  <a href="" class="btn btn-danger"> Hapus </a>
                </td>
              </tr>
              @endforeach
               <tr>
                <td colspan="2">Total Harga</td>
                <td>:</td>
                <td>Rp.{{number_format($pesan->jumlah_harga)}}</td>
                <td><a href="/konfirmasi" class="btn btn-success"> Check-Out </a></td>
              </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@section('footer')