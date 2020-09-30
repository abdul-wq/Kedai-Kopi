<?php

namespace App\Http\Controllers;
use App\Produk;
use Illuminate\Http\Request;

class HomeController extends Controller
{
 
    public function index()
    {
        $produk = Produk::paginate(16);
        return view('home/beranda', compact('produk'));
    }

}
