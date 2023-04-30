@section('title', 'Dashboard - Gain Salon Booking System')
@extends('backend.master')

@section('content')
    <div class="header-advance-area mt-20" style="margin-top:35px;">
        <div class="breadcome-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcome-list">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="breadcomb-wp d-flex align-items-center h-100" style="align-items: center;">
                                        <div class="breadcomb-icon">
                                            <i class="icon nalika-home"></i>
                                        </div>
                                        <div class="breadcomb-ctn">
                                            <h2>Dashboard</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-admin container-fluid">
        <div class="row admin text-center">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-3 pr-md-0">
                        <div class="admin-content analysis-progrebar-ctn res-mg-t-15">
                            <div class="text-white"
                                style="display:flex;justify-content:center; align-items:center;gap:10px">
                                <div class="">
                                    <li class="la la-clipboard-list la-4x text-white"></li>
                                </div>
                                <div class="">
                                    <h4>Total Bookings</h4>
                                    <h4 class="text-left" style="margin-top:5px">{{ $countBookings['totalBookings'] }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3 pr-md-0">
                        <div class="admin-content analysis-progrebar-ctn res-mg-t-15">
                            <div class="text-white"
                                style="display:flex;justify-content:center; align-items:center;gap:10px">
                                <div class="">
                                    <li class="la la-clipboard-list la-4x text-white"></li>
                                </div>
                                <div class="">
                                    <h4>Booking Pending</h4>
                                    <h4 class="text-left" style="margin-top:5px">{{ $countBookings['pendingBookings'] }}
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3 pr-md-0">
                        <div class="admin-content analysis-progrebar-ctn res-mg-t-15">
                            <div class="text-white"
                                style="display:flex;justify-content:center; align-items:center;gap:10px">
                                <div class="">
                                    <li class="la la-clipboard-list la-4x text-white"></li>
                                </div>
                                <div class="">
                                    <h4>Booking Confirm</h4>
                                    <h4 class="text-left" style="margin-top:5px">{{ $countBookings['confirmedBookings'] }}
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3 pr-md-0">
                        <div class="admin-content analysis-progrebar-ctn res-mg-t-15">
                            <div class="text-white"
                                style="display:flex;justify-content:center; align-items:center;gap:10px">
                                <div class="">
                                    <li class="la la-clipboard-list la-4x text-white"></li>
                                </div>
                                <div class="">
                                    <h4>Booking Cancel</h4>
                                    <h4 class="text-left" style="margin-top:5px">{{ $countBookings['cancelBookings'] }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="product-status mg-b-30" style="margin-top:20px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap">
                        <h4>Bookings</h4>
                        <table>
                            <tr>
                                <th>Id</th>
                                <th>Service</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Quantity</th>
                                <th>Client</th>
                                <th>Bill</th>
                                <th>Payment Status</th>
                            </tr>
                            {{-- @dd($bookings) --}}
                            @foreach ($bookings as $key => $booking)
                                <tr>
                                    <td>{{ $key + $bookings->firstItem() }}</td>
                                    <td>{{ $booking->service->title }}</td>
                                    <td>
                                        @if ($booking->status == 'pending')
                                            <span class="badge text-bg-warning text-warning">pending</span>
                                        @else
                                            <span class="badge text-bg-warning text-success">Confirmed</span>
                                        @endif
                                    </td>
                                    <td>{{ $booking->booking_date }}</td>
                                    <td>{{ $booking->booking_time }}</td>
                                    <td>{{ ($booking->adult != null ? $booking->adult : 0) + ($booking->children != null ? $booking->adult : 0) }}
                                    </td>
                                    <td>{{ $booking->user->name }}</td>
                                    <td>BDT {{ $booking->booking_bill }}</td>
                                    <td>{{ $booking->payment_status }}</td>
                                </tr>
                            @endforeach
                        </table>
                        <div class="custom-pagination">
                            <ul class="pagination">
                                {{ $bookings->links() }}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
