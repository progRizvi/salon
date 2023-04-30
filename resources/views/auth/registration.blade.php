@extends('frontend.master')
@section('content')
    <div>
        <div class="back-img" style="background-image:url({{ url('/images/background/background-image.jpeg') }})">
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-12 col-md-6 offset-md-6 col-lg-4 offset-lg-8 col-xl-4 offset-xl-8">
                        <div class="sign-in-sign-up-content">
                            <form class="sign-in-sign-up-form" method="post" action="{{ route('register.store') }}">
                                @csrf
                                <div class="text-center mb-4 application-logo">
                                    <img src="{{ url('/uploads/logo/default-logo.png') }}" alt=""
                                        class="img-fluid logo">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-12">
                                        <h6 class="text-center mb-0">
                                            Hi There!
                                        </h6>
                                        <label class="text-center d-block">Sign up for your new account.
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-12">
                                        <label for="first_name">First Name</label>
                                        <input id="first_name" required type="text" name="first_name"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-12">
                                        <label for="last_name">Last Name</label>
                                        <input id="first_name" required type="text" name="last_name"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-12">
                                        <label for="email">Email</label>
                                        <input id="email" type="email" name="email" class="form-control">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-12">
                                        <label for="email">Phone</label>
                                        <input type="tel" id="phone" name="phone" class="form-control">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-12">
                                        <label for="password">Password</label>
                                        <input id="password" ref="password" required name="password" type="password"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-12">
                                        <label for="conf-password">Confirm Password</label>
                                        <input id="conf-password" name="password_confirmation" type="password"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="form-row loginButton">
                                    <div class="form-group col-12">
                                        <button class="btn btn-info mobile-btn d-inline-flex" type="submit">
                                            <span class="w-100">
                                                Registration
                                            </span>
                                        </button>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-6 ">
                                        <a href="{{ route('home') }}" class="bluish-text">
                                            <i class="las la-home"> </i>
                                            Back to Home
                                        </a>
                                    </div>
                                    <div class="form-group col-6 text-right">
                                        <a href="{{ route('login') }}" class="bluish-text">
                                            <i class="las la-lock"> </i>
                                            Login Here
                                        </a>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-12">
                                        <p class="text-center mt-5">
                                            {{-- {{ copyright_text }} --}}
                                        </p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
