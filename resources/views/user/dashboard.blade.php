<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Personal Web</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('user/assets/favicon.ico') }}" />
    <!-- Custom Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('user/css/styles.css') }}" rel="stylesheet" />
    <script src="{{ asset('user/js/script.js') }}"></script>
</head>

<body class="d-flex flex-column h-100">
    <div class="parallax">
        <h3>Ini halaman dashboard penjualan user</h3>
    </div>

    <style>
        .parallax {
            background-image: url('{{ asset('images/laptop.jpg') }}');
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            min-height: 400px;
        }

        .parallax h3 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 30px;
            font-weight: bold;
            text-align: center;
        }

        body {
            background-color: #A9A9A9;
        }

        .dropdown-item.nav-link {
            color: white;
        }

        h3:hover {
            color: blue;
        }

        .card-img-top:hover {
            transform: scale(1.1);
        }
    </style>

    <script>
        window.addEventListener('scroll', function() {
            var parallax = document.querySelector('.parallax');
            var scrollPosition = window.pageYOffset;
            parallax.style.transform = 'translateY(' + scrollPosition * 0.4 + 'px)';
        });
    </script>

    <main class="flex-shrink-0">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-gray py-3">
            <div class="container px-5">
                <a class="navbar-brand" href="{{ url('user/dashboard') }}">
                    <span class="fw-bolder text-primary">My Profiles</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                        <li class="nav-item">
                            <a class="dropdown-item nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </main>

    <section class="content py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php
            foreach ($produk as $value) {
            ?>
                <div class="col mb-5">
                    <div class="card h-100 shadow-sm p-2 bg-body rounded">
                        <!-- Product image-->
                        <div class="img-product text-center">
                            <img class="card-img-top " src="{{ asset('storage/images/products/' . $value->foto) }}"
                                alt="Foto Produk" />
                        </div>

                        <div class="card-body">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">{{ $value->nama }}</h5>
                                <!-- Product code -->
                                <p class="fw-bolder">{{ $value->kode }}</p>
                                <!-- Product price-->
                                <p>Rp {{ $value->harga_jual }}</p>
                            </div>
                        </div>

                        <div class="">
                            <a href="#pesanan" class="btn btn-primary btn-block d-grid">Beli</a>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
            </div>
        </div>
    </section>

</body>

</html>
