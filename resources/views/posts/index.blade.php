@extends('layouts.app')

@section('content')
<div class="container">

    @foreach($posts as $post)
    <div class="container main_body col-6 mt-3" style="background-color:#FFFFFF; 
                                            border:1px solid #3333; float:middle;">
        <div class="row">

            <!-- profile image section -->

            <div class="d-flex align-items-center offset-2 pt-2 mt-2">
                <div>
                    <a href="/profile/{{ $post->user->id }}">
                    <img src="{{ $post->user->profile->profileImage() }}" class="w-100 rounded-circle"
                        style="max-width: 34px;">
                    </a>
                </div>
                <div class="pl-3 d-flex">
                    <a href="/profile/{{ $post->user->id }}" style="text-decoration:none;">
                        <span class="text-dark">
                            <b>{{ $post->user->username }}</b>
                        </span>
                    </a>
                    <span class="RPhNB pl-2">•</span>

                    <a href="#" class="pl-1" style="text-decoration:none;"><b>Follow</b></a>

                </div>
            </div>

            <hr width=90%>

            <!-- post image section -->

            <div class="col-8 offset-2" style="*{ margin:0px; padding:2px; }">
                <a href="/profile/{{ $post->user->id }}">
                    <img src="/storage/{{ $post->image }}" class="w-100">
                </a>
            </div>
        </div>
        <hr width=90%>
        <!-- after image caption section -->

        <div class="row pt-2">
            <div class="col-8 offset-2">
                <div>
                    <p>
                        <span class="font-weight-bold">
                            <a href="/profile/{{ $post->user->id }}" style="text-decoration:none;">
                                <span class="text-dark pr-2">{{ $post->user->username }}</span>
                            </a>
                        </span>{{ $post->caption }}
                    </p>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    <!-- pagination -->
    <div class="row">
        <div class="col-12 mt-4 d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    </div>
</div>
@endsection