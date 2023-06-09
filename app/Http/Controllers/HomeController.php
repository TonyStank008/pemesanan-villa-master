<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Villa;
use App\Models\Slider;
use App\Models\Review;
use App\Models\Facility;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $villa = DB::table('villas')->get();
        $slider = Slider::all();
        return view('home', compact('villa', 'slider'));
    }


    public function show($id)
    {
        $villa = Villa::with(['facility'])->findOrFail($id);
        $review = Review::select(['reviews.*', 'users.name'])
            ->join('bookings', 'bookings.id', 'reviews.booking_id')
            ->join('users', 'users.id', 'bookings.user_id')
            ->where("reviews.villa_id", $id)->get();
        return view('detailvilla', ['villa' => $villa, 'review' => $review]);
    }


    // Metode lain seperti create(), store(), show(), edit(), update(), destroy() dapat ditambahkan sesuai kebutuhan
}
