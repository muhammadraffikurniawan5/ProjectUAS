@extends('admin.layouts.app')

@section('content')
    @if (Auth::user()->role != 'manager')
        {{-- ini halaman tambah produk --}}

        <div class="mt-3 mb-3 text-center">
            <h3>Tambah Data Produk</h3>
        </div>

        <form action="{{ url('manage/produk/store') }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="kode" class="col-4 col-form-label">Kode</label>
                <div class="col-8">
                    <input id="kode" name="kode" type="text" class="form-control" spellcheck="false"
                        placeholder="Masukan kode barang" data-ms-editor="true" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama</label>
                <div class="col-8">
                    <input id="nama" name="nama" type="text" class="form-control" spellcheck="false"
                        placeholder="Masukan Nama" data-ms-editor="true" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="harga_jual" class="col-4 col-form-label">Harga Jual</label>
                <div class="col-8">
                    <input id="harga_jual" name="harga_jual" type="number" class="form-control" spellcheck="false"
                        placeholder="Masukan Harga Jual Barang" data-ms-editor="true" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="harga_beli" class="col-4 col-form-label">Harga Beli</label>
                <div class="col-8">
                    <input id="harga_beli" name="harga_beli" type="number" class="form-control" spellcheck="false"
                        placeholder="Masukan Harga Beli Barang" data-ms-editor="true" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="stok" class="col-4 col-form-label">Stok</label>
                <div class="col-8">
                    <input id="stok" name="stok" type="number" class="form-control" spellcheck="false"
                        placeholder="Masukan Stok Barang" data-ms-editor="true" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="min_stok" class="col-4 col-form-label">Min Stok</label>
                <div class="col-8">
                    <input id="min_stok" name="min_stok" type="number" class="form-control" spellcheck="false"
                        placeholder="Masukan Minimal Stok" data-ms-editor="true" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label>
                <div class="col-8">
                    <textarea id="deskripsi" name="deskripsi" cols="40" rows="5" class="form-control" spellcheck="false"
                        placeholder="Masukan Deskripsi Barang" data-ms-editor="true" required></textarea>
                </div>
            </div>
            <div class="form-group row mt-2">
                <label for="kategori_produk_id" class="col-4 col-form-label">Kategori Produk</label>
                <div class="col-8">
                    <select id="kategori_produk_id" name="kategori_produk_id" class="form-select">
                        @foreach ($kategori as $value)
                            <option value="{{ $value->id }}">{{ $value->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group row mt-2">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    @endif
@endsection
