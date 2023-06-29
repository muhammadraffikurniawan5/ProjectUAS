<?php

namespace App\Http\Controllers;

use App\Models\KategoriProduk;
use App\Models\Produk;
use Illuminate\Http\Request;

class DashboardUserController extends Controller
{
    public function index()
    {
        $produk = new Produk();
        return view('user.dashboard', ['produk' => $produk->getAllData(),]);
    }
}
