<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Project UAS</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('admin/assets/img/brand/galaxy.svg') }}" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href={{ asset('welcome/css/styles.css') }} rel="stylesheet" />

         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <!-- Neon Effect -->
        <style>
        .neon-text {
            color: #fff;
            font-size: 48px;
            text-shadow: 0 0 10px #fff, 0 0 30px #fff, 0 0 50px #fff, 0 0 20px #ff00de, 0 0 30px #ff00de, 0 0 60px #ff00de, 0 0 50px #ff00de, 0 0 150px #ff00de;
        }
    </style>
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#!">Gadget Galaxy</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        @if (Route::has('login'))
                <ul class="navbar-nav">
                    @auth
                    <li class="nav-item"><a href="{{ url('/home') }}" class="nav-link font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">Dashboard</a></li>
                    @else
                    <li class="nav-item"><a href="{{ route('login') }}" class="nav-link font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">Log in</a></li>

                    @if (Route::has('register'))
                    <li class="nav-item"><a href="{{ route('register') }}" class="nav-link font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">Register</a></li>
                    @endif
                    @endauth
                </ul>
                @endif
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header - set the background image for the header in the line below-->
        <header class="mt-5 py-5 bg-image-full" style="background-image: url('https://images.unsplash.com/photo-1610465299993-e6675c9f9efa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8bGFwdG9wJTIwd2FsbHBhcGVyfGVufDB8fDB8fHww&w=1000&q=80/wfh8dDlNFOk/1600x900')">
            <div class="text-center my-5">
                <h1 class="text-white fs-3 fw-bolder">Welcome</h1>
                <p class="text-white-50 mb-0">to Gadget Galaxy</p>
            </div>
        </header>
        <!-- Content section-->
        <section class="py-5">
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h2 class="neon-text">Gadget Galaxy</h2>
                        <p class="lead">Kami menjual Gadget dengan spesifikasi tinggi dengan harga yang terjangkau dan tentunya berkualitas.</p>
                        <p class="mb-0">Tempat kami terpercaya karena Menjaga kepercayaan customer serta menyediakan layanan dengan ramah, tepat, dan akurat menjadi fokus utama. Mengawali dengan perkataan, pemikiran, dan tindakan yang baik maka akan menghasilkan suatu kedekatan yang positif antara kami dengan anda sebagai customer kami.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Image element - set the background image for the header in the line below-->
        <div class="py-5 bg-image-full" style="background-image: url('https://images.unsplash.com/photo-1610465299993-e6675c9f9efa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8bGFwdG9wJTIwd2FsbHBhcGVyfGVufDB8fDB8fHww&w=1000&q=80/4ulffa6qoKA/1200x800')">
            <!-- Put anything you want here! The spacer below with inline CSS is just for demo purposes!-->
            <div style="height: 20rem"></div>
        </div>
        <!-- Content section-->
        <section class="py-5">
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        @yield('content')
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Project UAS 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
