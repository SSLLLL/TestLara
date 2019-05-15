@extends('layouts.app')

@section('content')
<div class="container">
<form>
  <div class="row">
    <div class="col-8 offset-2">
    <h1>Add New Post</h1>
  </div>
  <div class="row">
  <div class="form-group">
    <label for="caption">Post Caption</label>
    <input type="text" class="form-control" id="caption" placeholder="Enter Post Caption">
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Example file input</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
  
  <button type="submit" class="btn btn-primary">Add</button>
    </div>
  </div>
</form>
</div>
@endsection
