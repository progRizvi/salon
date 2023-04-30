@extends('frontend.master')

@section('content')
    <div class="back-img" style="background-image:url({{ url('/images/background/background-image.jpeg') }})">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-12 col-md-6 offset-md-6 col-lg-4 offset-lg-8 col-xl-4 offset-xl-8">
                    <div class="sign-in-sign-up-content">
                        <form class="sign-in-sign-up-form" action="{{ route('login.store') }}" method="post">
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
                                    <label class="text-center d-block">Sign in to your Dashboard</label>
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
                                    <label for="password">Password</label>
                                    <input id="password" ref="password" required name="password" type="password"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="form-row loginButton">
                                <div class="form-group col-12">
                                    <button class="btn btn-info mobile-btn d-inline-flex" type="submit">
                                        <span class="w-100">
                                            Login
                                        </span>
                                    </button>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-6">
                                    <a href="{{ route('home') }}" class="bluish-text">
                                        <i class="las la-home"></i>
                                        Back to Home
                                    </a>
                                </div>
                                <div class="form-group col-6 text-right">
                                    <a href="{{ route('register.form') }}" class="bluish-text">
                                        Register
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
@endsection
