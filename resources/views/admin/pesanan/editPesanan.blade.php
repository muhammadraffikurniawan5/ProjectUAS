@extends('admin.layouts.app')

@section('content')
    {{-- ini halaman tambah produk --}}

    <div class="mt-3 mb-3 text-center">
        <h3>Tambah Data Pesanan</h3>
    </div>

    @foreach ($pesanan as $value)
        <form action="{{ url('manage/pesanan/update/' . $value->id) }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="tanggal" class="col-4 col-form-label">Tanggal</label>
                <div class="col-8">
                    <input id="tanggal" name="tanggal" value="{{ $value->tanggal }}" type="date" class="form-control" spellcheck="false"
                        data-ms-editor="true">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama_pemesan" class="col-4 col-form-label">Customer</label>
                <div class="col-8">
                    <input id="nama_pemesan" name="nama_pemesan" value="{{ $value->nama_pemesan }}" type="text" class="form-control" spellcheck="false"
                        data-ms-editor="true">
                </div>
            </div>
            <div class="form-group row">
                <label for="alamat_pemesan" class="col-4 col-form-label">Alamat</label>
                <div class="col-8">
                    <input id="alamat_pemesan" name="alamat_pemesan" value="{{ $value->alamat_pemesan }}" type="text" class="form-control" spellcheck="false" required
                        data-ms-editor="true">
                </div>
            </div>
            <div class="form-group row">
                <label for="no_hp" class="col-4 col-form-label">No Telepon</label>
                <div class="col-8">
                    <input id="no_hp" name="no_hp" value="{{ $value->no_hp }}" type="number" class="form-control" spellcheck="false"
                        data-ms-editor="true">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-4 col-form-label">Email</label>
                <div class="col-8">
                    <input id="email" name="email" value="{{ $value->email }}" type="email" class="form-control" spellcheck="false"
                        data-ms-editor="true">
                </div>
            </div>
            <div class="form-group row">
                <label for="jumlah_pesanan" class="col-4 col-form-label">Jumlah Pesanan</label>
                <div class="col-8">
                    <input id="jumlah_pesanan" name="jumlah_pesanan" value="{{ $value->jumlah_pesanan }}" type="text" class="form-control" spellcheck="false"
                        data-ms-editor="true">
                </div>
            </div>
            <div class="form-group row">
                <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label>
                <div class="col-8">
                    <input id="deskripsi" name="deskripsi" value="{{ $value->deskripsi }}" type="text" class="form-control" spellcheck="false"
                        data-ms-editor="true">
                </div>
            </div>
            <div class="form-group row">
                <label for="produk_id" class="col-4 col-form-label">Produk</label>
                <div class="col-8">
                    <select id="produk_id" name="produk_id" class="form-select">
                        @foreach ($produk as $p)
                            <option value="{{ $p->id }}">{{ $p->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Edit Data</button>
                </div>
            </div>
        </form>
    @endforeach
@endsection
