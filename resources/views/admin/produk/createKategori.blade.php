@extends('admin.layouts.app')

@section('content')
    {{-- ini halaman tambah produk --}}

    <div class="mt-3 mb-3 text-center">
        <h3>Tambah Data Kategori Produk</h3>
    </div>

    <form action="{{ url('manage/kategoriProduk/store') }}" method="POST">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama</label>
            <div class="col-8">
                <input id="nama" name="nama" type="text" class="form-control" spellcheck="false"
                    placeholder="Masukan Nama Kategori Produk" data-ms-editor="true" required>
            </div>
        </div>

        <div class="form-group row mt-2 mb-5">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
