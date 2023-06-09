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

    <div class="author-area-pro" style="margin-top:30px; margin-bottom:30px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="personal-info-wrap">
                        <div class="text-white" style="padding-top:30px;padding-bottom:30px">
                            <h4 style="font-size:1.64rem; padding-top:10px; line-height:110%">This Month</h4>
                            <p style="font-size:1rem; padding-bottom:20px; line-height:110%">Total bookings</p>
                            <h4 style="font-size:2.92rem; line-height:110%">{{ $countBookings['thisMonth'] }}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="author-widgets-single res-mg-t-30">
                        <div class="text-white" style="padding-top:30px;padding-bottom:30px">
                            <h4 style="font-size:1.64rem; padding-top:10px; line-height:110%">Last Month</h4>
                            <p style="font-size:1rem; padding-bottom:20px; line-height:110%">Total bookings</p>
                            <h4 style="font-size:2.92rem; line-height:110%">{{ $countBookings['lastMonth'] }}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="personal-info-wrap personal-info-ano res-mg-t-30">
                        <div class="text-white" style="padding-top:30px;padding-bottom:30px">
                            <h4 style="font-size:1.64rem; padding-top:10px; line-height:110%">Till Now
                            </h4>
                            <p style="font-size:1rem; padding-bottom:20px; line-height:110%">Total bookings</p>
                            <h4 style="font-size:2.92rem; line-height:110%">{{ $countBookings['totalBookings'] }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
