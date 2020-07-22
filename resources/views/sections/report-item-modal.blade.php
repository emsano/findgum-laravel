<div class="modal fade p-0 mt-5" id="report-item-modal" tabindex="-1" role="dialog" aria-labelledby="report-modal-label"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="report-modal-label">Report <span
                        class="report-post-title font-weight-bolder">{{ $data[0]->Posting }}</span></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="#" method="#">
                <div class="modal-body">
                    <div class="list-group list-group-flush">
                        <div class="list-group-item py-1 px-0 d-inline-flex">
                            <p class="mb-0 w-25">Post ID: &nbsp</p>
                            <h4 class="mb-0">
                                <strong class="post-id">{{ $data[0]->PostingKey }}</strong>
                            </h4>
                        </div>
                        <div class="list-group-item py-1 px-0 d-inline-flex">
                            <p class="mb-0 w-25">Seller: &nbsp</p>
                            <h4 class="mb-0">
                                <span class="report-seller-name font-weight-bolder">{{ $data[0]->FirstName }} {{ $data[0]->LastName }}</span>
                            </h4>
                        </div>
                        <div class="list-group-item py-1 px-0 d-inline-flex">
                            <p class="mb-0 w-25">Price: &nbsp</p>
                            <h4 class="mb-0">
                                &#8369; <span class="report-post-price font-weight-bolder text-danger">{{ number_format($data[0]->UnitPrice, 0) }}</span>
                            </h4>
                        </div>
                        <div class="list-group-item py-1 px-0 d-inline-flex">
                            <p class="mb-0 w-25">Category: &nbsp</p>
                            {{-- <span class="report-post-price font-weight-bolder text-danger">5000</span> --}}
                            <nav aria-label="breadcrumb font-weight-bolder report-item-category">
                                <ol class="breadcrumb bg-white p-0 m-0">
                                    <li class="breadcrumb-item">
                                        <h4>Fashion Statement</h4>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <h4>Mens</h4>
                                    </li>
                                    <li class="breadcrumb-item" aria-current="page">
                                        <h4>Shoes</h4>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="form-group px2">
                        <div class="form-label">Reason</div>
                        <div class="custom-controls-stacked">
                            <label class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="report-reason" value="1">
                                <span class="custom-control-label">Possible Fraud</span>
                            </label><label class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="report-reason" value="2">
                                <span class="custom-control-label">Wrong Category</span>
                            </label><label class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="report-reason" value="3">
                                <span class="custom-control-label">Spam/Duplicate</span>
                            </label><label class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="report-reason" value="4">
                                <span class="custom-control-label">Inapproriate Content</span>
                            </label>
                        </div>
                    </div>
                    <div class="form-group px-2">
                        <label for="">Message:</label>
                        <textarea class="form-control" name="report-desc" id="report-desc" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Report</button>
                    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#report-success">
                        Success Modal
                      </button> --}}
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade report-success" id="report-success" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body text-center py-0">
                <span class="mx-auto text-center report-check"><i class="mdi mdi-shield-check-outline text-success"></i></span>
                <h4 class="mx-auto text-center">Your report has been recorded</h4>
            </div>
            <div class="modal-footer border-0 align-items-center">
                {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                <button type="button" class="btn btn-primary mx-auto" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
