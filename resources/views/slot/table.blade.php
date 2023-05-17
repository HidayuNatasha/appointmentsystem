@section('content')

<!doctype html>
<html lang="en">
  <head>
  	<title>Slot List</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{ asset('table-03/css/style.css') }}">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.13.18/jquery.timepicker.min.css" integrity="sha512-GgUcFJ5lgRdt/8m5A0d0qEnsoi8cDoF0d6q+RirBPtL423Qsj5cI9OxQ5hWvPi5jjvTLM/YhaaFuIeWCLi6lyQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Slot Information</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
                    <div class="rs-select2--dark rs-select2--md m-r-10 rs-select2--border">
                        <a class="btn btn-success" data-toggle="modal" data-target="#exampleModal" >Add Slot</a>
                    </div>
					<div class="table-wrap">
						<table class="table">
					    <thead class="thead-primary">
					      <tr>
                            <th>Slot</th>
                            <th>Description</th>
                            <th>Status</th>
					        <th>Edit</th>
                            <th>Action</th>
					      </tr>
					    </thead>
					    <tbody>
                            @foreach($slots as $key => $slot)
					      <tr>
					        <th> {{ \Carbon\Carbon::parse($slot->start_time)->format('h:i A')}} - {{ \Carbon\Carbon::parse($slot->end_time)->format('h:i A')}}  </th>
					        <td>{{ $slot->description }}</td>
					        <td>@if($slot->status == 'A')
                                <b style="color:green;">Active</b>
                            @else
                            <b style="color:red;">Inactive</b>
                            @endif</td>

					        <td>
                                <a class="btn btn-primary" href="#"  id="editbtn" data-toggle="modal" data-target="#exampleModal2" data-id="{{ $slot->id }}" data-start="{{ $slot->start_time }}" data-end="{{ $slot->end_time }}" data-desc="{{ $slot->description }}">Edit</a></td>
                                <td>
                                    @if($slot->status == 'A')
                                    <form action="ActivateAndDeactivate/{{$slot->id}}/D" method="POST">
                                        @csrf
                                        <button type="Submit" class="btn btn-danger">Deactivate</button>
                                    
                                    </form>
                                    
                                    @else
                                    <form action="ActivateAndDeactivate/{{$slot->id}}/A" method="POST">
                                        @csrf
                                        <button type="Submit" class="btn btn-success">Activate</button>
                                    </form>
                                    @endif
                                            </td> 
                            </tr>
					      
					      
                        
                          @endforeach
					    </tbody>
					  </table>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{ asset('table-03/js/jquery.min.js') }}"></script>
  <script src="{{ asset('table-03/js/popper.js') }}"></script>
  <script src="{{ asset('table-03/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('table-03/js/main.js') }}"></script>

	</body>
</html>



@include('slot.Modal.AddSlot')
@include('slot.Modal.EditSlot')
@endsection

