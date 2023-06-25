@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3 class="text-center">Selamat {{ Auth::user()->name }}, Anda berhasil melakukan registrasi</h3>

            <h5 class="text-center">Silahkan Logout dan login kembali.</h5>
        </div>
    </div>
</div>
@endsection
