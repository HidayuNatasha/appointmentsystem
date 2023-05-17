 <!-- USER DATA-->
 @section('content')
 <input type="text" name="getdate" id="getdate"/>
        <input type="text" name="gettime" id="gettime"/>
 <div class="user-data m-b-30">
    <h3 class="title-3 m-b-30">
        <i class="zmdi zmdi-account-calendar"></i>List of Appointment</h3>
    <div class="filters m-b-45">
        <div class="rs-select2--dark rs-select2--md m-r-10 rs-select2--border">
            <a class="btn btn-outline-success" href="{{ route('appointment.create') }}">Add Appointment</a>
            <div class="dropDownSelect2"></div>
        </div>
    </div>
    <div class="table-responsive table-data">
        <table class="table">
            <thead>
                <tr>
                    <td>Car</td>
                    <td>Service</td>
                    <td>Time</td>
                    <td>Date</td>
                    <td>Mileage</td>
                    <td>action</td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                @foreach ($appointment as $a)
                <tr>
                    <td></td>
                    <td></td>
                    <td>{{ $a->time }}</td>
                    <td>{{ $a->date }}</td>
                    <td>{{ $a->mileage }}</td>
                    
                    <td> {{-- action--}}
                        <form action="{{ route('appointment.destroy',$a->id) }}" method="POST">

                            <a class="btn btn-info" href="{{ route('appointment.show',$a->id) }}">Show</a>
            
                            <a class="btn btn-primary" href="{{ route('appointment.edit',$a->id) }}">Edit</a>

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