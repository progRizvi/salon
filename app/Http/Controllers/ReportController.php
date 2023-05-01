<?php

namespace App\Http\Controllers;

use App\Models\Booking;

class ReportController extends Controller
{
    public function index()
    {
        $fromDate = request()->from_date;
        $toDate = request()->to_date;
        $bookings = Booking::whereBetween('booking_date', [$fromDate, $toDate])->where("payment_status", "paid")->paginate(10);
        return view('backend.pages.reports.list', compact('bookings'));
    }
}
