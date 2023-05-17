<div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">View Appointment</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
      <form>
      <input type="text" name="getselectedate" id="getselectedate" hidden/>
        <input type="time" name="getselectedtime" id="getselectedtime" hidden/>
        <input type="text" name="userid" id="userid" value="{{ auth()->user()->id }}" hidden/>
      <div class="form-group">
            <label for="recipient-name" class="col-form-label">Appointment By:</label>
            <input type="text" class="form-control" id="appby" name="appby" readonly>
          </div>
        <div class="form-group">
            <label for="recipient-name" class="col-form-label">Date:</label>
            <input type="date" class="form-control" id="appdateview" name="appdateview" readonly>
          </div>

          <div class="form-group">
          <label for="recipient-name" class="col-form-label">Car:</label>

          <select class="form-control" name="car_id_view" id="car_id_view" disabled>
                <option value="" selected disabled>-- Choose Car --</option>
                @foreach ($car as $id => $model)
                    <option
                        value="{{$id}}" {{ (isset($appointment['car_id']) && $appointment['car_id'] == $id) ? ' selected' : '' }}>{{$model}}</option>
                @endforeach
            </select>
            </div>
            <div class="form-group">
            <label for="recipient-name" class="col-form-label">Service:</label>
    
            <select class="form-control" name="service_id_view" id="service_id_view" disabled>
                <option value="" selected disabled>-- Choose Service --</option>
                @foreach ($service as $id => $serviceName)
                    <option
                        value="{{$id}}" {{ (isset($appointment['service_id']) && $appointment['service_id'] == $id) ? ' selected' : '' }}>{{$serviceName}}</option>
                @endforeach
            </select>
            </div>

          <div class="form-group">
          <label for="recipient-name" class="col-form-label">Time Slot:</label>
          <input type="text" name="timeslotview" id="timeslotview" class="form-control" disabled>

        </div>



        <div class="form-group">
        <label for="recipient-name" class="col-form-label">Mileage:</label>
       
                <input type="text" name="mileageview" id="mileageview" class="form-control" disabled>
            </div>

            <div class="form-group">
              <label for="recipient-name" class="col-form-label">carColour:</label>
             
                      <input type="text" name="carColourview" id="carColourview" class="form-control" disabled>
                  </div>

                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">numberPlate:</label>
                   
                            <input type="text" name="numberPlateview" id="numberPlateview" class="form-control" disabled>
                        </div>

            
 
      
      </div>
      <div class="modal-footer">
      <button type="button" id="deleteapp" class="btn btn-danger">Delete</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
     
      </div>
      </form>
    </div>
  </div>
</div>