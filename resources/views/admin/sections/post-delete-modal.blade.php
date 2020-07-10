<div id="post-delete-modal" class="modal modal-danger fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
             <form action="#" method="POST" class="remove-post-model">
               {{ method_field('delete') }}
               {{ csrf_field() }}

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    {{-- <h4 class="modal-title text-center" id="custom-width-modalLabel">Delete Post Record</h4> --}}
                </div>
                <div class="modal-body">
                    <h4 class="text-center"><i class="mdi mdi-alert-octagon"></i> Delete This Post?</h4>
                    <input type="hidden" name="post-del-id" id="app-id">
                    Item:
                    <p class="font-weight-bolder" id="del-det">

                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger waves-effect remove-data-from-delete-form">Confirm</button>
                </div>
            </form>
        </div>
    </div>
</div>
