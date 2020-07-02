<div class="modal fade" id="repost-item-post" tabindex="-1" role="dialog" aria-labelledby="repost-modal-label"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="#" method="post">
            {{ csrf_field() }}
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="repost-modal-label">Repost Item | ID: <strong class="post-id"> 3G8733D112</strong></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                    <p class="mx-auto p-2">Reposting this item will asign a new item ID to your post.</p>
                        <div class="col-md-6">
                            <p class="post-title"><h2>Vans Sk8-Hi MTE Shoes</h2></p>
                            <h3 class="post-price text-danger">&#8369; 5000 </h3>
                            <p class="post-card-location mb-0"><i class="mdi mdi-google-maps"></i><span> Baguio City</span></p>
                        </div>
                        <div class="col-md-6">
                            <img class="card-img post-card-img"
                                src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/vans.png" alt="Vans">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Repost</button>
                </div>
            </div>
        </form>
    </div>
</div>
