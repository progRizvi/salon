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
                                                <h2>Add Service</h2>
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
                                        <form action="{{ route('service.store') }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="">
                                                <label for="" class="label">Title
                                                    <br></label>
                                                <input type="text" class="form-control" style="margin-bottom:20px"
                                                    name="title">
                                            </div>
                                            <div class="">
                                                <label for="" class="label">Description
                                                    <br></label>
                                                <textarea name="description" id="" rows="4" class="form-control" style="margin-bottom:20px"></textarea>
                                            </div>
                                            <div class="">
                                                <label for="" class="label">Allow multiple bookings
                                                    <br></label>
                                                <div style="margin-bottom:20px">
                                                    <label for="" class="label">
                                                        <input type="radio" class="" name="multi_bookings"
                                                            value="1">
                                                        Yes</label>
                                                    <label for=""
                                                        class="label d-flex justify-content-center align-items-center">
                                                        <input type="radio" class="" name="multi_bookings"
                                                            value="0">
                                                        No</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="review-content-section">

                                                        <div class="">
                                                            <label for="" class="label">Available space per service
                                                                <br></label>
                                                            <input type="number" class="form-control"
                                                                style="margin-bottom:20px" name="available_space">
                                                        </div>
                                                        <div class="">
                                                            <label for="" class="label">Service Starting Date
                                                                <br></label>
                                                            <input type="date" class="form-control"
                                                                style="margin-bottom:20px" name="service_start_date">
                                                        </div>
                                                        <div class="">
                                                            <label for="" class="label">Service starts
                                                                <br></label>
                                                            <input type="time" class="form-control"
                                                                style="margin-bottom:20px" name="service_starts">
                                                        </div>
                                                        <div class="">
                                                            <label for="" class="label">Service duration
                                                                <br></label>
                                                            <input type="time" class="form-control"
                                                                style="margin-bottom:20px" name="service_duration">
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                                    <div class="">
                                                        <label for="" class="label">Service ending date
                                                            <br></label>
                                                        <input type="date" class="form-control"
                                                            style="margin-bottom:20px" name="service_ending_date">
                                                    </div>
                                                    <div class="">
                                                        <label for="" class="label">Price per space
                                                            <br></label>
                                                        <input type="number" class="form-control"
                                                            style="margin-bottom:20px" name="price_per_space">
                                                    </div>
                                                    <div class="">
                                                        <label for="" class="label">Service ends
                                                            <br></label>
                                                        <input type="time" class="form-control"
                                                            style="margin-bottom:20px" name="service_ends">
                                                    </div>
                                                    <div class="">
                                                        <label for="" class="label">Image
                                                            <br></label>
                                                        <input type="file" class="form-control" accept="image/*"
                                                            style="margin-bottom:20px" name="image">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="text-center custom-pro-edt-ds">
                                                        <button type="submit"
                                                            class="btn btn-ctl-bt waves-effect waves-light m-r-10">Add
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
