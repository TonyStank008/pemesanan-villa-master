<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('/') }}styles/Register.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
</head>

<body>
    <header>
        Travel Nusantara
    </header>

    <div class="col-md-8">
        <div class="login-form">
            <div class="login-atas">
                Register Form
            </div>
            <div class="login-tengah">
                <img src="{{ asset('/aset/register.svg') }}" alt="">
                <form method="POST" action="">
                    @csrf
                    <div class="form-login">
                        <div class="form">
                            <label for="name" class="label">Nama</label>
                            <div class="input">
                                <input type="text" name="name" style="padding: 5px 10px" id="name"
                                    value="{{ old('user_name') }}" autofocus>
                            </div>
                        </div>

                        <div class="form">
                            <label for="email" class="label">Email</label>
                            <div class="input">
                                <input type="email" name="email" style="padding: 5px 10px" id="email"
                                    value="{{ old('email') }}">
                            </div>
                        </div>

                        <div class="form">
                            <label for="telephone" class="label">Nomor Telepone</label>
                            <div class="input">
                                <input type="text" id="telephone" style="padding: 5px 10px" name="telephone"
                                    value="{{ old('phone') }}">
                            </div>
                        </div>

                        <div class="form">
                            <label for="password" class="label">Password</label>
                            <div class="input">
                                <input type="password" style="padding: 5px 10px" id="password" name="password">
                            </div>
                        </div>
                    </div>
                    <div class="login-bawah">

                        <button class="btnlogin" type="submit">Register</button>

                        <div class="register-now">
                            Sudah Punya Akun?
                            <a href="{{ url('login') }}"><span> Login </span></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
