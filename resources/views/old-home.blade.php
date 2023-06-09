<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LG Property.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('/') }}aset/responsive.css">
    <link href="{{ asset('/') }}aset/style.css" rel="stylesheet">

    <link rel="icon" href="{{ asset('/') }}aset/Instagram post - 1.png">

</head>

<body>

    <!-- Navbar Section-->
    <header>

        <nav class="navbar navbar-expand-lg d-flex justify-content-between  bg-transparent position-relative w-100">

            <a class="navbar-brand" href="{{ url('home') }}"
                style="color: #C4AE00; font-weight bold; font-size:1.5rem">
                Travel Nusantara</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                </span>
            </button>
            <div class="navbar-collapse justify-content-end" id="navbarNav">
                <a class="nav-link" aria-current="page" href="{{ url('home') }}" style="color:#6558F5;">Home</a>
                <a class="nav-link" href="{{ url('home') }}" style="color:#6558F5;">Layanan</a>
                <a class="nav-link" href="{{ url('explore') }}" style="color:#6558F5;">Explore</a>
                <a class="nav-link" href="{{ url('contact') }}" style="color:#6558F5;">Contact</a>
                <div>
                    {{-- <a href="{{ url('register') }}"><button class="button-primary">
                                Daftar
                            </button></a>
                        <a href="{{ url('login') }}"><BUtton class="button-secondary">Masuk</BUtton></a> --}}
                    {{-- <a href="/logout" class="btn btn-primary">Keluar</a> --}}
                </div>
            </div>

        </nav>
    </header>

    <div class="dropdown-menu">
        <li><a href="#">BERANDA</a></li>
        <li><a href="#">LAYANAN</a></li>
        <li><a href="#">FITUR</a></li>
        <li><a href="#">CONTACT</a></li>
        <div>
            <button class="button-primary">
                DAFTAR
            </button>
            <BUtton class="button-secondary">MASUK</BUtton>
        </div>
    </div>


    <!--Section Layanan-->
    <section id="Layanan">
        <div class="container">
            <div class="row h-100">
                <div class="col-md-6 text-center">
                    <h3 style="text-align: start; font-weight: bold;">Hotel Premium</h3>
                    <span class="sub-title"></span>
                </div>
            </div>

            {{-- <div class="row">
                    @foreach ($villa as $row)
                        <div class="col-lg-4 col-md-6 mb-4 d-flex justify-content-evenly">
                            <a href="{{ url('detailvilla') }}">
                                <div class="card p-2" style="width: 22rem;">
                                    <img src="{{ asset('/') }}aset/aset/villacanggu_bali.jpg" alt=""
                                        style="border-radius: 20px; height: 400px;">
                                    <div class="card-body">
                                        <h4 style="font-weight: 800;">{{ $row->villaName }}</h4>
                                        <p class="mb-4">{{ $row->villaDescription }}<br>
                                            <span class="text-success">Tersedia</span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div> --}}
        </div>


        <!--Section Layanan-->
        <section id="Layanan">
            <div class="container">
                <div class="row h-100">
                    <div class="col-md-6 text-center">
                        <h3 style="text-align: start; font-weight: bold;">Hotel Nyaman</h3>

                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-4 d-flex justify-content-evenly">
                        <div class="card p-2" style="width: 22rem;">
                            <img src="{{ asset('/') }}aset/aset/villacanggu_bali.jpg" alt=""
                                style="border-radius: 20px; height: 400px;">
                            <div class="card-body">
                                <h4 style="font-weight: 800;">Villa Mana Canggu</h4>
                                <p class="mb-4">Bali, Indonesia<br>
                                    <span class="text-success">Tersedia</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4 d-flex justify-content-evenly">
                        <a href="detailvilla.html">
                            <div class="card p-2" style="width: 22rem;">
                                <img src="{{ asset('/') }}aset/aset/villaedge.jpeg" alt=""
                                    style="border-radius: 20px; height: 400px;">
                                <div class="card-body">
                                    <h4 style="font-weight: 800;">The Edge</h4>
                                    <p class="mb-4">Bali, Indonesia<br>
                                        <span class="text-success">Tersedia</span>
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>


                    <div class="col-lg-4 col-md-6 mb-4 d-flex justify-content-evenly">
                        <div class="card p-2" style="width: 22rem;">
                            <img src="{{ asset('/') }}aset/aset/villa_voyage.jpg" alt=""
                                style="border-radius: 20px; height: 400px;">
                            <div class="card-body">
                                <h4 style="font-weight: 800;">Villa Voyage</h4>
                                <p class="mb-4">Bali, Indonesia<br>
                                    <span class="text-success">Tersedia</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4 d-flex justify-content-evenly">
                        <a href="detailvilla.html">
                            <div class="card p-2" style="width: 22rem;">
                                <img src="{{ asset('/') }}aset/aset/villaedge.jpeg" alt=""
                                    style="border-radius: 20px; height: 400px;">
                                <div class="card-body">
                                    <h4 style="font-weight: 800;">The Edge</h4>
                                    <p class="mb-4">Bali, Indonesia<br>
                                        <span class="text-success">Tersedia</span>
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>


                    <div class="col-lg-4 col-md-6 mb-4 d-flex justify-content-evenly">
                        <a href="detailvilla.html">
                            <div class="card p-2" style="width: 22rem;">
                                <img src="{{ asset('/') }}aset/aset/villaedge.jpeg" alt=""
                                    style="border-radius: 20px; height: 400px;">
                                <div class="card-body">
                                    <h4 style="font-weight: 800;">The Edge</h4>
                                    <p class="mb-4">Bali, Indonesia<br>
                                        <span class="text-success">Tersedia</span>
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>



                    <div class="col-lg-4 col-md-6 mb-4 d-flex justify-content-evenly">
                        <a href="detailvilla.html">
                            <div class="card p-2" style="width: 22rem;">
                                <img src="{{ asset('/') }}aset/aset/villaedge.jpeg" alt=""
                                    style="border-radius: 20px; height: 400px;">
                                <div class="card-body">
                                    <h4 style="font-weight: 800;">The Edge</h4>
                                    <p class="mb-4">Bali, Indonesia<br>
                                        <span class="text-success">Tersedia</span>
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>


                </div>
            </div>
            </div>
            </div>
            </div>
        </section>


        <section id="Story display" style="margin-top: 150px;">
            <div class="container">
                <div class="row h-100">
                    <div class="col-md-6 text-center">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-4 d-flex justify-content-evenly">
                        <div class="card-p-2 " style="width: 22rem;">
                            <img src="{{ asset('/') }}aset/aset/image_story.webp" alt=""
                                style="border-radius: 20px; width: 22rem;">
                        </div>
                    </div>


                    <div class="col-lg-6 col-md-4 mb-4 d-flex">
                        <div class="story p-2" style="width: 22rem;">
                            <div class="story">
                                <h4 style="font-weight: bold;">Marcello Kevin</h4>
                                <p class="mb-2">Senior Programmer at Indodax</p>
                                <div class="rate" style="margin-bottom:2px;">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>

                                </div>

                                <p>Disini saya bisa menemukan tempat tempat indah di Indonesia.</p>
                                <div style="margin-top: 10px;">
                                    <a href="{{ url('story') }}"> <button type="button"
                                            class="btn btn-primary">Read
                                            Story</button></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            </div>
            </div>
            </div>
            </div>
            </div>
        </section>
        <!-- <section class="video">

        <h1 class="text-center" style="color: #E9BF4E; font-weight: 1000;">Look our product!</h1>
        <div class="player text-center" style="margin-top: 0px;">
            <iframe width="1000" height="500" src="https://www.youtube.com/embed/VItD7_Sifuk"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
        </div>
    </section> -->


        <footer>
            <section id="contact">
                <div class="container-fluid overlay h-100">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6" style="color: #ffff; font-weight: 100;">
                                <h1 style="color: #000000; font-weight: bold;">Travel Nusantara</h1>
                                <div class="kontak mt-2 col-lg-6">
                                    <h4 style="color: #3b3a3a; text-align: center;">provide the valueable trips your
                                        holiday.</h4>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <ul class="navbar-nav mx-auto ">
                                    <li class="nav-item mx-2">
                                        <a class="nav-link" aria-current="page" href="home.html"
                                            style="color:#6558F5;
                        ">Home</a>
                                    </li>
                                    <li class="nav-item mx-2">
                                        <a class="nav-link" href="#Layanan"
                                            style="color:#6558F5;
                        ">Layanan</a>
                                    </li>
                                    <li class="nav-item mx-2">
                                        <a class="nav-link" href="#contact"
                                            style="color:#6558F5;
                        ">Explore</a>
                                    </li>
                                    <li class="nav-item mx-2">
                                        <a class="nav-link" href="contact.html"
                                            style="color:#6558F5;
                        ">Contact</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-md-3">
                                <ul class="navbar-nav mx-auto ">
                                    <li class="nav-item mx-2">
                                        <a class="nav-link" aria-current="page" href="home.html"
                                            style="color:#6558F5;
                        ">Home</a>
                                    </li>
                                    <li class="nav-item mx-2">
                                        <a class="nav-link" href="#Layanan"
                                            style="color:#6558F5;
                        ">Layanan</a>
                                    </li>
                                    <li class="nav-item mx-2">
                                        <a class="nav-link" href="#contact"
                                            style="color:#6558F5;
                        ">Explore</a>
                                    </li>
                                    <li class="nav-item mx-2">
                                        <a class="nav-link" href="contact.html"
                                            style="color:#6558F5;
                        ">Contact</a>
                                    </li>
                                </ul>
                            </div>


                            <div class="text-center" style="color: #000000; margin-top: 200px;">
                                © 2023 Copyright By LianGroup.
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </footer>


</body>

</html>
