@section('title', 'Services')
@extends('backend.master')
@section('content')
    <div class="product-status mg-b-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap">
                        <h4>Services</h4>
                        <div class="add-product">
                            <a href="{{ route('service.create') }}">Add Service</a>
                        </div>
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
                            @foreach ($bookings as $key => $booking)
                                @dd($booking)
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
                                    <td>Out Of Stock</td>
                                    <td>$15</td>
                                    <td>
                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i
                                                class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i
                                                class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        <div class="custom-pagination">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
