<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Facility;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\VillaPostRequest;
use App\Models\Payment;
use App\Models\User;
use App\Models\Villa;
use DateTime;
use File;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function index()
    {
        $booking = Booking::all();

        return view('admin.booking.booking', ['booking' => $booking]);
    }

    public function show($id)
    {
        $booking = Booking::with(['facility'])->findOrFail($id);

        return view('admin.booking.detail-booking', ['booking' => $booking]);
    }

    public function getBookingDate(Request $request)
    {
        $bookingDate = Booking::where('villa_id', $request->id)->get();

        return response()->json($bookingDate);
    }

    public function bookingDetails(Request $request)
    {

        $user = User::where('id', Auth::user()->id)->first();
        $villa = Villa::where('id', $request->villa_id)->first();
        $now = new DateTime();
        $bookDateStart = join("-", array_reverse(explode("/", $request->bookDateStart)));
        $bookDateEnd = join("-", array_reverse(explode("/", $request->bookDateEnd)));
        $first_date = new DateTime($bookDateStart);
        $second_date = new DateTime($bookDateEnd);
        $countDate = $first_date->diff($second_date)->d + 1;
        $totalPrice = $villa->price * $countDate;

        $data = [
            "villa"  => $villa,
            "user"  => $user,
            "bookDateEnd"  => $bookDateEnd,
            "bookDateStart"     => $bookDateStart,
            "bookCreateDate"  => $now,
            "totalPrice" => $totalPrice,
            "paidStatus"  => 0,
            "dueDate"  => $now->modify('+45 minutes'),
            "paidDate"     => $now->modify('+45 minutes')
        ];

        return view('booking-detail', $data);
    }

    public function store(Request $request)
    {
        $bookingCode = Str::random(6);
        $now = new DateTime();
        $booking = Booking::create([
            "villa_id"  => $request->villa_id,
            "user_id"  => Auth::user()->id,
            // "payment_id"  => 1,
            "bookingCode" => $bookingCode,
            "bookDateEnd"  => $request->bookDateEnd,
            "bookDateStart"     => $request->bookDateStart,
            "bookCreateDate"  => $now,
            "paidStatus"  => 0,
            "totalPrice" => floatval(preg_replace('/[^\d.]/', '', $request->totalPrice)),
            "dueDate"  => $now->modify('+45 minutes'),
            "paidDate"     => $now->modify('+45 minutes')
        ]);
        return redirect('paymentPage/' . $bookingCode);
    }

    public function confirmPayment(Request $request)
    {
        $paymentMethod = explode('-', $request->paymentMethod);


        $payment = Payment::create([
            "paymentLabel" => $paymentMethod[0],
            "paymentAmount" => $paymentMethod[1]
        ]);
        $booking = Booking::where('bookingCode', $request->bookingCode)->update(['paidStatus' => 1, 'payment_id' => $payment->id]);


        $user = User::where('id', Auth::user()->id)->first();
        return view('profile', ["user" => $user]);
    }

    public function payment($bookingCode)
    {

        $booking = Booking::where('bookingCode', $bookingCode)->first();

        return view('paymentPage', ["booking" => $booking]);
    }

    public function bookingConfirm1(Request $request)
    {
        $booking = Booking::where('id', $request->id)->update(['paidStatus' => 2]);

        return redirect('booking');
    }
}
