<?php

namespace App\Http\Controllers;

use App\Models\KategoriProduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = new KategoriProduk();
        return view('admin.produk.kategoriProduk', ['kategori_produk' => $kategori->getAllData(),]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = KategoriProduk::all();


        return view('admin.produk.createKategori');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kategori = new KategoriProduk();
        $kategori->nama = $request->nama;
        $kategori->save();

        return redirect('manage/kategoriProduk');
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
        $kategori_produk = DB::table('kategori_produk')->where('id', $id)->get();

        return view('admin.produk.editKategori', compact('kategori_produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $kategori = KategoriProduk::find($request->id);
        $kategori->nama = $request->nama;
        $kategori->save();

        return redirect('manage/kategoriProduk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('kategori_produk')->where('id', $id)->delete();
        return redirect('manage/kategoriProduk');
    }
}
