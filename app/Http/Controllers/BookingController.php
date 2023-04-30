<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Service;
use Illuminate\Support\Facades\Request;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::orderBy("id", "DESC")->paginate(2);
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
        $booking = Booking::find($id);
        $services = Service::all();
        return view("backend.pages.bookings.edit", compact("booking", "services"));

    }
    public function update(Request $request, $id)
    {

    }
    public function confirm($id)
    {
        Booking::find($id)->update([
            "status" => "confirmed",
        ]);
        notify()->success("Booking confirmed successfully");
        return back();
    }
    public function cancel($id)
    {
        Booking::find($id)->update([
            "status" => "cancel",
        ]);
        notify()->success("Booking cancel successfully");
        return back();
    }
    public function pay($id)
    {
        Booking::find($id)->update([
            "payment_status" => "paid",
        ]);
        notify()->success("Payment updated successfully");
        return back();
    }
}
