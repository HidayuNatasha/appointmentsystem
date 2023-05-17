@section('content')
<!doctype html>
<html lang="en">
  <head>
  	<title>Customer List</title>
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
					<h2 class="heading-section">Customer List</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table">
					    <thead class="thead-primary">
					      <tr>
					        <th>Name</th>
					        <th>Phone Number</th>
					        <th>Address</th>
                            <th>Email</th>
					      </tr>
					    </thead>
					    <tbody>
                            @foreach ($customer as $c)
					      <tr>
					        <th scope="row" class="scope" >{{ $c->custName }}</th>
					        <td>{{ $c->custPhone }}</td>
                            <td>{{ $c->custAddress }}</td>
                            <td>{{ $c->custEmail }}</td>
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

