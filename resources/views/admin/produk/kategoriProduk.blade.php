@extends('admin.layouts.app')

@section('content')
    @if (Auth::user()->role != 'pelanggan')
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
                    <li class="breadcrumb-item"><a href="{{ url('manage/kategoriProduk') }}">Kategori Produk</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tabel Kategori Produk</li>
                </ol>
            </nav>
            <div class="d-flex justify-content-between w-100 flex-wrap">
                <div class="mb-3 mb-lg-0">
                    <h1 class="h4">Data kategori Produk</h1>
                    <p class="mb-0">Berisi data kategori produk penjualan.</p>
                </div>
                @if (Auth::user()->role == 'admin')
                    <div>
                        <a href="{{ url('manage/kategoriProduk/create') }}"
                            class="btn btn-outline-gray-600 d-inline-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-plus-circle">
                                <circle cx="12" cy="12" r="10" />
                                <line x1="12" y1="8" x2="12" y2="16" />
                                <line x1="8" y1="12" x2="16" y2="12" />
                            </svg>
                            Tambah kategori Produk
                        </a>
                    </div>
                @endif
            </div>
        </div>

        <div class="card border-0 shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-centered table-nowrap mb-0 rounded">
                        <thead class="thead-light">
                            <tr>
                                <th class="border-0 rounded-start">No</th>
                                <th class="border-0">Nama</th>
                                <th class="border-0 rounded-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp

                            @foreach ($kategori_produk as $kategori)
                                <!-- Item -->
                                <tr>
                                    <td>{{ $no }}</td>
                                    <td>{{ $kategori->nama }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ url('manage/kategoriProduk/edit/' . $kategori->id) }}"
                                                class="btn btn-success">Edit</a>
                                            @if (Auth::user()->role == 'admin')
                                                <a href="{{ url('manage/kategoriProduk/delete/' . $kategori->id) }}"
                                                    class="btn btn-danger ms-2">Delete</a>
                                            @endif
                                        </div>
                                    </td>
                                </tr>

                                @php
                                    $no++;
                                @endphp
                            @endforeach
                            <!-- End of Item -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endif
@endsection
