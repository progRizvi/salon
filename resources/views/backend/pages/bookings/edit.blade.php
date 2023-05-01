@section('title', 'Add Service')
@extends('backend.master')
@section('content')
    <div class="all-content-wrapper" style="margin-left: 110px;">
        <div class="header-advance-area mt-20" style="margin-top:35px;">
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcomb-wp d-flex align-items-center h-100"
                                            style="align-items: center;">
                                            <div class="breadcomb-icon">
                                                <i class="icon nalika-home"></i>
                                            </div>
                                            <div class="breadcomb-ctn">
                                                <h2>Edit Booking</h2>
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
        <!-- Single pro tab start-->
        <div class="single-product-tab-area mg-b-30">
            <!-- Single pro tab review Start-->
            <div class="single-pro-review-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-tab-pro-inner">

                                <div id="myTabContent" class="tab-content custom-product-edit">
                                    <div class="product-tab-list tab-pane fade active in" id="description">
                                        <form action="{{ route('bookings.update', $booking->id) }}" method="post">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="review-content-section">
                                                        <select name="select"
                                                            class="form-control pro-edt-select form-control-primary mg-b-pro-edt"
                                                            disabled>
                                                            @foreach ($services as $service)
                                                                <option value="{{ $service->id }}"
                                                                    @if ($service->id == $service->id) selected="selected" @endif>
                                                                    {{ $service->title }}</option>
                                                            @endforeach
                                                        </select>
                                                        <div class="">
                                                            <label for="" class="label">Booking Date
                                                                <br></label>
                                                            <input type="date" class="form-control"
                                                                style="margin-bottom:20px" name="booking_date"
                                                                value="{{ $booking->booking_date }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="review-content-section">
                                                        <div class="">
                                                            <label for="" class="label">Booking Time
                                                                <br></label>
                                                            <input type="time" class="form-control"
                                                                style="margin-bottom:20px" name="booking_time"
                                                                value="{{ $booking->booking_time }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="text-center custom-pro-edt-ds">
                                                        <button type="submit"
                                                            class="btn btn-ctl-bt waves-effect waves-light m-r-10">
                                                            Update
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
