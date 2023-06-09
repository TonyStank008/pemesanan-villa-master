@extends('layout.layout')

@section('title', 'Contact')
@section('content')
    <section id="contact">
        <div class="container-fluid overlay h-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-6" style="color: #000000; font-weight: 100;">
                        <h1 style="color: #000000; font-weight: bold;">Contact Us</h1>
                        <p style="margin-top: 100px;">Punya kendala ataupun keperluan yang melibatkan kami?
                            Yuk langsung hubungi kami!</p>
                    </div>
                    <div class="col-md-6">
                        <div class="card-contact">
                            <form action="">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="namamu">
                                    <label for="floatingInput">Nama</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="floatingInput"
                                        placeholder="name@example.com">
                                    <label for="floatingInput">Email address</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput"
                                        placeholder="name@example.com">
                                    <label for="floatingInput">Any Inquiries</label>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="buttoncontact">kirim</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="text-center" style="color: #ffff;">
                        © 2023 Copyright By LianGroup.
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
