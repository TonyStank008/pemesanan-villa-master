<!doctype html>



<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LG Property.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"/>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

  <link rel="stylesheet" href="{{ asset('/') }}aset/responsive.css">
  <link href="{{ asset('/') }}aset/style.css" rel="stylesheet">

  <link rel="icon" href="{{ asset('/') }}aset/Instagram post - 1.png">



</head>


<body>


    <header>
        <nav class="navbar navbar-expand-lg  bg-transparent position-relative w-100">
            <div class="container" style="color: #ffff;">
                <a class="navbar-brand" href="{{ url('home') }}" style="color: #C4AE00;">
                    Travel Nusantara</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                    </span>
                </button>
                <div class=" navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto ">
                        <li class="nav-item mx-2">
                            <a class="nav-link" aria-current="page" href="{{ url('home') }}"
                                style="color:#6558F5;
                ">Home</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="{{ url('home') }}" style="color:#6558F5;
                ">Layanan</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="{{ url('explore') }}" style="color:#6558F5;
                ">Explore</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="{{ url('contact') }}" style="color:#6558F5;
                ">Contact</a>
                        </li>
                    </ul>
                    <div>
                        <a href="Register.html"><button class="button-primary">
                            Daftar
                        </button></a>
                        <a href="Login.html"><BUtton class="button-secondary">Masuk</BUtton></a>  
                        <a href="logout.html" class="btn btn-primary">Keluar</a>
                    </div>
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

    

    

    <section id="Layanan">
        <div class="container">
            <div class="row h-100">
                <div class="juduldetail">
                    <h1 style="color: #000000; font-weight: bold; text-align: start; margin-bottom: 20px;">Cerita Mereka
                    </h1>
                </div>
                <div class="row">

                    <div class="col-lg-4 col-md-6 mb-4 d-flex justify-content-evenly">
                        <div class="card-p-2 " style="width: 22rem;  margin-top: 10px;">
                            <img src="{{ asset('/') }}aset/aset/image_story.webp" alt="" style="border-radius: 15px; width: 22rem;">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4 mb-4 d-flex">
                        <div class="story p-2" style="width: 22rem; margin-top: 10px;">
                            <div class="story">
                                <h4 style="font-weight: bold;">Marcello Kevin</h4>
                                <p class="mb-4">Senior Programmer at Indodax<br></p>
                                <br>
                                <div class="rate" style="margin-bottom:2px;">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
    
                                </div>
                                <p>Disini saya bisa menemukan tempat tempat indah di Indonesia.</p>
                            </div>
                        </div>
                    </div>



                    <div class="col-lg-4 col-md-6 mb-4 d-flex justify-content-evenly">
                        <div class="card-p-2 " style="width: 22rem;  margin-top: 10px;">
                            <img src="{{ asset('/') }}aset/aset/image_story.webp" alt="" style="border-radius: 15px; width: 22rem;">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4 mb-4 d-flex">
                        <div class="story p-2" style="width: 22rem; margin-top: 10px;">
                            <div class="story">
                                <h4 style="font-weight: bold;">Marcello Kevin</h4>
                                <p class="mb-4">Senior Programmer at Indodax<br></p>
                                <br>
                                <p>Disini saya bisa menemukan tempat tempat indah di Indonesia.</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 mb-4 d-flex justify-content-evenly">
                        <div class="card-p-2 " style="width: 22rem;  margin-top: 10px;">
                            <img src="{{ asset('/') }}aset/aset/image_story.webp" alt="" style="border-radius: 15px; width: 22rem;">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4 mb-4 d-flex">
                        <div class="story p-2" style="width: 22rem; margin-top: 10px;">
                            <div class="story">
                                <h4 style="font-weight: bold;">Marcello Kevin</h4>
                                <p class="mb-4">Senior Programmer at Indodax<br></p>
                                <br>
                                <p>Disini saya bisa menemukan tempat tempat indah di Indonesia.</p>
                            </div>
                        </div>
                    </div>



                    <div class="col-lg-4 col-md-6 mb-4 d-flex justify-content-evenly">
                        <div class="card-p-2 " style="width: 22rem;  margin-top: 10px;">
                            <img src="{{ asset('/') }}aset/aset/image_story.webp" alt="" style="border-radius: 15px; width: 22rem;">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4 mb-4 d-flex">
                        <div class="story p-2" style="width: 22rem; margin-top: 10px;">
                            <div class="story">
                                <h4 style="font-weight: bold;">Marcello Kevin</h4>
                                <p class="mb-4">Senior Programmer at Indodax<br></p>
                                <br>
                                <p>Disini saya bisa menemukan tempat tempat indah di Indonesia.</p>
                            </div>
                        </div>
                    </div>





                    <div class="col-lg-4 col-md-6 mb-4 d-flex justify-content-evenly">
                        <div class="card-p-2 " style="width: 22rem;  margin-top: 10px;">
                            <img src="{{ asset('/') }}aset/aset/image_story.webp" alt="" style="border-radius: 15px; width: 22rem;">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4 mb-4 d-flex">
                        <div class="story p-2" style="width: 22rem; margin-top: 10px;">
                            <div class="story">
                                <h4 style="font-weight: bold;">Marcello Kevin</h4>
                                <p class="mb-4">Senior Programmer at Indodax<br></p>
                                <br>
                                <p>Disini saya bisa menemukan tempat tempat indah di Indonesia.</p>
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



    <section id="Layanan">
        <div class="container">
            <div class="row h-100">
                <div class="juduldetail">
                    <h1 style="color: #000000; font-weight: bold; text-align: start; margin-bottom: 20px;">Bagikan Ceritamu!
                    </h1>
                </div>



                <div class="row text-center" style="margin-bottom: 20px;">
                <form action="upload.html" method="post" enctype="multipart/form-data">
                    <label for="fileUpload"></label>
                    <input type="file" name="fileUpload" id="fileUpload" style="display:none">
                    <input type="button" class="btn btn-primary" style="background-color: #F0C34C;" value="Pilih File" onclick="document.getElementById('fileUpload').click();">
                    <input type="submit" value="Upload" name="submit" style="display: none;">
                  </form>
                  </div>
                
                <div class="row text-center">
                    <div class="form">
                      <div class="label"></div>
                      <div class="input my-input">
                        <input type="text">
                      </div>
                      <button type="submit" class="btn btn-primary" style="width: 30%; background-color: #6558F5;margin-top: 20px;">Bagikan Ceritamu</button>
                    </div>
                  </div>
            </div>
        </div>
        </div>
        </div>
        </div>
        </div>
    </section>



    

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




    <!-- <section class="video">

        <h1 class="text-center" style="color: #E9BF4E; font-weight: 1000; border-radius: 200px;">Look our product!</h1>
        <div class="player text-center" style="margin-top: 0px;">
            <iframe width="400" height="400" src="https://www.youtube.com/embed/VItD7_Sifuk"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
        </div>
    </section> -->


    <script src="bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>
</html>