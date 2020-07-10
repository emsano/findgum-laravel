@extends('layouts.admin')

@section('content')
    {{-- {{ dd($item) }} --}}
    <view-post
    :where="'{{ $where }}'"
    :post-id="'{{ $postId }}'"
    :post-images='@json($img)'
    :post-item='@json($item)'
    {{-- :post-item="'{{ $item }}'" --}}
    >
    </view-post>

@endsection
