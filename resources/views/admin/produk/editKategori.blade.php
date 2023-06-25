@extends('admin.layouts.app')

@section('content')
    {{-- ini halaman tambah produk --}}

    <div class="mt-3 mb-3 text-center">
        <h3>Edit Data Kategori Produk</h3>
    </div>

    @foreach ($kategori_produk as $value)
        <form action="{{ url('manage/kategoriProduk/update/' . $value->id) }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama</label>
                <div class="col-8">
                    <input id="nama" name="nama" value="{{ $value->nama }}" type="text" class="form-control"
                        spellcheck="false" data-ms-editor="true">
                </div>
            </div>

            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-success">Edit Data</button>
                </div>
            </div>
        </form>
    @endforeach
@endsection
