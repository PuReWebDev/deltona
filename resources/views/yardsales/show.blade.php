@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="">
                <div class="panel panel-default">
                    <div class="panel-heading">Deltona Yard Sale listings
                        <button type="button" class="btn btn-primary btn-xs pull-right">
                            <a href="/yard-sales/create" style="color: #ffffff;">Add New Listing</a>
                        </button>
                    </div>

                    <div class="panel-body">
                        You are logged in! {{ trans('messages.welcome') }}
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Address</th>
                                    <th>City</th>
                                    <th>Zip</th>
                                    <th>Privacy</th>
                                    <th style="white-space: nowrap">Sale Type</th>
                                    <th>Start date</th>
                                    <th>End date</th>
                                    <th style="white-space: nowrap">Payment Accepted</th>
                                    <th style="white-space: nowrap">Display on map</th>
                                    <th>Description</th>
                                    <th>Time</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td style="white-space: nowrap">{{ $yardSale->address }}</td>
                                    <td>{{ $yardSale->city }}</td>
                                    <td>{{ $yardSale->zip }}</td>
                                    <td>{{ $yardSale->privacy }}</td>
                                    <td>{{ $yardSale->type_of_sale }}</td>
                                    <td style="white-space: nowrap">{{ $yardSale->start_date }}</td>
                                    <td style="white-space: nowrap">{{ $yardSale->end_date }}</td>
                                    <td>{{ $yardSale->payment_types_accepted }}</td>
                                    <td>{{ $yardSale->display_on_map }}</td>
                                    <td>{{ $yardSale->description }}</td>
                                    <td>{{ $yardSale->time }}</td>
                                    <td style="white-space: nowrap;">
                                        <button type="button" class="btn btn-primary btn-xs">
                                            <a href="/yard-sales/{{$yardSale->id}}" style="color: #ffffff;">Edit</a>
                                        </button>
                                        <button type="button" class="btn btn-primary btn-xs">
                                            <a href="/yard-sales/{{$yardSale->id}}" style="color: #ffffff;">Delete</a>
                                        </button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection