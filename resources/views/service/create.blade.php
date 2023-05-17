@extends('layouts.adm')
   
@section('content')
<!doctype html>
<html lang="en">
  <head>
  	<title>Add New Service</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{ asset('form-06/css/style.css') }}">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
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
			<div class="row justify-content-center">
				<div class="col-md-12">
			    <div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4">Add New Service</h3>
									<div id="form-message-warning" class="mb-4"></div> 
				      	
                                    <form action="{{ route('service.store') }}" method="POST">
										@csrf
                                        
                                        <div class="row">										
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="subject">Service Name</label>
                                                    <input type="text" name="serviceName" class="form-control" placeholder="">
												</div>
											</div>

                                            <div class="col-md-12">
												<div class="form-group">
													<label class="label" for="subject">Price</label>
                                                    <input type="text" class="form-control" name="price" placeholder="">
												</div>
											</div>

                                            <div class="col-md-12">
												<div class="form-group">
													<label class="label" for="subject">Description</label>
                                                    <input type="textArea" class="form-control" name="description" placeholder="">
												</div>
											</div>


											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Add" class="btn btn-primary">
													<a class="btn btn-primary" href="{{ route('service.index') }}"> Back</a>
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							
						</div>
						<div class="row">	
							
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{ asset('form-06/js/jquery.min.js') }}"></script>
  <script src="{{ asset('form-06/js/popper.js') }}"></script>
  <script src="{{ asset('form-06/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('form-06/js/jquery.validate.min.js') }}"></script>

  <script src="{{ asset('form-06/js/main.js') }}"></script>

	</body>
</html>


@endsection