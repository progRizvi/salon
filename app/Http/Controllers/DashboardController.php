<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DashboardController extends Controller
{
    public function index()
    {
        $bookings = Booking::paginate(10);
        $countBookings = [];
        $countBookings["totalBookings"] = Booking::all()->count();
        $countBookings['pendingBookings'] = Booking::where("status", "pending")->count();
        $countBookings['confirmedBookings'] = Booking::where("status", "confirmed")->count();
        $countBookings['cancelBookings'] = Booking::where("status", "cancel")->count();
        $countBookings["thisMonth"] = Booking::whereMonth("booking_date", date("m"))->count();
        $countBookings["lastMonth"] = Booking::whereMonth("booking_date", date("m", strtotime("-1 month")))->count();

        if (auth()->user()->is_admin == 0) {
            $allBookings = Booking::where("user_id", auth()->user()->id);
            $bookings = $allBookings->paginate(10);
            $countBookings = [];
            $countBookings["totalBookings"] = $allBookings->count();
            $countBookings['pendingBookings'] = Booking::where("user_id", auth()->user()->id)->where("status", "pending")->count();
            $countBookings['confirmedBookings'] = Booking::where("user_id", auth()->user()->id)->where("status", "confirmed")->count();
            $countBookings['cancelBookings'] = Booking::where("user_id", auth()->user()->id)->where("status", "cancel")->count();

            return view("backend.pages.client-dashboard", compact("bookings", "countBookings"));
        }
        return view("backend.pages.dashboard", compact("bookings", "countBookings"));
    }
    public function myprofile()
    {
        return view("backend.pages.myprofile");
    }
    public function profileUpdate(Request $request)
    {
        $validation = Validator::make($request->all(), [
            "phone" => "unique:users,phone," . auth()->user()->id,
            "email" => "unique:users,email," . auth()->user()->id,
        ]);
        if ($validation->fails()) {
            foreach ($validation->messages()->getMessages() as $messages) {
                foreach ($messages as $message) {
                    notify()->error($message);
                }
            }
            return back();
        }
        $user = User::find(auth()->user()->id);
        // dd($user);
        $fileName = $user->image;
        if ($request->hasFile("image")) {
            $fileName = time() . "." . $request->image->extension();
            $request->image->move(public_path("uploads"), $fileName);
        }
        $user->update([
            "first_name" => $request->first_name,
            "last_name" => $request->last_name,
            "date_of_birth" => $request->date_of_birth,
            "email" => $request->email_address,
            "phone" => $request->phone,
            "gender" => $request->gender,
            "avatar" => $fileName,
        ]);
        notify()->success("Profile Updated Successfully");
        return back();
    }
}
