<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Slot</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{ route('slot.update') }}" method="POST">
    @csrf
    <input type="hidden" class="form-control" id="start_edit_ori" name="start_edit_ori" required>
    <input type="hidden" class="form-control" id="end_edit_ori" name="end_edit_ori" required>

    <input type="hidden" id="id" name="id">
        <div class="row">
      <div class="col-md-4">
      <div class="form-group">
            <label for="start" class="col-form-label">Start Time:</label>
            <input type="text" class="form-control" id="start_edit" name="start_edit" required>
          </div>
      </div>
      <div class="col-md-4">
      <div class="form-group">
            <label for="end" class="col-form-label">End Time:</label>
            <input type="text" class="form-control" id="end_edit" name="end_edit" required>
          </div>
      </div>
      <div class="col-md-4">
      <div class="form-group">
      <label for="end" class="col-form-label">Reset to Origin:</label>
      <button type="button" class="btn btn-warning"  id="resetorival">Reset</button>
          </div>
      </div>
    </div>

         
          <div class="form-group">
            <label for="desc" class="col-form-label">Description</label>
            <input type="text" class="form-control" id="desc_edit"  name="desc_edit" maxlength="200" required>
          </div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary"  id="presubedit">Save</button>
        <button type="submit" style="display:none;" id="finalsubedit">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>



