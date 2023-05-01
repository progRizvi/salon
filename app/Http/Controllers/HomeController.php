<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::all();

        return view('frontend.pages.home', compact('services'));
    }
    public function getService(Request $request)
    {
        $bookings = Booking::where('service_id', $request->service_id)->whereDate("created_at", now())->get();
        $service = Service::find($request->service_id);
        $service->bookings = $bookings->count();
        $service->available_seat = $service->available_seat - $bookings->count();
        return response()->json($service);
    }
    public function getServiceByDate(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'bookings_date' => 'required|date|after_or_equal:today',
            'service_id' => 'required|exists:services,id',
        ]);

        if ($validation->fails()) {
            return response()->json($validation->errors()->all());
        }
        $bookings = Booking::whereDate("booking_date", now()->parse($request->bookings_date))->where('service_id', $request->service_id)->select("adult", "children")->get()->toArray();

        $bookingsCount = [];
        foreach ($bookings as $booking) {
            $bookingsCount[] = array_sum($booking);
        }
        $bookingsCount = array_sum($bookingsCount);

        $service = Service::find($request->service_id);
        $service->bookings = $bookingsCount;
        $service->available_seat = $service->available_seat - $bookingsCount;
        return response()->json($service);
    }
}
