<?php

namespace App\Http\Controllers;

use App\Produk;
use App\Pesanan;
use App\Pesanandetail;
use Auth;
Use Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $produk = Produk::paginate(16);
        return view('user/home', compact('produk'));
    }

    public function show(Produk $produk)
    {
        
        return view('user/detail', compact('produk'));
    }


    public function create()
    {
        return view('produk/buatProduk');
    }


    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'keterangan' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'gambar' => 'required|mimes:jpeg,png,jpg,svg|max:1024',
        ]);

        $produk = new Produk;
        $produk->nama = $request->nama;
        $produk->keterangan = $request->keterangan;
        $produk->harga = $request->harga;
        $produk->stok = $request->stok;

        // $extension = $request->gambar->extension();
        $produk->gambar = $request->gambar->store('/public');
        $produk->save();
        alert()->success('Berhasil','Produk Baru Berhasil Di Tambahkan');
        return redirect('/home');
    }


    public function keranjang(Request $req, $id)
    {
        // dump($id);
        $produk= Produk::where('id', $id)->first();

        //Jika Jumlah Melebihi stok
        if ($req->jumlah > $produk->stok) {
            return redirect('/home');
        }

        $cek_pesan = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();

            $pesan = new Pesanan;
            $pesan->user_id = Auth::user()->id;
            $pesan->jumlah_harga = $produk->harga*$req->jumlah;
            $pesan->status = 0;
            $pesan->save();
            // echo "Ok";

        //menangkap pesanan berdasarkan id user
        $pesan_baru = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
        //cek pesan detail
        $cek_pesan_detail = Pesanandetail::where('produk_id', $produk->id)->where('pesanan_id',$pesan_baru->id)->first();

        if (empty($cek_pesan_detail)) { //jika tidak ada $cek_pesan detail maka buatkan pesanandetail baru
            $pesanan_detail= new Pesanandetail;
            $pesanan_detail->user_id = $pesan_baru->id;
            $pesanan_detail->produk_id = $produk->id;
            $pesanan_detail->pesanan_id = $pesan_baru->id;
            $pesanan_detail->jumlah_pesan = $req->jumlah;
            $pesanan_detail->jumlah_harga = $produk->harga*$req->jumlah;
            $pesanan_detail->save();
            // echo "OK";
        } else{ //Jika sudah ada, sekarang hituung total jumlah dan harga
            $pesanan_detail = Pesanandetail::where('produk_id', $produk->id)->where('pesanan_id',$pesan_baru->id)->first();
            $detail_harga_baru = $produk->harga*$req->jumlah; //Harga Sekarang

            $pesanan_detail->jumlah_pesan = $pesanan_detail->jumlah_pesan+$req->jumlah;
            $pesanan_detail->jumlah_harga = $pesanan_detail->jumlah_harga+$produk->harga*$req->jumlah;
            $pesanan_detail->update();
        }

        //Update ke tabel pesanan
        $pesan = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
        $pesan->jumlah_harga = $pesanan_detail->jumlah_harga+$produk->harga*$req->jumlah;
        $pesan->update();
        
         alert()->success('Berhasil','Produk berhasil masuk keranjang, Silahkan Check-out');
        return redirect('/checkout');
        
    }

    public function checkout()
    {
        $pesan = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
        if (!empty($pesan)) {
            $pesanan_detail = Pesanandetail::where('pesanan_id', $pesan->id)->get();
        }

        return view('user/checkout', compact('pesan', 'pesanan_detail'));
    }

    public function kurangi($id)
    {
        $pesanan_detail = Pesanandetail::where('id', $id)->first();
        $pesan = Pesanan::where('id', $pesanan_detail->pesanan_id)->first();
        $pesan->jumlah_harga = $pesan->jumlah_harga - $pesanan_detail->jumlah_harga;
        $pesan->update();

        return redirect('/checkout');
    }

    public function konfirmasi()
    {
        $pesan = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
        $pesan_id = $pesan->id;
        $pesan->status = 1;

        $pesanan_detail = Pesanandetail::where('pesanan_id', $pesan->id)->get();
        foreach ($pesanan_detail as $pd) {
            $produk = Produk::where('id', $pd->produk_id)->first();
            $produk->stok = $produk->stok - $pd->jumlah_pesan; //mengurangi stok setelah checkout
            $produk->update();
        }

        $pesan->update();

        alert()->success('Berhasil','Check-out Berhasil di lakukan');
        return redirect('/home');
    }

   
}
