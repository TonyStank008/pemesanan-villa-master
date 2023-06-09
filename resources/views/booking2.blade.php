<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Process</title>
    <link rel="stylesheet" href="{{ asset('/') }}aset/Booking2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        Travel Nusantara
    </header>


    <div class="container">
        <div class="row h-100">
            <div class="col-md-12">

                <div class="container-semua">
                    <div class="container-isi">
                        <div class="container-atas">
                            <div class="booking-process">
                                PEMBAYARAN
                            </div>
                            <div class="progress-dot">
                                <div class="pro-1"> 1 </div>
                                <div class="pro-2"> 2 </div>
                                <div class="pro-3"> 3 </div>
                            </div>
                        </div>
                        <div class="container-tengah">
                            <div class="bca">
                                <div class="kanan">
                                    <img src="{{ asset('/') }}aset/images/BCA.png" alt="">
                                </div>
                                <div class="kiri">
                                    VA: 012345678
                                </div>
                            </div>
                            <div class="bri">
                                <div class="kanan">
                                    <img src="{{ asset('/') }}aset/images/BRI.png" alt="">
                                    
                                </div>
                                <div class="kiri">
                                    VA: 012345678
                                    
                                </div>
                                
                            </div>
                            <div class="jago">
                                <div class="kanan">
                                    <img src="{{ asset('/') }}aset/images/JAGO.png" alt="">
                                    
                                </div>
                                <div class="kiri">
                                    VA: 012345678
                                    
                                </div>
            
                            </div>
                        </div>
                        <div class="container-bawah">
                            <a href="{{ url('booking3') }}">
                                <button id="button-1">Konfirmasi</button>
                            </a> 
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>

    
    
</body>
</html>