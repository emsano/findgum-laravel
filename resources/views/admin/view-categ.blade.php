@extends('layouts.admin')

@section('content')
<div class="container-fluid view-category">
    <div class="card shadow">
        <h5 class="card-header bg-dark text-white"><i class="mdi mdi-tag-outline"></i> {{ $where ?? '' }}</h5>
        <form action="#" method="post">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="font-weight-bolder" for="categ-name">Name</label>
                            <input type="text" name="categ-name" id="categ-name" class="form-control" value="{{ $cdata[0]->CName }}">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bolder" for="categ-c">Code</label>
                            <input type="text" name="categ-c" id="categ-c" class="form-control" value="{{ $cdata[0]->CategoryCode }}">
                        </div>
                        @if ($cdata[0]->SubCategoryId ?? '')
                        <div class="form-group">
                            <label class="font-weight-bolder" for="categ-code">Main Category</label>
                            <select class="form-control" name="categ-code" id="categ-code">
                                @foreach ($categs as $categ)
                                    <option value="{{ $categ->CategoryCode }}" @if($cdata[0]->CategoryCode == $categ->CategoryCode ?? '') selected @endif>
                                        {{ $categ->Category }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        @endif
                        <div class="form-group">
                            <label class="font-weight-bolder" for="categ-status">Status</label>
                            <select class="form-control" name="categ-status" id="categ-status">
                              <option value="1" @if($cdata[0]->IsCategoryActive == 1 ?? '') selected @endif>Show</option>
                              <option value="0" @if($cdata[0]->IsCategoryActive == 0 ?? '') selected @endif>Hide</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="font-weight-bolder" for="categ-cretedby">Created By</label>
                            <input type="text" name="categ-cretedby" id="categ-createdby" class="form-control" value="{{ $cdata[0]->FirstName }}" disabled readonly>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bolder" for="categ-created">Date Created</label>
                            <input type="Text" name="categ-created" id="categ-created" class="form-control" value="{{ date('d-M-y', strtotime($cdata[0]->DateCreated)) }}" disabled readonly>
                        </div>
                    </div>
                </div>
            </div>

            {{-- {{ var_dump($cdata) }} --}}
        </form>
        <div class="card-footer">
            <button type="submit" class="btn btn-danger">Delete</button>
            <button type="submit" class="btn btn-primary">Save Changes</button>
        </div>
    </div>
</div>
@endsection
