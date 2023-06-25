@extends('admin.layouts.app')

@section('content')
    {{-- ini halaman tambah produk --}}

    <div class="mt-3 mb-3 text-center">
        <h3>Tambah Data Pesanan</h3>
    </div>

    <form action="{{ url('manage/pesanan/store') }}" method="POST">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="tanggal" class="col-4 col-form-label">Tanggal</label>
            <div class="col-8">
                <input id="tanggal" name="tanggal" type="date" class="form-control" spellcheck="false"
                    data-ms-editor="true" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Customer</label>
            <div class="col-8">
                <input id="nama_pemesan" name="nama_pemesan" type="text" class="form-control" spellcheck="false"
                    placeholder="Masukan nama costumer" data-ms-editor="true" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="harga_jual" class="col-4 col-form-label">Alamat</label>
            <div class="col-8">
                <textarea id="alamat_pemesan" name="alamat_pemesan" cols="40" rows="5" class="form-control"
                    placeholder="Masukan alamat costumer" spellcheck="false" data-ms-editor="true" required></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="harga_beli" class="col-4 col-form-label">No Telepon</label>
            <div class="col-8">
                <input id="no_hp" name="no_hp" type="number" class="form-control" spellcheck="false"
                    placeholder="Masukan no hp disini" data-ms-editor="true" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="stok" class="col-4 col-form-label">Email</label>
            <div class="col-8">
                <input id="email" name="email" type="email" class="form-control" spellcheck="false"
                    placeholder="Masukan alamat email" data-ms-editor="true" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="min_stok" class="col-4 col-form-label">Jumlah Pesanan</label>
            <div class="col-8">
                <input id="jumlah_pesanan" name="jumlah_pesanan" type="number" class="form-control" spellcheck="false"
                    placeholder="Masukan jumlah pesanan" data-ms-editor="true" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label>
            <div class="col-8">
                <textarea id="deskripsi" name="deskripsi" cols="40" rows="5" class="form-control" spellcheck="false"
                    placeholder="Masukan deskripsi barang disini" data-ms-editor="true" required></textarea>
            </div>
        </div>
        <div class="form-group row mt-2">
            <label for="produk_id" class="col-4 col-form-label">Produk</label>
            <div class="col-8">
                <select id="produk_id" name="produk_id" class="form-select">
                    @foreach ($produk as $value)
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
@endsection
