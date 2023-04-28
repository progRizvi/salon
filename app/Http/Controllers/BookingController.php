<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Support\Facades\Request;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::orderBy("id", "DESC")->paginate(10);
        return view("backend.pages.bookings.list", compact("bookings"));
    }
    public function create()
    {
        return view("backend.pages.bookings.create");
    }
    public function store(Request $request)
    {

    }
    public function edit($id)
    {
        return view("backend.pages.bookings.edit");

    }
    public function update(Request $request, $id)
    {

    }
}
