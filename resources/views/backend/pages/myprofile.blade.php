@section('title', 'Profile - Gain Salon Booking System')
@extends('backend.master')

@section('content')

    <style>
        .profile-image {
            width: 10rem;
            height: 10rem !important;
            border: 1px solid #c5c7cc;
            padding: 0.5rem;
            display: inline-block !important;
            border-radius: 50%;
        }
    </style>
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
                                            <h2>Profile</h2>
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
    <div class="product-sales-area mg-tb-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="white-box analytics-info-cs mg-b-30 res-mg-t-30">
                        <div class="main-layout-card-header-contents" style="margin-bottom:10px">
                            <div style="display: flex;justify-content: center;">
                                <img src="{{ auth()->user()->avatar != null ? url('/uploads/', auth()->user()->avatar) : url('images/profile/default.jpg') }}"
                                    alt="" class="img-fluid profile-image">
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h3 class="text-center" style="margin-top:10px">{{ auth()->user()->name }}</h3>
                        </div>
                    </div>
                    <div class="white-box analytics-info-cs mg-b-30">
                        <ul class="nav nav-tabs" role="tablist" style="display: flex; flex-direction: column;color: white;">
                            {{--
                            <li role="presentation" class="active">
                                <a href="#home" aria-controls="home" role="tab"
                                    data-toggle="tab">Home</a>
                            </li>
                            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab"
                                    data-toggle="tab">Messages</a></li>
                            <li role="presentation"><a href="#settings" aria-controls="settings" role="tab"
                                    data-toggle="tab">Settings</a></li>
                             --}}
                            <li role="presentation" class="active">
                                <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a>
                            </li>
                        </ul>

                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="product-sales-chart">

                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="home">
                                <h1 class="text-white" style="margin-bottom: 10px; font-size:30px">My Profile</h1>
                                <hr>

                                <div style="margin-top:20px">
                                    <form action="{{ route('profile.update') }}" method="post"
                                        enctype="multipart/form-data">

                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">

                                                    <div class="">
                                                        <label for="" class="label">
                                                            First name
                                                            <br></label>
                                                        <input type="text" class="form-control"
                                                            style="margin-bottom:20px" name="first_name"
                                                            value="{{ auth()->user()->first_name }}">
                                                    </div>
                                                    <div class="">
                                                        <label for="" class="label">Email Address
                                                            <br></label>
                                                        <input type="email" class="form-control"
                                                            style="margin-bottom:20px" name="email_address"
                                                            value="{{ auth()->user()->email }}">
                                                    </div>
                                                    <div class="">
                                                        <label for="" class="label">
                                                            Date of Birth
                                                            <br></label>
                                                        <input type="date" class="form-control"
                                                            style="margin-bottom:20px" name="date_of_birth"
                                                            value="{{ auth()->user()->date_of_birth }}">
                                                    </div>
                                                    <div class="">
                                                        <label for="" class="label">Change Profile Image
                                                            <br></label>
                                                        <input type="file" class="form-control"
                                                            style="margin-bottom:20px" name="image" accept="image/*"
                                                            value="{{ auth()->user()->avatar }}">
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                                <div class="">
                                                    <label for="" class="label">Last name
                                                        <br></label>
                                                    <input type="text" class="form-control" style="margin-bottom:20px"
                                                        name="last_name" value="{{ auth()->user()->last_name }}">
                                                </div>
                                                <div class="">
                                                    <label for="" class="label">Phone number
                                                        <br></label>
                                                    <input type="tel" class="form-control" style="margin-bottom:20px"
                                                        name="phone" value="{{ auth()->user()->phone }}">
                                                </div>
                                                <div class="">
                                                    <label for="" class="label">Gender
                                                        <br></label>
                                                    <select name="gender"
                                                        class="form-control pro-edt-select form-control-primary mg-b-pro-edt">
                                                        <option value="">Select</option>
                                                        <option @if (auth()->user()->gender == 'male') selected @endif
                                                            value="male">Male</option>
                                                        <option @if (auth()->user()->gender == 'female') selected @endif
                                                            value="female">Female</option>
                                                    </select>
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
                            {{-- <div role="tabpanel" class="tab-pane" id="profile">Profile</div>
                            <div role="tabpanel" class="tab-pane" id="messages">Messages</div>
                            <div role="tabpanel" class="tab-pane" id="settings">Settings</div> --}}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
