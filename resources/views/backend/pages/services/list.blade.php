@section('title', 'Services')
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
                                            <h2>Services</h2>
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
                        <h4>Services</h4>
                        <div class="add-product">
                            <a href="{{ route('service.create') }}">Add Service</a>
                        </div>
                        <table>
                            <tr>
                                <th>Title</th>
                                <th>Price</th>
                                <th>Duration</th>
                                <th>Description</th>
                                <th>Starts</th>
                                <th>Ends</th>
                                <th>Status</th>
                            </tr>
                            @foreach ($services as $service)
                                {{-- @dd($service->activation) --}}
                                <tr>
                                    <td>{{ $service->title }}</td>
                                    <td>{{ $service->price }}</td>
                                    <td>{{ $service->service_duration }}</td>
                                    <td>{{ $service->description }}</td>
                                    <td>{{ $service->service_starts }}</td>
                                    <td>{{ $service->service_ends }}</td>
                                    <td>
                                        <span
                                            class="text-success fw-bold">{{ $service->activation == 1 ? 'Active' : 'Inactive' }}</span>
                                    </td>
                                    <td>
                                        <a href="{{ route('service.edit', $service->id) }}" data-toggle="tooltip"
                                            title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o"
                                                aria-hidden="true"></i></a>
                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i
                                                class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        <div class="custom-pagination">
                            <ul class="pagination">
                                {{ $services->links() }}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
