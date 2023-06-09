@extends('admin.layout.mainlayout')

@section('User', 'Dashboard')

@section('content')

<h3 class="mt-2">Detail User</h3>
<div class="mt-3">
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

    <h4>Booking History</h4>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No. </th>
                <th>Booking Code</th>
                <th>Book Start</th>
                <th>Book End</th>
                <th>Villa</th>
                <th>Total Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user->booking as $booking)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $booking->bookingCode }}</td>
                    <td>{{ $booking->bookDateStart }}</td>
                    <td>{{ $booking->bookDateEnd }}</td>
                    <td>{{ $booking->villa->name}}</td>
                    <td>{{ $booking->totalPrice }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection