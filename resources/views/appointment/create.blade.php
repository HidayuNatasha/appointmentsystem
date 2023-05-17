@extends('layouts.cust')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href='../lib/main.css' rel='stylesheet' />
<link href='../css/Appointment.css' rel='stylesheet' />
<script src='../lib/main.js'></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>
<script src='../js/Appointment.js'></script>
<body>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Make Appointment</h2>
        </div>
       
    </div>
</div>
<br>

<input type="hidden" name="role" id="role" value="{{ auth()->user()->usertype }}">
<div class="container" style="background-color: white;">
<div id='calendar'></div>
</div>
</body>
@endsection
@include('appointment.Modal.AddAppointment')
@include('appointment.Modal.ViewAppointment')

