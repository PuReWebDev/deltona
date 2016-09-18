@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Deltona Yard Sale listings
                        <button type="button" class="btn btn-primary btn-xs pull-right"><a href="/yard-sales/create">Add
                                New Listing</a></button>
                    </div>

                    <div class="panel-body">
                        You are logged in! {{ trans('messages.welcome') }} <br/>
                        <table class="table table-bordered table-striped">
                            <thead>address</thead>
                            <thead>city</thead>
                            <thead>zip</thead>
                            <thead>privacy</thead>
                            <thead>type_of_sale</thead>
                            <thead>start_date</thead>
                            <thead>end_date</thead>
                            <thead>payment_types_accepted</thead>
                            <thead>display_on_map</thead>
                            <thead>description</thead>
                            <thead>time</thead>
                            @foreach ($yardSales as $yardSale)
                                <tr>
                                    <td>Yard Sale Address {{ $yardSale->address }}</td>
                                    <td>Yard Sale Address {{ $yardSale->city }}</td>
                                    <td>Yard Sale Address {{ $yardSale->zip }}</td>
                                    <td>Yard Sale Address {{ $yardSale->privacy }}</td>
                                    <td>Yard Sale Address {{ $yardSale->type_of_sale }}</td>
                                    <td>Yard Sale Address {{ $yardSale->start_date }}</td>
                                    <td>Yard Sale Address {{ $yardSale->end_date }}</td>
                                    <td>Yard Sale Address {{ $yardSale->payment_types_accepted }}</td>
                                    <td>Yard Sale Address {{ $yardSale->display_on_map }}</td>
                                    <td>Yard Sale Address {{ $yardSale->description }}</td>
                                    <td>Yard Sale Address {{ $yardSale->time }}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection