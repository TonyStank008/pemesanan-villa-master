@extends('layout.payment')

@section('content')
    <header>
        <h1 class="navbar-brand" style="margin-top: 24px;color: #C4AE00; font-weight bold; font-size:1.5rem" href="#">
            Travel
            Nusantara</h1>
    </header>

    <div class="container d-flex justify-content-center align-items-center">
        <form class="form row w-100" action="/booking" method="post">
            {{ csrf_field() }}
            <div class="col-md-8 mx-auto py-5">
                <h4 class="text-center text-bold">Detail Booking</h4>
                <input type="hidden" name="villa_id" value="{{ $villa->id }}">
                <div class="row">
                    <div class="d-flex col-md-6 col-sm 12 justify-content-center align-item-center">
                        <img class="image-fluid w-100 object-fit-cover" src="{{ asset('storage/path/' . $villa->path) }}"
                            alt="" style="border-radius: 20px;">
                    </div>
                    <div class="col-md-6 col-sm 12 ">
                        <div class="mb-3 ">
                            <label for="name-booking" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="namebooking" id="namebooking"
                                value="{{ $user->name }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="email-booking" class="form-label">Alamat Email</label>
                            <input type="email" class="form-control" name="emailbooking" id="emailbooking"
                                value="{{ $user->email }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="phone-booking" class="form-label">Nomor Handphone</label>
                            <input type="text" class="form-control" name="phonebooking" id="phonebooking"
                                value="{{ $user->telephone }}" readonly>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 px-md-5 py-3 px-0">
                    <div class="col-12">
                        <h5>
                            {{ $villa->name }}
                        </h5>
                        <p style="font-size: 14px;" class="text-small">{{ $villa->summary }}</p>
                    </div>
                    <hr>
                    <div class="mb-1 row d-flex md-8 sm-12 align-items-center">
                        <div class="col-md-4 col-sm-12">
                            <label for="name-booking" class="form-label">Harga Sewa/Hari</label>
                        </div>
                        <div class="col-md-8 col-sm-12">
                            <input type="text" class="form-control form-control-sm" name="pricePerNight"
                                id="pricePerNight" value="{{ number_format($villa->price) }}" placeholder="John Doe"
                                readonly>
                        </div>
                    </div>
                    <div
                        class="mb-2 mb-md-1 row d-flex md-8 sm-12 align-items-center justify-content-center justify-content-md-start">
                        <div class="col-md-4 col-sm-12">
                            <label for="tanggal" class="form-label">Tanggal</label>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="input-group date">
                                <input class="form-control" name="bookDateStart" id="date-checkin"
                                    value="{{ $bookDateStart }}" readonly />
                            </div>
                        </div>
                        Sd
                        <div class="col-md-3 col-sm-6">
                            <div class="input-group date">
                                <input class="form-control" name="bookDateEnd" id="date-checkout"
                                    value="{{ $bookDateEnd }}" readonly />
                            </div>

                        </div>
                    </div>
                    <div class="mb-1 row d-flex md-8">
                        <div class="col-4">
                            <label for="phone-booking" class="form-label">Total Harga</label>
                        </div>
                        <div class="col-8">
                            <input type="text" class="form-control form-control-sm" name="totalPrice" id="phone-booking"
                                value="{{ number_format($totalPrice) }}" placeholder="08123456789" readonly>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 px-5">
                    <div class="row justify-content-end">
                        <div class="mb-3 col-md-3">
                            <a href="{{ url('home') }}" class="btn btn-danger w-100">Cancel</a>
                        </div>
                        <div class="mb-3 col-md-3">
                            <button type="submit" class="btn btn-success w-100">Booking</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
