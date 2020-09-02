@extends('layouts.app')

@section('content')
<div class="container">

    <form action="/p" enctype="multipart/form-Data" method="post">
       @csrf

        <div class="row col-md-3 offset-4 form-group row">
            <h1>Add New Post</h1>
        </div>

        <div class="row">
            <div class="col-8 offset-2">
                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label">{{ __('Post Caption') }}</label>
                    <input 
                        id="caption" 
                        type="text" 
                        class="form-control @error('caption') is-invalid @enderror"
                        name="caption" 
                        value="{{ old('caption') }}"
                        required autocomplete="caption" autofocus>

                    @error('caption')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('caption') }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-4 offset-2">
                <div class="form-group row">

                    <label for="image" class="col-md-4 col-form-label">{{ __('Post Image') }}</label>
                    <input type="file" class="from-control-file" id="image" name="image" required="">

                    @error('image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('image') }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row pt-4">
            <div class="col-4 offset-2">
                <div class="form-group row">
                    <button class="btn btn-primary">Add New Post</button>
                </div>
            </div>
        </div>

    </form>

</div>
@endsection