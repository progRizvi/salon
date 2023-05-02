<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SslCommerzPaymentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

// Frontend

Route::post("/service/get", [HomeController::class, "getService"])->name("service.get");
Route::post("/service/get/date", [HomeController::class, "getServiceByDate"])->name("service.get.date");

Route::get('/', [HomeController::class, "index"])->name('home');

Route::get("/register", [AuthController::class, "registerForm"])->name("register.form");
Route::post("/register", [AuthController::class, "registerStore"])->name("register.store");

Route::get("/login", [AuthController::class, "loginForm"])->name("login");
Route::post("/login", [AuthController::class, "loginStore"])->name("login.store");

Route::middleware("auth")->group(function () {

    Route::get("/logout", [AuthController::class, "logout"])->name("logout");
    Route::get("/dashboard", [DashboardController::class, "index"])->name("dashboard");
    Route::get("/myprofile", [DashboardController::class, "myprofile"])->name("myprofile");
    Route::post("/profile/update", [DashboardController::class, "profileUpdate"])->name("profile.update");
    Route::get("/booking/edit/{id}", [BookingController::class, "edit"])->name("bookings.edit");
    Route::post("/booking/update/{id}", [BookingController::class, "update"])->name("bookings.update");

    Route::middleware("checkAdmin")->group(function () {
        Route::get("/service", [ServiceController::class, "index"])->name("service.index");
        Route::get("/service/create", [ServiceController::class, "create"])->name("service.create");
        Route::post("/service/store", [ServiceController::class, "store"])->name("service.store");
        Route::get("/service/edit/{id}", [ServiceController::class, "edit"])->name("service.edit");
        Route::post("/service/store/{id}", [ServiceController::class, "update"])->name("service.update");
        Route::get("/service/delete/{id}", [ServiceController::class, "delete"])->name("service.delete");

        // Bookings
        Route::get("/bookings", [BookingController::class, "index"])->name("bookings.index");
        Route::get("/booking/show/{id}", [BookingController::class, "show"])->name("bookings.show");

        Route::get("/booking/confirm/{id}", [BookingController::class, "confirm"])->name("bookings.confirm");
        Route::get("/booking/cancel/{id}", [BookingController::class, "cancel"])->name("bookings.cancel");
        Route::get("/booking/pay/{id}", [BookingController::class, "pay"])->name("bookings.pay");

        Route::get("/clients", [ClientController::class, "index"])->name("clients.index");
        Route::get("/reports", [ReportController::class, "index"])->name("reports");
    });

});

Route::post('/pay', [SslCommerzPaymentController::class, 'index'])->name("pay.now");

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
