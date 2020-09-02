@extends('layouts.app')

@section('content')
<div class="container main_body col-6" style="background-color:#F9F9F9; border:1px solid #3333; float:middle;">
    <div>
        <div class="row">
            <div class="col-7" style="*{ margin:0px; padding:2px; }">
                <img src="/storage/{{ $post->image }}" class="w-100">
            </div>

            <div class="col-5 pt-2">
                <div>
                    <div class="d-flex align-items-center">
                        <div>
                            <img src="{{ $post->user->profile->profileImage() }}" class="w-100 rounded-circle"
                                style="max-width: 42px;">
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
                    <hr width=100%>
                        <!-- image sidebar description -->
                        <p>
                            <span class="font-weight-bold">
                                <a href="/profile/{{ $post->user->id }}">
                                    <span class="text-dark pr-2">{{ $post->user->username }}</span>
                                </a>
                            </span>{{ $post->caption }}
                        </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection