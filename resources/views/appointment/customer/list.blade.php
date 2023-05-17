
            <!-- DATA TABLE-->
            @section('content')
                                 {{-- start table --}}
                                <!-- USER DATA-->
                                <div class="user-data m-b-30">
                                    <h3 class="title-3 m-b-30">
                                        <i class="zmdi zmdi-account-calendar"></i>Service Information</h3>
                                    <div class="filters m-b-45">
                                        <div class="rs-select2--dark rs-select2--md m-r-10 rs-select2--border">
                                            <a class="btn btn-outline-success" href="{{ route('service.create') }}">Add Service</a>
                                        </div>
                                    </div>
                                    <div class="table-responsive table-data">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <td>Service Name</td>
                                                    <td>Price</td>
                                                    <td>Description</td>
                                                    <th width="280px">Action</th>
                                                    <td></td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($service as $s)
                                                <tr>
                                                    <td>{{ $s->serviceName }}</td>
                                                    <td>{{ $s->price }}</td>
                                                    <td>{{ $s->description }}</td>

                                                    <td> {{-- action--}}
                                                        <form action="{{ route('service.destroy',$s->id) }}" method="POST">

                                                            {{-- <a class="btn btn-info" href="{{ route('service.show',$s->id) }}">Show</a> --}}
                                            
                                                            <a class="btn btn-primary" href="{{ route('service.edit',$s->id) }}">Update</a>

                                                            @csrf
                                                            @method('DELETE')
                                              
                                                            <button type="submit" class="btn btn-danger">Delete</button>

                                                            
                                           
                                                        </form>
                                                    </td> 
                                                </tr>
                                                @endforeach
    
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
            @endsection
            <!-- END DATA TABLE-->