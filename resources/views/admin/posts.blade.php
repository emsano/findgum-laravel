@extends('layouts.admin')

@section('content')
<div class="container-fluid admin-posts">
    <div class="card shadow">
        <h5 class="card-header bg-dark text-white"><i class="mdi mdi-storefront-outline"></i> {{ $where }}</h5>
        <div class="card-body">
            <div class="row">
                <div class="col">
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
                {{-- {{ dd($cdata) }} --}}
                <table class="table table-striped dt-responsive" id="post-table">
                    <thead>
                        <tr>
                            {{-- <th scope="col">#</th> --}}
                            <th class="table-post-title" scope="col">Title</th>
                            <th scope="col">Seller</th>
                            <th scope="col">Category</th>
                            <th scope="col">Location</th>
                            <th scope="col">Status</th>
                            @if ($reported_posts_active ?? '')
                                <th class="bg-warning" scope="col">Report</th>
                                <th class="bg-warning" scope="col">Message</th>
                                <th class="bg-warning" scope="col">Reported By</th>
                            @endif
                            <th scope="col">Date</th>
                            <th class="nosort" scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cdata as $post)
                        <tr>
                            {{-- <th scope="row">1</th> --}}
                            <td>
                                <a name="" id="" class="btn btn-link text-left post-what" href="{{ route('view-post', $post->PostingId) }}" role="button">
                                    @if (!empty($post->Posting))
                                       {!! $post->Posting !!}
                                    @elseif (!empty($post->ShortDescription) && empty($post->Posting))
                                        {!! $post->ShortDescription !!}
                                    @else
                                        {{ 'No Title and Short Description Set by User' }}
                                    @endif
                                </a>
                            </td>
                            <td><a name="" id="" class="btn btn-link text-left" href="#" role="button">{{ $post->FirstName }}</a></td>
                            <td>{{ $post->Description }}</td>
                            <td>{{ $post->City }}</td>
                            <td>{{ $post->PostingStatus }}</td>
                            @if ($reported_posts_active ?? '')
                                <td class="bg-warning">{{ $post->Reason }}</td>
                                <td class="bg-warning">{{ $post->Message }}</td>
                                <td class="bg-warning">{{ $post->Reporter }}</td>
                            @endif
                            <td>{{ $post->DateCreated }}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Post Controls">
                                    @if ( $pending_posts_active ?? '')
                                        <button type="button" class="btn btn-sm btn-primary approve-post" data-approve="{{ $post->PostingId }}">Approve</button>
                                    @endif
                                    @if ( $expired_posts_active ?? '')
                                        <button type="button" class="btn btn-sm btn-success" data-repost="{{ $post->PostingId }}">Repost</button>
                                    @endif
                                    @if ( $drafts_posts_active ?? '')
                                        <button type="button" class="btn btn-sm btn-info" data-edit="{{ $post->PostingId }}">Edit</button>
                                    @endif
                                    @if ( $reported_posts_active ?? '')
                                        <button type="button" class="btn btn-sm btn-info" data-edit-report="{{ $post->PostingId }}">Edit</button>
                                    @endif
                                    @if ( $deleted_posts_active ?? '')
                                        <button type="button" class="btn btn-sm btn-info" data-repost="{{ $post->PostingId }}">Repost</button>
                                    @endif
                                    <button type="button" class="btn btn-sm btn-danger delete-post" data-delete="{{ $post->PostingId }}">Delete</button>
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

@include('admin.sections.post-delete-modal')
@include('admin.sections.post-approve-modal')

@endsection
