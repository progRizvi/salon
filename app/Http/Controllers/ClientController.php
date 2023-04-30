<?php

namespace App\Http\Controllers;

use App\Models\User;

class ClientController extends Controller
{
    public function index()
    {
        //
        $clients = User::where("is_admin", 0)->orderBy("id", "DESC")->select("id", "first_name", "last_name", "email", "phone")->paginate(10);
        return view("backend.pages.clients.list", compact("clients"));
    }
}
