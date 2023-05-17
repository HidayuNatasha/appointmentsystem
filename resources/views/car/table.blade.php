@section('content')
<!doctype html>
<html lang="en">
  <head>
  	<title>Car List</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{ asset('table-03/css/style.css') }}">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Car List</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
                    <div class="rs-select2--dark rs-select2--md m-r-10 rs-select2--border">
                        <a class="btn btn-success" href="{{ route('car.create') }}">Add Car</a>
                    </div>
					<div class="table-wrap">
						<table class="table">
					    <thead class="thead-primary">
					      <tr>
					        <th>Brand</th>
					        <th>Model</th>
					        <th>Update</th>
                            <th>Delete</th>
					      </tr>
					    </thead>
					    <tbody>
                            @foreach ($car as $c)
					      <tr>
					        <th scope="row" class="scope" >{{ $c->brand }}</th>
					        <td>{{ $c->model }}</td>

					        <td>
                                <a href="{{ route('car.edit',$c->id) }}" class="btn btn-primary">Update</a></td>  
                                <td>
                                    <form action="{{ route('car.destroy',$c->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                       

                                        <a class="btn btn-danger" href="#" data-toggle="modal" data-target="#ModalDelete{{ $c->id }}">{{ _('Delete')}}</a>
                                                            @include('car.delete')
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
@endsection

