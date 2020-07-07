@extends('layouts.admin')

@section('content')
<div class="container-fluid ">
    <div class="card shadow">
        <h5 class="card-header bg-white"><i class="mdi mdi-timer-sand"></i> Pending Postings</h5>
        <div class="card-body">
            {{-- <h5 class="card-title">Special title treatment</h5> --}}
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Search</span>
                                </div>
                                <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                                    aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col-6">
                            <form action="#" method="post">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                        value="option1" checked>
                                    <label class="form-check-label" for="inlineRadio1">Auto Approve New Posts</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                        value="option2">
                                    <label class="form-check-label" for="inlineRadio2">Require Approval for new
                                        Posts</label>
                                </div>
                                {{-- <button type="submit" class="btn btn-primary">Save</button> --}}
                            </form>
                        </div>
                    </div>
                    <div class="table-responsive mt-2">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th class="table-post-title" scope="col">Title</th>
                                    <th scope="col">Seller</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Location</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>
                                        <a name="" id="" class="btn btn-link text-left" href="#" role="button">
                                            Erat velit scelerisque in dictum non consectetur a erat nam
                                        </a>
                                    </td>
                                    <td><a name="" id="" class="btn btn-link" href="#" role="button">Otto</a></td>
                                    <td>Test Categ 1</td>
                                    <td>test</td>
                                    <td>test</td>
                                    <td>test</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-sm btn-primary">Approve</button>
                                            <button type="button" class="btn btn-sm btn-danger">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>
                                        <a name="" id="" class="btn btn-link text-left" href="#" role="button">
                                            Nulla facilisi etiam dignissim diam quis enim lobortis scelerisque fermentum
                                        </a>
                                    </td>
                                    <td>
                                        <a name="" id="" class="btn btn-link" href="#" role="button">Thronton</a>
                                    </td>
                                    <td>Test Categ 2</td>
                                    <td>test</td>
                                    <td>test</td>
                                    <td>test</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-sm btn-primary">Approve</button>
                                            <button type="button" class="btn btn-sm btn-danger">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>
                                        <a name="" id="" class="btn btn-link text-left" href="#" role="button">
                                            Eu feugiat pretium nibh ipsum
                                        </a>
                                    </td>
                                    <td>
                                        <a name="" id="" class="btn btn-link" href="#" role="button">the Bird</a>
                                    </td>
                                    <td>Test Categ 3</td>
                                    <td>test</td>
                                    <td>test</td>
                                    <td>test</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-sm btn-primary">Approve</button>
                                            <button type="button" class="btn btn-sm btn-danger">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
