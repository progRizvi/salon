<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::all();
        if ($services->count() == 1) {
            $services = $services[0];
        }

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
        $bookings = Booking::where('service_id', $request->service_id)->whereDate("created_at", $request->bookings_date)->get();
        $service = Service::find($request->service_id);
        $service->bookings = $bookings->count();
        $service->available_seat = $service->available_seat - $bookings->count();
        return response()->json($service);
    }
}
