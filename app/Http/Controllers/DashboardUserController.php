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

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        $produk = Produk::where('nama', 'like', '%' . $keyword . '%')
            ->orWhere('kode', 'like', '%' . $keyword . '%')
            ->orWhereHas('kategori_produk', function ($query) use ($keyword) {
                $query->where('id', $keyword);
            })
            ->get();

        return view('user.dashboard', compact('produk'));
    }
}
