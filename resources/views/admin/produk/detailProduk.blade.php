@extends('admin.layouts.app')

@section('content')
    <div class="py-4">
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                <li class="breadcrumb-item">
                    <a href="#">
                        <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                            </path>
                        </svg>
                    </a>
                </li>
                <li class="breadcrumb-item"><a href="#">Produk</a></li>
                <li class="breadcrumb-item active"><a href="{{ url('/manage/produk') }}">Tabel Produk</a></li>
                <li class="breadcrumb-item active" aria-current="page">Detail Produk</li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">Detail Produk</h1>
                <p class="mb-0">Berisi detail produk.</p>
            </div>
            @if (Auth::user()->role == 'admin')
                <div>
                    <a href="{{ url('manage/produk/delete/' . $produk->id) }}"
                        class="btn btn-danger d-inline-flex align-items-center">
                        Delete Produk
                    </a>
                </div>
            @endif
        </div>
    </div>


    <div class="row">
        <div class="col-12 col-xl-4">
            <div class="row">
                <div class="col-12 mb-4">
                    <div class="card shadow border-0 text-center p-0">
                        <div class="card-body pb-5">
                            <img src="{{ asset('storage/images/products/' . $produk->foto) }}" class="img"
                                alt="Product img" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-xl-8">
            <div class="card card-body border-0 shadow mb-4">
                <h2 class="h5 mb-4">General information</h2>
                <h3>{{ $produk->nama }}</h3>
                <p><span class="text-secondary text-bold">Deskripsi : </span><span>{{ $produk->deskripsi }}</span></p>
                @if ($kategori_produk)
                    <p><span class="text-secondary text-bold">Kategori: </span><span>{{ $kategori_produk->nama }}</span></p>
                @endif
                <p><span class="text-secondary text-bold">Harga : </span><span>Rp. {{ $produk->harga_jual }}</span></p>
                <p><span class="text-secondary text-bold">Stok Produk : </span><span>{{ $produk->stok }}</span></p>
            </div>
        </div>
    </div>
@endsection
