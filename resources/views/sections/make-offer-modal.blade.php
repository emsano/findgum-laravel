<div class="modal fade p-0 mt-5" id="make-offer-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-auto my-">
                    <img class="rounded-circle" src="{{ asset('images/test.jpg') }}" width="40" height="40">
                </div>
                <h5 class="modal-title" id="exampleModalLabel">
                    <span class="seller-name font-weight-bolder">{{ $data[0]->FirstName }}</span> is selling
                    <p class="m-0 font-weight-bolder">
                        {{ $data[0]->Posting }}s
                    </p>
                    for <span class="post-price text-danger">&#8369; {{ number_format($data[0]->UnitPrice, 0) }}</span>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="buyer-offer col-md-8 mx-auto">
                    <h3 class="text-center">You are offering </h3>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">&#8369;</span>
                        </div>
                        <input type="text" class="form-control" id="buyer-offer-amount" name="buyer-offer-amount" aria-label="Amount (to the nearest Philippine Peso)">
                        <div class="input-group-append">
                            <span class="input-group-text">.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <a type="button" class="btn btn-danger" href="{{ route('messages') }}">Send Offer</a>
            </div>
        </div>
    </div>
</div>
