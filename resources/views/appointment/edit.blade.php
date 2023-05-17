@extends('layouts.cust')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Appointment</h2>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('appointment.update',$appointment->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Date:</strong>
                    <input type="date" name="date" value="{{ $appointment->date}}" class="form-control" placeholder="">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Time:</strong>
                    <input type="time" class="form-control" name="time" value="{{ $appointment->time }}" placeholder=""></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12"> 
                <div class="form-group">
                    <strong>Mileage:</strong>
                    <input type="text" class="form-control" name="mileage" value="{{ $appointment->mileage }}" placeholder=""></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-primary" href="{{ route('appointment.index') }}"> Back</a>
            </div>
        </div>
   
    </form>
@endsection