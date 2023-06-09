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
</head>

<body>
    <header>
        Travel Nusantara
    </header>

    <div class="col-md-8">

        <div class="login-form">
            <div class="login-atas">
                Login Form
            </div>
            <div class="login-tengah">
                <img src="{{ asset('/aset/login.svg') }}" alt="">
                <form method="POST" action="">
                    @csrf
                    <div class="form-login">

                        <div class="form">
                            <label for="email" class="label">Email</label>
                            <div class="input">
                                <input type="email" style="padding: 5px 10px" name="email">
                            </div>
                        </div>


                        <div class="form">
                            <label for="password" class="label">Password</label>
                            <div class="input">
                                <input type="password" style="padding: 5px 10px" name="password">
                            </div>
                        </div>
                    </div>
                    <div class="login-bawah">

                        <button class="btnlogin" type="submit">Login</button>

                        <div class="register-now">
                            Belum punya akun?
                            <a href="{{ url('register') }}"><span> Register </span></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
