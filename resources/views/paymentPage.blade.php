@extends('layout.payment')

@section('content')
    <header>
        <h1 class="navbar-brand" style="margin-top: 24px;color: #C4AE00; font-weight bold; font-size:1.5rem" href="#">
            Travel
            Nusantara</h1>
    </header>
    <div class="container">
        <div class="row h-100 justify-content-center">
            <div class="col-md-6 col-sm-12">
                <form method="post" class="card " action="{{ url('confirm-payment') }}">
                    {{ csrf_field() }}
                    <div class="card-body">
                        <div class="card-title">Pembayaran</div>
                        <hr>
                        <div class="col">
                            <div class="row mb-2">
                                <div class="col-5 ">
                                    Total Harga
                                </div>
                                <div class="col-6 fs-md-sm ">
                                    : <span class="fs-md fw-bold">{{ number_format($booking->totalPrice) }}</span>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-5">
                                    Bayar Sebelum
                                </div>
                                <div class="col-6  ">
                                    : <span class="fs-md fw-semibold">{{ $booking->dueDate . ' 23:59:00' }}
                                    </span>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <input type="hidden" name="bookingCode" value="{{ $booking->bookingCode }}">
                                <div class="col-5">
                                    Kode Booking
                                </div>
                                <div class="col-6 ">
                                    : <span
                                        class="fs-md bg-warning p-1 px-2 rounded fw-bold text-uppercase">{{ $booking->bookingCode }}
                                    </span>
                                </div>
                            </div>
                            <hr>
                            <div class="col mb-3">
                                <label for="paymentMethod">Metode Pembayaran</label>
                                <select class="form-select form-select-sm" name="paymentMethod" required
                                    aria-label=".form-select-sm example">
                                    <option selected value="BCA-{{ $booking->totalPrice }}">BCA - 0131412010</option>
                                    <option value="Jago-{{ $booking->totalPrice }}">Jago - 212121222</option>
                                    <option value="Mandiri-{{ $booking->totalPrice }}">Mandiri - 412211232</option>
                                </select>
                            </div>
                            <div class="row">
                                <button type="submit" class="btn btn-warning fw-bold"> Konfirmasi Pembayaran</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
@endsection
