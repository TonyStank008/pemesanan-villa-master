<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Booking;
use App\Models\Review;
use App\Models\Villa;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;

class UserController extends Controller
{
    public function index()
    {
        $user = User::where('role', '!=', 'admin')->get();

        return view('admin.user.user', ['user' => $user]);
    }

    public function show($id)
    {
        $user = User::with(['booking'])->where('role', '!=', 'admin')->findOrFail($id);

        return view('admin.user.detail-user', ['user' => $user]);
    }

    public function profile()
    {
        $user = User::with(['booking'])->where('id', Auth::user()->id)->first();
        // $user = Booking::select('villas.*', 'bookings.*')
        //     ->join('villas', 'villas.id', '=', 'bookings.villa_id')
        //     ->join('reviews', 'reviews.booking_id', '=', 'bookings.id')
        //     ->where('bookings.user_id', Auth::user()->id)->get();

        foreach ($user->booking as $key => $b) {
            $reviewed = Review::where('reviews.booking_id', '=', $b->id)->first();
            $user->booking[$key]["reviewed"] = $reviewed == null ? 0 : 1;
        }
        return view('profile', ["user" => $user]);
    }

    public function addReviews(Request $request)
    {
        $review = Review::create([
            'booking_id' => $request->booking_id,
            'reviewContent' => $request->reviewContent,
            'villa_id' => $request->villa_id,
            'reviewDate' => new DateTime(),
            'reviewRate' => (float) $request->reviewStat,
        ]);

        return redirect('profile');
    }

    public function getUserBooking()
    {
        $booking = Booking::where('user_id', Auth::user()->id)->get();

        return view('booking-list', ['booking' => $booking]);
    }
}
