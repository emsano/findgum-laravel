@extends('layouts.admin')

@section('content')
<div class="container-fluid ">
    <div class="card shadow">
        <h5 class="card-header bg-dark text-white"><i class="mdi mdi-storefront-outline"></i> {{ $where ?? '' }}</h5>
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
                                @if ($categ->Description ?? '')
                                    <a class="btn btn-link text-left" href="{{ route('view-sub-categ', $categ->SubCategoryId) }}" role="button">
                                    {{ $categ->Description }}
                                    </a>
                                @else
                                    <a class="btn btn-link text-left" href="{{ route('view-categ', $categ->CategoryId) }}" role="button">
                                    {{  $categ->Category }}
                                    </a>
                                @endif
                            </td>
                            <td>{{ $categ->CategoryCode }}</td>
                            @if ( $admin_posting_options_subcateg_active ?? '')
                            <td scope="col">{{ $categ->Category }}</td>
                            @endif
                            <td>
                                <a class="btn btn-link text-left" href="test2" role="button">
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
                                    @if ($categ->Description ?? '')
                                        <a class="btn btn-sm btn-info text-white" href="{{ route('view-sub-categ', $categ->SubCategoryId) }}" role="button">
                                        Edit
                                        </a>
                                    @else
                                        <a class="btn btn-sm btn-info text-white" href="{{ route('view-categ', $categ->CategoryId) }}" role="button">
                                        Edit
                                    </a>
                                    @endif
                                    @if ($categ->IsCategoryActive == 1)
                                    <button type="button" class="btn btn-sm btn-danger">Hide</button>
                                    @else
                                    <button type="button" class="btn btn-sm btn-primary">Show</button>
                                    @endif
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
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
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
