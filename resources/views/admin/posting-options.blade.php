@extends('layouts.admin')

@section('content')
<div class="container-fluid ">
    <div class="card shadow">
        <h5 class="card-header bg-white"><i class="mdi mdi-storefront-outline"></i> {{ $where ?? '' }}</h5>
        <div class="card-body">
            <div class="table-responsive mt-2">
                <table class="table" id="category-table">
                    <thead>
                        <tr>
                            {{-- <th scope="col">#</th> --}}
                            <th class="table-post-title" scope="col">Category</th>
                            <th scope="col">Code</th>
                            @if ( $admin_posting_options_subcateg_active ?? '')
                                <th scope="col">Parent Category</th>
                            @endif
                            <th scope="col">Created By</th>
                            <th scope="col">Status</th>
                            <th class="nosort" scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($cdata as $categ)
                        <tr>
                            {{-- <th scope="row">{{ $categ->SubCategoryId }}</th> --}}
                            <td>
                                <a name="" id="" class="btn btn-link text-left" href="#" role="button">
                                    @if ($categ->Description ?? '')
                                        {{ $categ->Description }}
                                    @else
                                        {{  $categ->Category }}
                                    @endif
                                </a>
                            </td>
                            <td>{{ $categ->CategoryCode }}</td>
                            @if ( $admin_posting_options_subcateg_active ?? '')
                            <td scope="col">{{ $categ->Description }}</td>
                            @endif
                            <td>
                                <a name="" id="" class="btn btn-link text-left" href="#" role="button">
                                    {{ $categ->FirstName }}
                                </a>
                            </td>
                            <td>
                                @if ($categ->IsCategoryActive == 1)
                                    {{ 'Show' }}
                                @else
                                    {{ 'Hidden' }}
                                @endif
                            </td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-sm btn-info">Edit</button>
                                    <button type="button" class="btn btn-sm btn-primary">Show</button>
                                    <button type="button" class="btn btn-sm btn-danger">Hide</button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
