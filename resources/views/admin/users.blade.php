@extends('layouts.admin')

@section('content')
<div class="container-fluid view-users">
    <div class="card shadow">
        <h5 class="card-header bg-dark text-white"><i class="mdi mdi-account-details"></i> {{ $where }}</h5>
        <div class="card-body">
            <div class="table-responsive mt-2">
                <table class="table" id="user-table">
                    <thead>
                        <tr>
                            {{-- <th class="" scope="col">SID</th> --}}
                            @if($reported_active ?? '')
                                <th scope="col">Reported Post</th>
                            @endif
                            <th scope="col">Username</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th scope="col">Date Created</th>
                            <th scope="col">Last Login</th>
                            <th class="nosort" scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cdata as $user)
                        <tr>
                            {{-- <td>
                                {{ $user->SID }}
                            </td> --}}
                            @if($reported_active ?? '')
                                <td>
                                    <a class="btn btn-link" href="{{ route('view-post', $user->PostingId) }}"> {{ $user->Posting }}</a>
                                </td>
                            @endif
                            <td>
                                <a type="button" class="btn btn-sm btn-link" href="{{ route('view-user', $user->UserId) }}">
                                    {{ $user->Username }}
                                </a>
                            </td>
                            <td>
                                {{ $user->FirstName }}
                            </td>
                            <td>
                                {{ $user->LastName }}
                            </td>
                            <td>
                                {{-- @if ($user->EmailAddress)
                                    {{ $user->EmailAddress }}
                                @elseif ($user->subsMail)
                                    {{ $user->subsMail }}
                                @endif --}}

                                {{ $user->EmailAddress }}

                            </td>
                            <td>
                                {{ $user->Role }}
                            </td>
                            <td>
                                {{ $user->DateCreated }}
                            </td>
                            <td>
                                {{ $user->LastLogin }}
                            </td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Post Controls">
                                    <a type="button" class="btn btn-sm btn-primary" href="{{ route('view-user', $user->UserId) }}">View</a>
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
