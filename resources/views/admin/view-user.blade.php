@extends('layouts.admin')

@section('content')
<div class="container-fluid view-user-single">
    <ul class="nav nav-tabs" id="view-user-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                aria-controls="home" aria-selected="true">Profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="posts-tab" data-toggle="tab" href="#posts" role="tab" aria-controls="profile"
                aria-selected="false">Posts</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#messages" role="tab" aria-controls="messages"
                aria-selected="false">Messages</a>
        </li>
    </ul>

    <div class="tab-content" id="view-user-tab-content">
        <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="card shadow">
                <h5 class="card-header bg-dark text-white"><i class="mdi mdi-account"></i> View User</h5>
                <form action="#" method="post">
                    <div class="card-body">
                        <div class="form-group">
                            <div class="profile-picture p-3 text-center">
                                @if($cdata[0]->AccountType == 'S')
                                    <img src="{{ asset($cdata[0]->ImageUrl) }}" class="rounded-circle" alt="Profile Photo">
                                @elseif ($cdata[0]->AccountType == 'G' || $cdata[0]->AccountType == 'F')
                                    <img src="{{ $cdata[0]->ImageUrl }}" class="rounded-circle" alt="Profile Photo">
                                @endif
                            </div>
                        </div>
                        <div class="file-upload">
                            <div class="form-group text-center">
                                {{-- <form action="#" id="profile-picture-form"> --}}
                                <label class="file-upload-label text-center btn btn-outline-secondary mt-2"
                                    for="profile-pic-upload">Upload a Photo</label>
                                <input type="file" class="form-control-file file-upload-input" name="file-upload"
                                    id="profile-pic-upload" placeholder="" aria-describedby="fileHelpId"
                                    accept="image/*" hidden>
                                <small id="fileHelpId" class="form-text text-muted">*Only image files are
                                    accepted.</small>
                                {{-- </form> --}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-bolder" for="user-name">Username</label>
                                    <input type="text" class="form-control" name="user-name" id="user-name"
                                        value="{{ $cdata[0]->Username }}">
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bolder" for="first-name">First Name</label>
                                    <input type="text" class="form-control" name="first-name" id="first-name"
                                        value="{{ $cdata[0]->FirstName }}">
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bolder" for="last-name">Last Name</label>
                                    <input type="text" class="form-control" name="last-name" id="last-name"
                                        value="{{ $cdata[0]->LastName }}">
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bolder" for="email">Email</label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        value="{{ $cdata[0]->EmailAddress }}">
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bolder" for="contact-no">Contact No.</label>
                                    <input type="number" class="form-control" name="contact-no" id="contact-no"
                                        value="{{ $cdata[0]->ContactNumber }}">
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bolder" for="user-about">About</label>
                                    <textarea type="number" class="form-control" name="user-about" id="user-about"
                                        rows="5" value="{{ $cdata[0]->AboutMe }}"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-bolder" for="contact-no">Role</label>
                                    <select class="form-control" name="user-role" id="user-role">
                                        <option value="1" @if($cdata[0]->RoleId == 1 ?? '') selected @endif>Admin
                                        </option>
                                        <option value="2" @if($cdata[0]->RoleId == 2 ?? '') selected @endif>Advertiser
                                        </option>
                                        <option value="3" @if($cdata[0]->RoleId == 3 ?? '') selected @endif>Guest
                                        </option>
                                        <option value="4" @if($cdata[0]->RoleId == 4 ?? '') selected @endif>Power User
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bolder" for="user-status">Status</label>
                                    <select class="form-control" name="user-status" id="user-status">
                                        <option value="1" @if($cdata[0]->IsActive == 1 ?? '') selected @endif>Active
                                        </option>
                                        <option value="0" @if($cdata[0]->IsActive == 0 ?? '') selected @endif>Inactive
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bolder" for="user-created">Date Created</label>
                                    <input type="text" name="user-created" id="user-created" class="form-control"
                                        value="{{ date('d-M-y', strtotime($cdata[0]->DateCreated)) }}" disabled
                                        readonly>
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bolder" for="last-login">Last Login</label>
                                    <input type="text" name="last-login" id="last-login" class="form-control"
                                        value="{{ date('d-M-y', strtotime($cdata[0]->LastLogin)) }}" disabled readonly>
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bolder" for="website">Website</label>
                                    <input type="number" class="form-control" name="website" id="website"
                                        value="{{ $cdata[0]->Website }}">
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bolder" for="fb-url">Facebook URL</label>
                                    <input type="number" class="form-control" name="fb-url" id="fb-url"
                                        value="{{ $cdata[0]->FacebookURL }}">
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bolder" for="ig-url">Instagram URL</label>
                                    <input type="number" class="form-control" name="ig-url" id="ig-url"
                                        value="{{ $cdata[0]->InstagramURL }}">
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bolder" for="twt-url">Twitter URL</label>
                                    <input type="number" class="form-control" name="twt-url" id="twt-url"
                                        value="{{ $cdata[0]->TwitterURL }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                {{-- {{ dd($userPosts) }} --}}
                <div class="card-footer">
                    <button type="submit" class="btn btn-danger">Delete User</button>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="posts" role="tabpanel" aria-labelledby="posts-tab">
            <div class="card shadow">
                <h5 class="card-header bg-dark text-white"><i class="mdi mdi-table-account"></i> User Posts</h5>
                <div class="card-body">
                    @if ($userPosts)
                        @foreach(array_chunk($userPosts,4,true) as $chunk)
                            <div class="row">
                            @foreach($chunk as $item)
                                <div class="col-md-3 col-sm-6 mb-4 post-card">
                                    <div class="card">
                                        <div class="card-header px-3 py-0">
                                            <a href="#" class="btn card-profile-image">
                                                <div class="row">
                                                    <div class="col-">
                                                        @if($item['AccountType'] == 'S')
                                                        <img src="{{ asset($item['ProfPhoto']) }}" class="rounded-circle">
                                                        @elseif ($item['AccountType'] == 'G' || $item['AccountType'] == 'F')
                                                        <img src="{{ $item['ProfPhoto'] }}" class="rounded-circle">
                                                        @endif
                                                    </div>
                                                    <div class="col posted-by">
                                                        {{ $item['FirstName'] }}
                                                        <small class="text-muted"><p class="mb-1 posted-ago">
                                                            {{ Carbon\Carbon::parse($item['DateCreated'])->diffForHumans() }}
                                                        </p></small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <img class="card-img post-card-img"
                                            src="{{ asset($item['FeaturedPhoto']) }}" alt="{{ $item['Posting'] }}">
                                        <div class="card-body">
                                            <h5 class="card-title post-title">
                                                <a href="{{ route('view-post', $item['PostingId']) }}" class="card-link text-danger like">{{ $item['Posting'] }}</a>
                                            </h5>
                                            <p class="card-text post-desc">
                                                {{ $item['ShortDescription'] }}
                                            </p>
                                        </div>
                                        <div class="card-footer bg-transparent border-success">
                                            <p class="post-price mb-0">&#8369; {{ $item['UnitPrice'] }} </p>
                                            <p class="post-card-location mb-0"><i class="mdi mdi-google-maps"></i><span>{{ $item['City'] }}</span></p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="messages" role="tabpanel" aria-labelledby="messages-tab">
            <div class="card shadow">
                <h5 class="card-header bg-dark text-white"><i class="mdi mdi-comment-account-outline"></i> User Messages
                </h5>
                <div class="card-body">
                    // TODO
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
