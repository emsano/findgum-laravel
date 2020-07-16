<div id="post-repost-modal" class="modal modal-danger fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
             <form action="#" method="POST" class="repost-post-modal">
               {{ csrf_field() }}

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <h4 class="text-center"><i class="mdi mdi-alert-octagon"></i> Repost This Post?</h4>
                    <input type="hidden" name="post-appr-id" id="rep-id">
                    <p>
                        Reposting this item post will make it visible to all buyers/sellers.
                    </p>
                    Item:
                    <p class="font-weight-bolder" id="rep-det">

                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary waves-effect remove-data-from-delete-form">Confirm</button>
                </div>
            </form>
        </div>
    </div>
</div>
