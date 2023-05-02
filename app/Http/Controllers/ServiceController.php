<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::paginate(10);

        return view("backend.pages.services.list", compact("services"));
    }
    public function create()
    {
        return view("backend.pages.services.create");
    }
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'title' => 'required|unique:services,title',
            'price_per_space' => 'required',
            'multi_bookings' => 'required',
            'available_space' => 'required',
            "image" => "required",
        ]);

        if ($validation->fails()) {

            foreach ($validation->errors()->all() as $error) {
                notify()->error($error);
            }
            return redirect()->back();
        }
        $imageName = null;

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        }
        Service::create([
            'title' => $request->title,
            'price' => $request->price_per_space,
            "image" => $imageName,
            'service_duration' => $request->service_duration,
            'multiple_bookings' => $request->multi_bookings,
            'available_seat' => $request->available_space,
            'description' => $request->description,
            'service_duration_type' => 'hourly',
            'service_starting_date' => $request->service_start_date,
            'service_starts' => $request->service_starts,
            'service_ending_date' => $request->service_ending_date,
            'service_ends' => $request->service_ends,
            'max_booking' => '2',
            'created_by' => '1',
            'activation' => '1',
        ]);
        notify()->success('Service created successfully');
        return redirect()->route('service.index');
    }
    public function edit($id)
    {
        $service = Service::find($id);
        return view("backend.pages.services.edit", compact("service"));
    }
    public function update(Request $request, $id)
    {
        $validation = Validator::make($request->all(), [
            'title' => 'required',
            'price_per_space' => 'required',
            'multi_bookings' => 'required',
            'available_space' => 'required',

        ]);

        if ($validation->fails()) {

            foreach ($validation->errors()->all() as $error) {
                notify()->error($error);
            }
            return redirect()->back();
        }
        $service = Service::find($id);

        $imageName = $service->image;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        }

        $service->update([
            'title' => $request->title,
            'price' => $request->price_per_space,
            "image" => $imageName,
            'service_duration' => $request->service_duration,
            'multiple_bookings' => $request->multi_bookings,
            'available_seat' => $request->available_space,
            'description' => $request->description,
            'service_starting_date' => $request->service_start_date,
            'service_starts' => $request->service_starts,
            'service_ending_date' => $request->service_ending_date,
            'service_ends' => $request->service_ends,
        ]);

        notify()->success('Service updated successfully');
        return redirect()->route('service.index');

    }
    public function delete($id)
    {
        $service = Service::find($id);
        $service->delete();
        notify()->success('Service deleted successfully');
        return redirect()->route('service.index');
    }
}
