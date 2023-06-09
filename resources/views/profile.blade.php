@extends('layout.layout')

@section('title', 'Profile')

@section('content')


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-sm-12 justify-content-center">
                <h5>Data Pribadi</h5>
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th>Name</th>
                            <td>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <th>Telephone</th>
                            <td>{{ $user->telephone }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6 col-sm-12">
                <h5>Daftar Booking</h5>
                @foreach ($user->booking as $key => $row)
                    <div class="card py-2 px-4 mb-4 position-relative">
                        <div class="card-title fw-semibold">{{ $row->villa->name }}</div>
                        <div class="mb-2" style="font-size: 12px; font-weight: 600;">
                            Tanggal Booking : {{ $row->bookDateStart . ' - ' . $row->bookDateEnd }}

                        </div>
                        <div class="mb-3" style="font-size: 12px; font-weight: 600;">
                            Status :
                            @if ($row->paidStatus == 0)
                                <span class="bg-secondary py-1 px-3 rounded">Belum Bayar</span>
                            @elseif ($row->paidStatus == -1)
                                <span class="bg-danger py-1 px-3 rounded">Dibatalkan</span>
                            @elseif ($row->paidStatus == 1)
                                <span class="bg-warning py-1 px-3 rounded">Menunggu Konfirmasi</span>
                            @elseif ($row->paidStatus == 2)
                                <span class="bg-success text-white py-1 px-3 rounded">Berhasil</span>
                            @endif
                        </div>
                        <div class="mb-2 " style="font-size: 12px; font-weight: 600;">
                            Kode Booking : <span
                                class="bg-primary text-uppercase text-white py-1 px-3 rounded">{{ $row->bookingCode }}</span>

                        </div>
                        <hr>
                        @if ($row->paidStatus == 2 && $row->reviewed == 0)
                            <form method="post" action="{{ url('profile') }}" class="justify-content-end">
                                @csrf
                                <input type="hidden" name="villa_id" value="{{ $row->villa->id }}">
                                <input type="hidden" name="booking_id" value="{{ $row->id }}">
                                <input type="hidden" name="reviewStat" id="reviewStat" value="0">
                                <div class="mb-3">
                                    <label for="reviewContent" class="form-label">Tambahkan Review
                                        Anda</label>
                                    <textarea class="form-control" name="reviewContent" id="reviewContent" rows="3"></textarea>
                                </div>
                                <div class="col">
                                    <div class="rating-box">
                                        <div class="stars">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex row">
                                    <button type="submit" class="btn btn-success float-right"
                                        style="font-size: 12px">Kirim</button>
                                </div>
                            </form>
                        @endif

                    </div>
                @endforeach
            </div>
        </div>
    </div>
    {{-- <a href="/profile/booking-list">
        <button class="btn btn-warning">Booking List</button>
    </a> --}}

@endsection
