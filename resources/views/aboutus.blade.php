<!doctype html>



<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
</head>

<link rel="stylesheet" href="{{ asset('/styles') }}/responsive.css">
<link href="{{ asset('/styles') }}/style.css" rel="stylesheet">



<link rel="icon" href="aset/Instagram post - 1.png">



<body>


    <!-- Navbar Section-->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light px-5">
            <a class="navbar-brand" style="color: #C4AE00; font-weight bold; font-size:1.5rem" href="#">Travel
                Nusantara</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav me-2 mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('home') }}" style="color:#6558F5;">Home</a>
                    </li>

                </ul>
                <ul class="navbar-nav me-2 mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('aboutus') }}" style="color:#6558F5;">About Us</a>
                    </li>

                </ul>
                <ul class="navbar-nav me-2 mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('explore') }}" style="color:#6558F5;">Explore</a>
                    </li>

                </ul>
                <ul class="navbar-nav me-2 mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('contact') }}" style="color:#6558F5;">Contact</a>
                    </li>

                </ul>
                <ul class="navbar-nav me-2 mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('profile') }}" style="color:#6558F5;">Profile</a>
                    </li>

                </ul>
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="btn btn-danger" href="/logout">Logout</a>
                    </li>
                </ul>
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


    <script src="bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

    <!--Section Layanan-->

    <h1 class="text-center" style="font-size: xx-large;font-weight: bolder;font-size: 100px; margin-top: 50px;">ABOUT US
    </h1>
    <Section>

        <div class="container">

            <div class="container">
                <div class="row villa-image mx-auto my-5">
                    <img src="{{ asset('profil.PNG') }}" alt="villa-image" style="border-radius: 50px; height: 600px; ">
                </div>
            </div>
            <style>
                .paragraph {
                    text-align: justify;
                    text-justify: inter-word;
                    margin-top: 30px;
                }
            </style>
            <div class="paragraph">
                <p>
                    Travel Nusantara adalah perusahaan yang menyediakan suatu website yang dirancang untuk membantu
                    wisatawan menemukan dan membooking villa terbaik di seluruh Nusantara. Kami menyediakan platform
                    yang mudah digunakan dan terintegrasi untuk membantu wisatawan dalam menemukan villa yang sesuai
                    dengan kebutuhan mereka.
                    Database kami memuat informasi lengkap tentang villa-villa, ulasan, transaksi, dan pemesanan.
                    Pengguna dapat mendaftar dan login ke akun mereka untuk melihat informasi villa dan melakukan
                    pemesanan. Kami juga menyediakan fitur ulasan dan transaksi pembayaran yang aman dan mudah. Dengan
                    Travel Nusantara, wisatawan dapat menemukan vila-vila yang sesuai dengan budget dan preferensi
                    mereka. Kami memiliki fitur pencarian yang mempermudah wisatawan untuk menemukan villa berdasarkan
                    kebutuhan mereka, seperti harga, fasilitas, dan lainnya.
                    Setiap vila memiliki halaman detail yang memuat informasi lengkap, termasuk foto, deskripsi,
                    fasilitas, dan ulasan dari pengguna lain. Hal ini membantu wisatawan membuat keputusan pemesanan
                    yang tepat. Proses pemesanan villa dengan Travel Nusantara menjadi lebih mudah dan efisien. Pengguna
                    dapat memilih tanggal dan melakukan pemesanan dengan mudah. Kami juga menyediakan berbagai metode
                    pembayaran yang dapat dipilih oleh pengguna.
                    Travel Nusantara hadir sebagai solusi yang efisien dan mudah digunakan bagi wisatawan yang ingin
                    menemukan pengalaman perjalanan yang tak terlupakan. Kami membantu wisatawan menemukan villa terbaik
                    dan melakukan pemesanan dengan mudah, sehingga mereka dapat fokus pada perjalanan mereka dan
                    menciptakan kenangan yang tak terlupakan.

                </p>
            </div>
</body>

</html>
</div>
</Section>

<!--Section Layanan-->
<section id="Layanan">
    <div class="container">
        <h3 style="text-align: center; font-weight: bold; font-size: 30px;">Our Member</h3>
        <div class="row h-100">
            <div class="col-md-6 text-center">
                <span class="sub-title">LG Property hadir menjadi solusi bagi kamu</span>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4 d-flex justify-content-evenly">
                <a href="detailvilla.html">
                    <div class="card p-2" style="width: 22rem;">
                        <img src="{{ asset('Lian.png') }}" alt="" style="border-radius: 20px; height: 300px;">
                        <div class="card-body">
                            <h4 style="font-weight: 800;">Dwi Yulianto</h4>
                            <p class="mb-4">Information System<br>
                                <span class="text-success">00000074859</span>
                            </p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-md-6 mb-4 d-flex justify-content-evenly">
                <a href="detailvilla.html">
                    <div class="card p-2" style="width: 22rem;">
                        <img src="{{ asset('jantzen.jpg') }}" alt=""
                            style="border-radius: 20px; height: 300px;">
                        <div class="card-body">
                            <h4 style="font-weight: 800;">Jantzen Fernandes</h4>
                            <p class="mb-4">Information System<br>
                                <span class="text-success">00000074907</span>
                            </p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-md-6 mb-4 d-flex justify-content-evenly">
                <a href="detailvilla.html">
                    <div class="card p-2" style="width: 22rem;">
                        <img src="{{ asset('jesse.jpg') }}" alt=""
                            style="border-radius: 20px; height: 300px;">
                        <div class="card-body">
                            <h4 style="font-weight: 800;">Jesse Laurencia</h4>
                            <p class="mb-4">Information System<br>
                                <span class="text-success">00000072698</span>
                            </p>
                        </div>
                    </div>
                </a>
            </div>


            <div class="col-lg-4 col-md-6 mb-4 d-flex justify-content-evenly">
                <a href="detailvilla.html">
                    <div class="card p-2" style="width: 22rem;">
                        <img src="{{ asset('naufal.jpg') }}" alt=""
                            style="border-radius: 20px; height: 300px;">
                        <div class="card-body">
                            <h4 style="font-weight: 800;">Naufal Rizqiansyah</h4>
                            <p class="mb-4">Information System<br>
                                <span class="text-success">00000072264</span>
                            </p>
                        </div>
                    </div>
                </a>
            </div>


            <div class="col-lg-4 col-md-6 mb-4 d-flex justify-content-evenly">
                <a href="detailvilla.html">
                    <div class="card p-2" style="width: 22rem;">
                        <img src="{{ asset('josua.jpg') }}" alt=""
                            style="border-radius: 20px; height: 300px;">
                        <div class="card-body">
                            <h4 style="font-weight: 800;">Josua Rivo Muin</h4>
                            <p class="mb-4">Information System<br>
                                <span class="text-success">00000072776</span>
                            </p>
                        </div>
                    </div>
                </a>
            </div>



            <div class="col-lg-4 col-md-6 mb-4 d-flex justify-content-evenly">
                <a href="detailvilla.html">
                    <div class="card p-2" style="width: 22rem;">
                        <img src="{{ asset('fires.jpg') }}" alt=""
                            style="border-radius: 20px; height: 300px;">
                        <div class="card-body">
                            <h4 style="font-weight: 800;">Safires Atalla Zaraski</h4>
                            <p class="mb-4">Information System<br>
                                <span class="text-success">00000073610</span>
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





<footer>
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
                <ul class="navbar-nav">
                    <div class="col-md-6 col-sm-12">

                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" style="max-width:200px;" href="home.html"
                                style="color:#6558F5;
                            ">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="max-width:200px;" href="#Layanan"
                                style="color:#6558F5;
                            ">Layanan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="max-width:200px;" href="#contact"
                                style="color:#6558F5;
                            ">Explore</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="max-width:200px;" href="contact.html"
                                style="color:#6558F5;
                            ">Contact</a>
                        </li>
                    </div>
                </ul>
            </div>
        </div>
        <div class="text-center mt-5">
            © 2023 Copyright By LianGroup.
        </div>
    </div>
</footer>


<script src="bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
</script>


</body>







</html>
