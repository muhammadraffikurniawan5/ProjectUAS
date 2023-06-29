<?php

namespace App\Http\Controllers;

use App\Models\KategoriProduk;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{

    public function index()
    {
        $produk = new Produk();
        return view('admin.produk.produk', ['produk' => $produk->getAllData(),]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = KategoriProduk::all();
        $produk = Produk::all();

        return view('admin.produk.createProduk', compact('kategori', 'produk'));
    }


    public function store(Request $request)
    {
        $produk = new Produk();
        $produk->kode = $request->kode;
        $produk->nama = $request->nama;
        $produk->harga_jual = $request->harga_jual;
        $produk->harga_beli = $request->harga_beli;
        $produk->stok = $request->stok;
        $produk->min_stok = $request->min_stok;
        $produk->deskripsi = $request->deskripsi;
        $produk->kategori_produk_id = $request->kategori_produk_id;

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = $file->store('public/images/products');
            $produk->foto = $file->hashName();
        }

        $produk->save();

        return redirect('manage/produk');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kategori_produk = DB::table('kategori_produk')->get();
        $produk = DB::table('produk')->where('id', $id)->get();

        return view('admin.produk.editProduk', compact('produk', 'kategori_produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {


        $produk = Produk::find($request->id);
        $produk->kode = $request->kode;
        $produk->nama = $request->nama;
        $produk->harga_jual = $request->harga_jual;
        $produk->harga_beli = $request->harga_beli;
        $produk->stok = $request->stok;
        $produk->min_stok = $request->min_stok;
        $produk->deskripsi = $request->deskripsi;
        $produk->kategori_produk_id = $request->kategori_produk_id;

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = $file->store('public/images/products');
            $produk->foto = $file->hashName();
        }

        $produk->save();

        $kategori_produk = KategoriProduk::find($request->kategori_produk_id);

        return redirect('manage/produk');
    }


    public function destroy(string $id)
    {

        DB::table('produk')->where('id', $id)->delete();
        return redirect('manage/produk');
    }
}
