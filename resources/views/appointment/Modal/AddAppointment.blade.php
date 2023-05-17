<div class="modal fade" id="eventModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">New Appointment</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
      <form action="{{ route('appointment.store') }}" method="POST">
    @csrf
            <input type="hidden" class="form-control" name="slot" id="slot"/>
            <input type="hidden" class="form-control" name="totalslots" id="totalslots" value="{{ $totalslot }}"/>
            
        <div class="form-group">
            <label for="recipient-name" class="col-form-label">Date:</label>
            <input type="date" class="form-control" id="appdate" name="appdate" readonly>
          </div>

          <div class="form-group">
          <label for="recipient-name" class="col-form-label">Car:</label>

          <select class="form-control" name="car_id" id="car_id">
                <option value="" selected disabled>-- Choose Car --</option>
                @foreach ($car as $id => $model)
                    <option
                        value="{{$id}}" {{ (isset($appointment['car_id']) && $appointment['car_id'] == $id) ? ' selected' : '' }}>{{$model}}</option>
                @endforeach
            </select>
            </div>
            <div class="form-group">
            <label for="recipient-name" class="col-form-label">Service:</label>
    
            <select class="form-control" name="service_id" id="service_id">
                <option value="" selected disabled>-- Choose Service --</option>
                @foreach ($service as $id => $serviceName)
                    <option
                        value="{{$id}}" {{ (isset($appointment['service_id']) && $appointment['service_id'] == $id) ? ' selected' : '' }}>{{$serviceName}}</option>
                @endforeach
            </select>
            </div>

          <div class="form-group">
          <label for="recipient-name" class="col-form-label">Time Slot:</label>

       
 
          <div class="btn-group-toggle" data-toggle="buttons">
          @foreach($slots as $key => $slot)
          <button class="btn btn-secondary {{ $slot->id }} slots" value="{{ $slot->id }}" id="{{ $slot->id }}"> {{ \Carbon\Carbon::parse($slot->start_time)->format('h:i A')}} - {{ \Carbon\Carbon::parse($slot->end_time)->format('h:i A')}}</button>
 
  @if($key <= 1)
          @else
<br>
@endif
@endforeach
</div>



        </div>

        <div class="form-group">
        <label for="recipient-name" class="col-form-label">Mileage:</label>
       
                <input type="text" name="mileage" id="mileage" class="form-control">
            </div>

        <div class="form-group">
        <label for="recipient-name" class="col-form-label">Car colour:</label>
             
                <input type="text" name="carColour" id="carColour" class="form-control">
              </div>

        <div class="form-group">
        <label for="recipient-name" class="col-form-label">Number Plate:</label>
                   
                <input type="text" name="numberPlate" id="numberPlate" class="form-control">
              </div>
 
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="makeApp">Make Appointment</button>
        <button type="submit" class="btn btn-primary" id="makeAppFinal" hidden></button>
      </div>
      </form>
    </div>
  </div>
</div>