@extends('layouts.app')

@section('content')
<div class="container">
<form action="/p" method="post" enctype="multipart/form-data">
  <div class="row">
      @csrf
      <div class="col-8 offset-2">
          <div class="row">
              <h1>Add New Post</h1>
          </div>

          <div class="form-group row">
              <label for="caption" class="col-md-4 col-form-label">Caption</label>
              <input id="caption" name="caption" type="text" class="form-control @error('caption') is-invalid @enderror" caption="caption" value="{{ old('caption') }}" autocomplete="caption" autofocus>

              @error('caption')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
          </div>

          <div class="row">
              <label for="image" class="col-md-4 col-form-label">Image</label>
              <input type="file" class="form-control-file" id="image" name="image">

              @error('image')
{{--              <span class="invalid-feedback" role="alert">--}}
                  <strong class="alert-danger">{{ $message }}</strong>
{{--              </span>--}}
              @enderror
          </div>

          <div class="row mt-5">
              <button type="submit" class="btn btn-block btn-primary">Create</button>
          </div>
      </div>
  </div>
</form>
</div>
@endsection
