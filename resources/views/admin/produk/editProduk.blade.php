@extends('admin.layouts.app')

@section('content')
    {{-- ini halaman tambah produk --}}

    <div class="mt-3 mb-3 text-center">
        <h3>Tambah Edit Data</h3>
    </div>

    @foreach ($produk as $prod)
        <form action="{{ url('manage/produk/update/' . $prod->id) }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="kode" class="col-4 col-form-label">Kode</label>
                <div class="col-8">
                    <input id="kode" name="kode" value="{{ $prod->kode }}" type="text" class="form-control"
                        spellcheck="false" data-ms-editor="true">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama</label>
                <div class="col-8">
                    <input id="nama" name="nama" value="{{ $prod->nama }}" type="text" class="form-control"
                        spellcheck="false" data-ms-editor="true">
                </div>
            </div>
            <div class="form-group row">
                <label for="harga_jual" class="col-4 col-form-label">Harga Jual</label>
                <div class="col-8">
                    <input id="harga_jual" name="harga_jual" value="{{ $prod->harga_jual }}" type="text"
                        class="form-control" spellcheck="false" data-ms-editor="true">
                </div>
            </div>
            <div class="form-group row">
                <label for="harga_beli" class="col-4 col-form-label">Harga Beli</label>
                <div class="col-8">
                    <input id="harga_beli" name="harga_beli" value="{{ $prod->harga_beli }}" type="text"
                        class="form-control" spellcheck="false" data-ms-editor="true">
                </div>
            </div>
            <div class="form-group row">
                <label for="stok" class="col-4 col-form-label">Stok</label>
                <div class="col-8">
                    <input id="stok" name="stok" value="{{ $prod->stok }}" type="text" class="form-control"
                        spellcheck="false" data-ms-editor="true">
                </div>
            </div>
            <div class="form-group row">
                <label for="min_stok" class="col-4 col-form-label">Min Stok</label>
                <div class="col-8">
                    <input id="min_stok" name="min_stok" value="{{ $prod->min_stok }}" type="text" class="form-control"
                        spellcheck="false" data-ms-editor="true">
                </div>
            </div>
            <div class="form-group row">
                <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label>
                <div class="col-8">
                    <textarea id="deskripsi" name="deskripsi" cols="40" rows="5" class="form-control" spellcheck="false"
                        data-ms-editor="true">{{ $prod->deskripsi }}</textarea>
                </div>
            </div>
            <div class="form-group row mt-3">
                <label for="formFile" class="col-4 col-form-label">Foto Produk</label>
                <div class="col-8">
                    <input class="form-control" name="foto" type="file" id="formFile">
                </div>
            </div>
            <div class="form-group row mt-2">
                <label for="kategori_produk_id" class="col-4 col-form-label">Kategori Produk</label>
                <div class="col-8">
                    <select id="kategori_produk_id" name="kategori_produk_id" class="form-select">
                        @foreach ($kategori_produk as $value)
                            <option value="{{ $value->id }}" @if ($value->id == $prod->kategori_produk_id) selected @endif>
                                {{ $value->nama }}</option>
                        @endforeach
                    </select>

                </div>
            </div>
            <div class="form-group row mt-2">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-success">Simpan Data</button>
                </div>
            </div>
        </form>
    @endforeach
@endsection
