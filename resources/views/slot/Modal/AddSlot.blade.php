<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Slot</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{ route('slot.store') }}" method="POST">
    @csrf
        <div class="row">
      <div class="col-md-4">
      <div class="form-group">
            <label for="start" class="col-form-label">Start Time:</label>
            <input type="text" class="form-control" id="start" name="start" required>
          </div>
      </div>
      <div class="col-md-4">
      <div class="form-group">
            <label for="end" class="col-form-label">End Time:</label>
            <input type="text" class="form-control" id="end" name="end" required>
          </div>
      </div>
    </div>

         
          <div class="form-group">
            <label for="desc" class="col-form-label">Description</label>
            <input type="text" class="form-control" id="desc"  name="desc" maxlength="200" required>
          </div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary"  id="presub">Submit</button>
        <button type="submit" style="display:none;" id="finalsub">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>



