@section('title', 'Bookings')
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
                                            <h2>Bookings</h2>
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
    <div class="product-status mg-b-30">
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
                                <th>Action</th>
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
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button type="button" title="Edit" class="pd-setting-ed dropdown-toggle"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="la la-ellipsis-v la-2x"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="{{ route('bookings.edit', $booking->id) }}">Edit</a></li>
                                                <li><a href="{{ route('bookings.show', $booking->id) }}">View</a></li>
                                                @if ($booking->status == 'pending')
                                                    <li><a href="{{ route('bookings.confirm', $booking->id) }}">Confirm</a>
                                                    </li>
                                                    <li><a href="{{ route('bookings.cancel', $booking->id) }}">Cancel</a>
                                                    </li>
                                                @endif
                                                @if ($booking->payment_status == 'due')
                                                    <li><a href="{{ route('bookings.pay', $booking->id) }}">Pay</a></li>
                                                @endif
                                            </ul>
                                        </div>
                                    </td>
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
