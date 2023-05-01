@extends('frontend.master')

@section('content')
    <div class="salon-landing-wrapper">
        <!--Header area-->
        <div class="header-top-section">
            <nav class="navbar navbar-expand-lg fixed-top">
                <div class="container">
                    <a class="navbar-brand landing-navbar-brand js-scroll-trigger" href="#">
                        <img src="{{ url('/uploads/logo/default-logo.png') }}" alt="" class="img-fluid logo">
                    </a>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto scroll-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#home">
                                    <span>
                                        Home</span>
                                </a>
                            </li>
                            <li class="nav-item" v-show="!hideService">
                                <a class="nav-link" href="#services">
                                    <span>Services</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">
                                    <span>Contact</span>
                                </a>
                            </li>
                            @guest


                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register.form') }}">
                                        Sign up
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">
                                        Sign in
                                    </a>
                                </li>
                            @else
                                <li v-if="user" class="nav-item">
                                    <a href="{{ route('dashboard') }}" class="nav-link">
                                        <span>
                                            My Account
                                        </span>
                                    </a>
                                </li>
                                <li v-if="user" class="nav-item">
                                    <a href="{{ route('logout') }}" class="nav-link">
                                        <span>Log Out</span>
                                    </a>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div>
            <!--Service booking area-->
            <div>
                <div class="service-book-area">
                    <form action="{{ route('pay.now') }}" method="post">
                        @csrf
                        <div class="main-banner"
                            style="
                            background-image: url({{ url('/images/background/background-image.jpeg') }})
                        ">
                            <div class="container">
                                <div class="text-white">
                                    <h1 class="mb-0 banner-title">
                                        Beauty & Salon
                                    </h1>
                                    <p v-if="landing_page_message != ''" class="mb-4 banner-subtitle">
                                        Let's make you an appointment to keep yourself attractive.
                                    </p>
                                </div>
                                <div class="banner-area pb-0">
                                    <div class="banner-service-area">
                                        <div class="bg-white banner-content rounded-sm bottom-radius-0">
                                            <div class="row">
                                                <div class="col-12 col-sm-12 col-md-4 col-lg-4">

                                                    <select name="service_id" id="service_id" class="form-control">

                                                        <option value="">select</option>

                                                        @if ($services->count() > 1)
                                                            @foreach ($services as $service)
                                                                <option value="{{ $service->id }}">{{ $service->title }}
                                                                </option>
                                                            @endforeach
                                                        @else
                                                            <option value="{{ $services->id }}">{{ $services->title }}
                                                            </option>
                                                        @endif

                                                    </select>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                                    <div class="dropdown guest-selection">
                                                        <select name="adult-selection" id="adults" class="form-control">
                                                            <option value="">Select Adults</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                                    <div class="dropdown guest-selection">
                                                        <select name="child-selection" id="children" class="form-control">
                                                            <option value="">Select Children</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-5">
                                                    <div class="dropdown guest-selection">
                                                        <input type="date" class="form-control" id="bookings_date"
                                                            name="bookings_date">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-5">
                                                    <div class="dropdown guest-selection">
                                                        <input type="time" class="form-control" name="booking_time">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="calendar-form-wrapper">
                            <div class="container">
                                <div class="bg-white calendar-form-container custom-margin-top">
                                    <div class="row justify-content-center">
                                        <div class="col-12">
                                            {{-- <!-- booking information --> --}}
                                            <div>
                                                <div class="row mb-5">
                                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                                        <div class="service-image-wrapper service-img-container"
                                                            style="background-image:url({{ url('uploads/service/service.png') }}); height: 264.625px;">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                                                        <div class="service-information-wrapper">
                                                            <div class="mb-3 service-title">
                                                                <h4 id="service_title">

                                                                </h4>
                                                            </div>
                                                            <div class="mb-3">
                                                                <p class="text-with-opacity" id="service_description">
                                                                </p>
                                                            </div>
                                                            <div class="mb-3">
                                                                <p class="mb-0" id="seat">

                                                                    <span>Available Seat:</span>
                                                                    <span class="mr-1" id="available">

                                                                    </span>
                                                                </p>
                                                                <p class="mb-0">
                                                                    <span class="service-info-heading">Time:
                                                                    </span>
                                                                    <span class="service-info-value" id="no_of_guests">
                                                                        {{--
                                                                    {{ noOfAdult }}
                                                                    {{ trans('lang.adults') }} - {{ noOfChildren }}
                                                                    {{ trans('lang.children') }}
                                                                     --}}
                                                                    </span>
                                                                </p>
                                                            </div>
                                                            <h5 class="mb-3 text-landing-color">
                                                                <span>Price:</span>
                                                                <span id="unit_price"></span>

                                                            </h5>
                                                            <div class="alert price-label mb-0" role="alert">
                                                                <input type="hidden" name="total_amount"
                                                                    id="total_amount">
                                                                <span>Net Price</span>
                                                                <span class="float-right" id="total_price">
                                                                    BDT0.00
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @guest
                                                    <a href="{{ route('login') }}">Please Login For Booking</a>
                                                @else
                                                    <div class="row mt-2">
                                                        <div class="form-group col-md-6">
                                                            <label for="full_name">Full Name</label>
                                                            <input name="full_name" id="full_name" type="text"
                                                                class="form-control" value="{{ auth()->user()->name }}">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="email">Email</label>
                                                            <input name="email" id="email" type="text"
                                                                class="form-control" value="{{ auth()->user()->email }}">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="phone_number">
                                                                Phone Number
                                                            </label>
                                                            <input type="text" id="phone_number" name="phone_number"
                                                                class="form-control" {{ auth()->user()->phone }}>
                                                        </div>

                                                    </div>
                                                    <div class="row justify-content-center">
                                                        <div
                                                            class="form-group col-6 col-sm-4 col-md-4 col-lg-4 col-xl-4 mb-0 text-center">
                                                            <button class="btn btn-block btn-landing" type="submit"
                                                                id="submit">
                                                                Confirm
                                                            </button>
                                                        </div>
                                                    </div>
                                                @endguest
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                    <!--Service list area-->
                    <div id="services" class="service-list-area">
                        <!-- Multiple service -->
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-5">
                                        <h2 class="section-title mb-0">
                                            Our Services
                                        </h2>
                                        <p class="subtitle">You can book service from the cart view easily.</p>
                                    </div>
                                </div>
                            </div>

                            @if ($services->count() > 1)
                                <div class="row">
                                    @foreach ($services as $service)
                                        <div class="col-sm-4 col-md-4 col-sm-3 col-md-3 ">
                                            <div class="card">
                                                <div class="service-img-container height-16-rem"
                                                    style="background-image: url({{ url('/images/', $service->image) }})">
                                                </div>

                                                <div class="card-body">
                                                    <h5 class="card-title text-truncate mb-4">
                                                        {{ $service->title }}
                                                    </h5>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="media mb-3">
                                                                <i class="far fa-clock align-self-center mr-2 fa-2x"></i>
                                                                <div class="media-body">
                                                                    <p class="service-info-heading">
                                                                        Duration:
                                                                    </p>
                                                                    <p class="service-info-value mb-0">
                                                                        {{ $service->service_duration }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="media mb-3">
                                                                <i
                                                                    class="fas fa-dollar-sign align-self-center mr-2 fa-2x"></i>
                                                                <div class="media-body">
                                                                    <p class="service-info-heading">
                                                                        Price Per Persion:
                                                                    </p>
                                                                    <p class="service-info-value mb-0">
                                                                        {{ $service->price }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="media">
                                                                {{-- <i class="las la-chair la-2x align-self-center mr-2" /> --}}
                                                                <i class="fas fa-chair align-self-center mr-2 fa-2x"></i>

                                                                <div class="media-body">
                                                                    <p class="service-info-heading">
                                                                        Capacity Per Service:
                                                                    </p>
                                                                    <p class="service-info-value mb-0">
                                                                        {{ $service->available_seat }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer pt-0">
                                                    <a href="#" class="btn btn-landing"
                                                        @click.prevent="serviceBook(serviceData)">
                                                        Book
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @else
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="row">
                                                    <div class="col-12 col-sm-4 pr-sm-0">
                                                        <div class="service-img-container rounded-left-img-container"
                                                            style="background-image: url({{ url('/images/', $services->image) }})">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-8 pl-sm-0">
                                                        <div class="card-body">
                                                            <div class="mb-3 service-title">
                                                                <h4>
                                                                    {{ $services->title }}
                                                                </h4>
                                                            </div>
                                                            <div class="mb-3">
                                                                <p class="text-with-opacity">
                                                                    {{ $services->description }}
                                                                </p>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="media mb-3">
                                                                        <i class="far fa-clock align-self-center mr-2">
                                                                        </i>
                                                                        <div class="media-body">
                                                                            <p class="service-info-heading">
                                                                                Duration:</p>
                                                                            <p class="service-info-value mb-0">
                                                                                {{ $services->service_duration }}
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="media mb-3">
                                                                        <i
                                                                            class="fas fa-dollar-sign align-self-center mr-2">
                                                                        </i>
                                                                        <div class="media-body">
                                                                            <p class="service-info-heading">
                                                                                Price Per Person:
                                                                            </p>
                                                                            <p class="service-info-value mb-0">
                                                                                {{ $services->price }}
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="media">
                                                                        <i class="fas fa-chair align-self-center mr-2"></i>
                                                                        <div class="media-body">
                                                                            <p class="service-info-heading">
                                                                                Capacity Per Service:
                                                                            </p>
                                                                            <p class="service-info-value mb-0">
                                                                                {{ $services->available_seat }}
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer pt-0">
                                                            <a href="#" class="btn btn-landing">
                                                                Book
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            @endif
                        </div>

                        <!-- Single service -->

                    </div>

                </div>
            </div>
            <div id="contact" class="footer-section">
                <div class="footer-top-section">
                    <div class="container">
                        <div class="mb-5">
                            <h2 class="section-title mb-0">Contact Us</h2>
                            <p class="subtitle">We'd love to hear from you and stay with us.</p>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-8">
                                <form action="">
                                    <div class="form-group">
                                        <label for="email" class="form-control-placeholder">Your email here</label>
                                        <input type="email" id="email" name="email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="subject" class="form-control-placeholder">Subject</label>
                                        <input type="text" id="subject" name="subject" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="message" class="form-control-placeholder">Subject</label>
                                        <textarea name="message" id="message" rows="9" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group mb-0">
                                        <button class="btn btn-landing" type="submit">Send</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="widget-wrapper text-center">
                                    <div class="widget-icon-wrapper">
                                        <i class="las la-map-marker la-2x"></i>

                                    </div>
                                    <h5>Visit us</h5>
                                    <p>888 53rd St. Los Angeles, CA 90026</p>
                                </div>
                                <div class="widget-wrapper text-center">
                                    <div class="widget-icon-wrapper">
                                        <i class="las la-phone la-2x"></i>
                                    </div>
                                    <h5>Call us</h5>
                                    <p>+0123456789</p>
                                </div>
                                <div class="widget-wrapper text-center">
                                    <div class="widget-icon-wrapper">
                                        <i class="las la-envelope la-2x"></i>
                                    </div>
                                    <h5>Mail us</h5>
                                    <p>demo@email.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <ul
                                    class="nav justify-content-center justify-content-md-start justify-content-lg-start footer-nav-menu">
                                    <li class="nav-item">
                                        <a href="#home" class="nav-link">
                                            Home
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#services" class="nav-link">
                                            services
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#contact" class="nav-link">
                                            Contact
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('register.form') }}" class="nav-link">
                                            Signup
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('login') }}" class="nav-link">
                                            Login
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $(document).on("change", "#service_id", function() {
                var service_id = $(this).val();
                $.ajax({
                    url: "{{ route('service.get') }}",
                    type: "POST",
                    data: {
                        service_id: service_id
                    },
                    success: function(response) {
                        $("#service_title").html(response.title);
                        $("#service_description").html(response.description);
                        $("#unit_price").html("BDT" + response.price);
                        $("#available").html(response.available_seat);
                        $(".service-image-wrapper").css("background-image",
                            `url({{ url('images/') }}/${response.image})`);
                        console.log(response);
                        if (response.available_seat == 0) {
                            $("#seat").html(`<span class='badge badge-no-slot'>
                                                                    No Slots Available
                                                                </span>`);
                        }
                    }
                })
            })
            $(document).on("change", "#bookings_date", function() {
                var bookings_date = $(this).val();
                var service_id = $("#service_id").val();
                if (service_id == "") {
                    alert("Please select a service first");
                    return false;
                }
                $.ajax({
                    url: "{{ route('service.get.date') }}",
                    type: "POST",
                    data: {
                        bookings_date: bookings_date,
                        service_id: service_id
                    },
                    success: function(response) {
                        console.log(response);
                        toastr.error("response.message");
                        $.notify("BOOM!", "error");
                        $("#available").html(response.available_seat);
                        if (response.available_seat == 0) {
                            $("#seat").html(`<span class='badge badge-no-slot'>
                                                                    No Slots Available
                                                                </span>`);
                        }
                        console.log(response);
                    }
                })
            })
            $(document).on("change", "#adults", function() {
                var adults = $(this).val();
                const children = $("#children").val();
                var service_id = $("#service_id").val();
                if (service_id == "") {
                    alert("Please select a service first");
                    return false;
                }
                const totalprice = (parseInt(adults) + (children ? parseInt(children) : 0)) * $(
                        "#unit_price").text()
                    .replace("BDT", "");
                $("#total_price").html("BDT" + totalprice);
            })
            $(document).on("change", "#children", function() {
                var children = $(this).val();
                const adults = $("#adults").val();
                var service_id = $("#service_id").val();
                if (service_id == "") {
                    alert("Please select a service first");
                    return false;
                }
                const totalprice = ((adults ? parseInt(adults) : 0) + parseInt(children)) * $("#unit_price")
                    .text()
                    .replace("BDT", "");
                $("#total_price").html("BDT" + totalprice);
            })
            $(document).on("click", "#submit", function() {
                var service_id = $("#service_id").val();
                var bookings_date = $("#bookings_date").val();
                var adults = $("#adults").val();
                var children = $("#children").val();
                var total_price = $("#total_price").text().replace("BDT", "");
                if (service_id == "") {
                    alert("Please select a service first");
                    return false;
                }
                if (bookings_date == "") {
                    alert("Please select a date first");
                    return false;
                }
                if (adults == "") {
                    alert("Please select number of adults");
                    return false;
                }
                if (children == "") {
                    alert("Please select number of children");
                    return false;
                }

                if (total_price) {
                    $("#total_amount").val(total_price);
                }
            })
        })
    </script>
@endsection
