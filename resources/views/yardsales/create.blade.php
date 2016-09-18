@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Add Your Deltona Yard Sale listing</div>

                    <div class="panel-body">

                        {{ Form::open(['action' => 'YardSaleController@store', 'method' => 'post']) }}
                        {{ Form::token() }}
                        <div class="form-group">
                            {{ Form::label('Address', null, ['class' => 'control-label']) }}
                            {{ Form::text('address', null,['class' => 'form-control']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('City', null, ['class' => 'control-label']) }}
                            {{ Form::text('city', 'Deltona',['class' => 'form-control']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('Zip', null, ['class' => 'control-label']) }}
                            {{ Form::text('zip', null,['class' => 'form-control']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('Listing Visibility', null, ['class' => 'control-label']) }}
                            {{ Form::select('privacy', ['public' => 'Public', 'private' => 'Private',], null, ['placeholder' => 'Should this listing be public or private?']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('Type of Sale', null, ['class' => 'control-label']) }}
                            {{ Form::select('type_of_sale', ['regular' => 'Regular', 'moving' => 'Moving', 'cleaning' => 'Spring Cleaning'], null, ['placeholder' => 'Pick a sale type']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('Start Date', null, ['class' => 'control-label']) }}
                            {{ Form::date('start_date', \Carbon\Carbon::now()) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('End Date', null, ['class' => 'control-label']) }}
                            {{ Form::date('end_date', \Carbon\Carbon::now()) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('Payment Types Accepted', null, ['class' => 'control-label']) }}
                            {{ Form::select('payment_types_accepted', ['cash' => 'Cash', 'check' => 'Check', 'creditcard' => 'Credit Card'], null, ['multiple' => true]) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('Display on Map', null, ['class' => 'control-label']) }}
                            {{ Form::radio('display_on_map', 1, true) }} Yes
                            {{ Form::radio('display_on_map', 0, false) }} No
                        </div>
                        <div class="form-group">
                            {{ Form::label('Description of your Yard Sale', null, ['class' => 'control-label']) }}
                            {{ Form::textarea('description', null,['class' => 'form-control']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('What Time Does It Start?', null, ['class' => 'control-label']) }}
                            {{ Form::text('time', null,['class' => 'form-control']) }}
                        </div>
                        {{ Form::submit('Submit') }}
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection