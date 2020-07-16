@extends('layouts.admin')

@section('content')
    {{-- {{ dd($item) }} --}}
    <view-post
    post-user-route="{{ route('view-user', $item[0]->UserId) }}"
    :where="'{{ $where }}'"
    :post-id="'{{ $postId }}'"
    :post-images='@json($img)'
    :post-item='@json($item)'
    >
    </view-post>

@endsection
