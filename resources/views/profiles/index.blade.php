@extends('layouts.app')

@section('content')
<div class="container main_body">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{ $user->profile->profileImage() }}" class="rounded-circle w-100">
        </div>

        <div class="col-9 pt-5">
            <div class=" pb-3">
                <div class="d-flex align-items-center">
                    <h2>{{$user->username}}</h2>
                    <div class="ml-2 mb-2">
                       <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                    </div>
                </div>
                
                @can('update', $user->profile)
                <a href="/p/create" 
                class="text-dark post_btn" 
                style="text-decoration: none;">Add New Post</a>
                @endcan


                @can('update', $user->profile)
                <a href="/profile/{{ $user->id }}/edit" 
                class="text-dark edit_btn" 
                style="text-decoration: none;">Edit Profile</a>
                @endcan
            </div>

            <div class="d-flex">

                <div class="pr-5"><strong>{{ $postCount }}</strong> Posts</div>
                <div class="pr-5"><strong>{{ $followsersCount }}</strong> Followers</div>
                <div class="pr-5"><strong>{{ $followingCount }}</strong> Following</div>

            </div>
            <div class="pt-3 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div class="div"><a href="#" style="text-decoration:none;">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <div class="row pt-5">

        @foreach($user->posts as $post)
        <div class="col-4 pb-4">
            <a href="/p/{{ $post->id }}">
                <img src="/storage/{{ $post->image }}" class="w-100">
            </a>
        </div>
        @endforeach


    </div>
</div>
@endsection