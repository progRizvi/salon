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
                                        <form action="service.store" method="post">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="review-content-section">
                                                        <div class="input-group mg-b-pro-edt">
                                                            <span class="input-group-addon"><i class="icon nalika-user"
                                                                    aria-hidden="true"></i></span>
                                                            <input type="text" class="form-control"
                                                                placeholder="First Name">
                                                        </div>
                                                        <div class="input-group mg-b-pro-edt">
                                                            <span class="input-group-addon"><i class="icon nalika-edit"
                                                                    aria-hidden="true"></i></span>
                                                            <input type="text" class="form-control"
                                                                placeholder="Product Title">
                                                        </div>
                                                        <div class="input-group mg-b-pro-edt">
                                                            <span class="input-group-addon"><i class="fa fa-usd"
                                                                    aria-hidden="true"></i></span>
                                                            <input type="text" class="form-control"
                                                                placeholder="Regular Price">
                                                        </div>
                                                        <div class="input-group mg-b-pro-edt">
                                                            <span class="input-group-addon"><i class="icon nalika-new-file"
                                                                    aria-hidden="true"></i></span>
                                                            <input type="text" class="form-control" placeholder="Tax">
                                                        </div>
                                                        <div class="input-group mg-b-pro-edt">
                                                            <span class="input-group-addon"><i class="icon nalika-favorites"
                                                                    aria-hidden="true"></i></span>
                                                            <input type="text" class="form-control"
                                                                placeholder="Quantity">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="review-content-section">
                                                        <div class="input-group mg-b-pro-edt">
                                                            <span class="input-group-addon"><i class="icon nalika-user"
                                                                    aria-hidden="true"></i></span>
                                                            <input type="text" class="form-control"
                                                                placeholder="Last Name">
                                                        </div>
                                                        <div class="input-group mg-b-pro-edt">
                                                            <span class="input-group-addon"><i
                                                                    class="icon nalika-favorites-button"
                                                                    aria-hidden="true"></i></span>
                                                            <input type="text" class="form-control"
                                                                placeholder="Product Description">
                                                        </div>
                                                        <div class="input-group mg-b-pro-edt">
                                                            <span class="input-group-addon"><i class="fa fa-usd"
                                                                    aria-hidden="true"></i></span>
                                                            <input type="text" class="form-control"
                                                                placeholder="Sale Price">
                                                        </div>
                                                        <div class="input-group mg-b-pro-edt">
                                                            <span class="input-group-addon"><i class="icon nalika-like"
                                                                    aria-hidden="true"></i></span>
                                                            <input type="text" class="form-control"
                                                                placeholder="Category">
                                                        </div>
                                                        <select name="select"
                                                            class="form-control pro-edt-select form-control-primary">
                                                            <option value="opt1">Select One Value Only</option>
                                                            <option value="opt2">2</option>
                                                            <option value="opt3">3</option>
                                                            <option value="opt4">4</option>
                                                            <option value="opt5">5</option>
                                                            <option value="opt6">6</option>
                                                        </select>
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
