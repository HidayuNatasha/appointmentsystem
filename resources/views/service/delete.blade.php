@foreach ($service as $s)
<form action="{{ route('service.destroy', $s->id) }}" method="post" enctype="multipart/form-data">
    {{ method_field('delete') }}
    {{ csrf_field() }}
    <div class="modal fade" id="ModalDelete{{ $s->id}}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
           <div class="modal-header">
             <h4 class="modal-title">{{('Service Delete') }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times; </span>
                </button>
    </div>
    <div class="modal-body">You sure you want to delete <b>{{$s->serviceName}}</b>?</div>
    <div class="modal-footer">
    <button type="button" class="btn gray btn-outline-secondary" data-dismiss="modal">{{ _("Cancel")}}
    <button type="submit" class="btn btn-outline-danger">{{_('Delete') }}</button>
    </div>
</div>
</div>
</div>
</form>
@endforeach