@extends('layouts.admin')

@section('content')
<div class="container-fluid ">
    <div class="card shadow">
        <h5 class="card-header bg-dark text-white"><i class="mdi mdi-storefront-outline"></i> Admin</h5>
        <div class="card-body">
            <div class="col-md-6">
                <form action="#" method="post" id="system-banner-form">
                    <h3>System Banner <i class="mdi mdi-image-area"></i></h3>
                    <div class="file-upload">
                        <div class="row mb-3">
                            <div class="col-12 banner rounded">
                                <img src="{{ asset('images/Banner1.jpg') }}" class="img-fluid rounded"
                                    alt="Profile Banner">
                                </div>
                        </div>
                        <div class="form-group">
                            <p class="font-weight-bolder">Banner 1</p>
                            <input type="file" class="form-control-file file-upload-input w-auto"
                                name="file-upload" id="banner-upload-1" placeholder=""
                                aria-describedby="fileHelpId2" accept="image/*">
                            <small id="fileHelpId2" class="form-text text-muted">*Only image files are
                                accepted.</small>
                        </div>
                        <div class="form-group">
                            <label for="banner-1-link">Banner 1 Redirect Link</label>
                            <input type="text" class="form-control" id="banner-1-link" placeholder="">
                          </div>
                        <div class="row mb-3">
                            <div class="col-12 banner rounded">
                                <img src="{{ asset('images/Banner2.jpg') }}" class="img-fluid rounded"
                                    alt="Profile Banner">
                                </div>
                        </div>
                        <div class="form-group border-top">
                            <p class="font-weight-bolder">Banner 2</p>
                            <input type="file" class="form-control-file file-upload-input w-auto"
                                name="file-upload" id="banner-upload-2" placeholder=""
                                aria-describedby="fileHelpId2" accept="image/*">
                            <small id="fileHelpId2" class="form-text text-muted">*Only image files are
                                accepted.</small>
                        </div>
                        <div class="form-group">
                            <label for="banner-1-link">Banner 2 Redirect Link</label>
                            <input type="text" class="form-control" id="banner-2-link" placeholder="">
                          </div>
                        <div class="row mb-3">
                            <div class="col-12 banner rounded">
                                <img src="{{ asset('images/Banner3.jpg') }}" class="img-fluid rounded"
                                    alt="Profile Banner">
                                </div>
                        </div>
                        <div class="form-group border-top">
                            <p class="font-weight-bolder">Banner 3</p>
                            <input type="file" class="form-control-file file-upload-input w-auto"
                                name="file-upload" id="banner-upload-3" placeholder=""
                                aria-describedby="fileHelpId2" accept="image/*">
                            <small id="fileHelpId2" class="form-text text-muted">*Only image files are
                                accepted.</small>
                        </div>
                        <div class="form-group">
                            <label for="banner-1-link">Banner 3 Redirect Link</label>
                            <input type="text" class="form-control" id="banner-3-link" placeholder="">
                          </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
