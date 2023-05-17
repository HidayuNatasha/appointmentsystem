@extends('layouts.cust')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Appointment Details</h2>
                <div class="form-group">
                    <strong></strong>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong></strong>
        </div>

    </div>
   
    <div class="row">{{-- details --}}
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date:</strong>
                {{ $appointment->date }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Time:</strong>
                {{ $appointment->time }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mileage:</strong>
                {{ $appointment->mileage }}
            </div>
        </div>
        <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('appointment.index') }}"> Back</a>
        </div>
    </div>
@endsection