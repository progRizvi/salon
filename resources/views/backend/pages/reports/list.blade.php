@section('title', 'Report')
@extends('backend.master')
@section('content')
    <style>
        body {
            background-color: white !important;
        }

        .report-table th,
        .report-table td {
            padding: 10px;
            color: #000 !important;
        }
    </style>
    <div class="header-advance-area mt-20" style="margin-top:35px;">
        <div class="breadcome-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcome-list">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="breadcomb-wp d-flex align-items-center h-100" style="align-items: center;">
                                        <div class=""
                                            style="display:flex; justify-content: space-between; width:100%; height:100%; align-items:center;">
                                            <form action="{{ route('reports') }}">
                                                <div class="input-group mg-b-pro-edt">
                                                    <div style="display:flex;">
                                                        <div>
                                                            <label for="" class="label">From</label>
                                                            <input type="date" class="form-control" name="from_date">
                                                        </div>
                                                        <div>
                                                            <label for="" class="label">To</label>
                                                            <input type="date" class="form-control" name="to_date">
                                                        </div>
                                                    </div>
                                                    <span class="input-group-addon">
                                                        <button type="submit">Search</button>
                                                    </span>
                                                </div>
                                            </form>
                                            <div class="add-product">
                                                <a style="position:static !important; cursor:pointer"
                                                    onclick="printReport()">Print</a>
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
    </div>
    <div class="product-status mg-b-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap" style="background:#fff" id="printableArea">
                        <h4>Report</h4>
                        <table class="report-table">
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Service</th>
                                <th>Booking Date</th>
                                <th>Amount</th>
                                <th>Payment Status</th>
                            </tr>
                            @if ($bookings->count() == 0)
                                <tr>
                                    <td colspan="5" style="text-align:center">No data found</td>
                                </tr>
                            @else
                                @foreach ($bookings as $key => $booking)
                                    <tr>
                                        <td>{{ $key + $bookings->firstItem() }}</td>
                                        <td>{{ $booking->user->name }}</td>
                                        <td>{{ $booking->service->title }}</td>
                                        <td>{{ $booking->booking_date }}</td>
                                        <td>BDT {{ $booking->booking_bill }}
                                        </td>
                                        <td>{{ $booking->payment_status }}</td>
                                    </tr>
                                @endforeach
                            @endif
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


@section('scripts')
    <script>
        function printReport() {
            var printContents = document.getElementById('printableArea').innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();

            document.body.innerHTML = originalContents;
        }
    </script>
@endsection
