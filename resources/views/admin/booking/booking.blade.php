@extends('admin.layout.mainlayout')

@section('Booking', 'Dashboard')

@section('content')

<h3 class="mt-3">Booking List</h3>
<div class="mt-3">
    <table class="table table-bordered"> 
        <thead>
            <tr class="text-center align-top"> 
                <th>Action</th>
                <th>Booking Code</th>
                <th>Book Start</th>
                <th>Book End</th>
                <th>Book Create</th>
                <th>Villa Name</th>
                <th>Payment Type</th>
                <th>Total</th>
                <th>Paid Status</th>
                <th>Due Date</th>
                <th>Paid Date</th>
            </tr>
        </thead>
        <tbody>
            @if (count($booking) == 0)
                <tr>
                    <td class="text-center p-3" colspan="11">No Data</td>
                </tr>
            @else
                @foreach ($booking as $booking)
                    <tr>
                        <td>
                            @if ($booking->paidStatus == -1)
                            <button disabled class="btn btn-danger">
                                Canceled
                            </button>
                            @endif
                            @if ($booking->paidStatus == 0)
                            <button disabled class="btn btn-secondary">
                                Unpaid
                            </button>
                            @endif
                            @if ($booking->paidStatus == 1)
                                {{-- Modal Trigger --}}
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#deleteModal{{ $booking->id }}">
                                    Confirm
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="deleteModal{{ $booking->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="deleteModalLabel">Confirm Booking</h5>
                                        </div>
                                        <div class="modal-body">
                                            Do you want to confirm this booking? (<b>{{ $booking->bookingCode }}</b>)
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                        <form action="/booking-confirm-1" method="post">
                                            @csrf
                                            <input type="text" hidden name="id" value="{{ $booking->id }}">
                                            <button type="submit" class="btn btn-success">Confirm</button>
                                        </form>
                                        </div>
                                    </div>
                                    </div>
                                </div>

                            @endif
                            @if ($booking->paidStatus == 2)
                            <button disabled class="btn btn-success">
                            Success
                            </button>
                            @endif
                        </td>
                        <td>{{ $booking->bookingCode }}</td>
                        <td>{{ $booking->bookDateStart }}</td>
                        <td>{{ $booking->bookDateEnd }}</td>
                        <td>{{ $booking->bookCreateDate }}</td>
                        <td>{{ $booking->villa->name }}</td>
                        @if ($booking->payment_id == null)
                            <td>In Process</td>
                        @else
                            <td>{{ $booking->payment->paymentLabel }}</td>
                        @endif
                        
                        <td>{{ $booking->totalPrice }}</td>
                        <td>{{ $booking->paidStatus }}</td>
                        <td>{{ $booking->dueDate}}</td>
                        <td>{{ $booking->paidDate }}</td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>
@endsection