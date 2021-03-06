@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-3 p-5">
        <img src="https://s3.amazonaws.com/freecodecamp/curriculum-diagram-full.jpg" class="img-fluid rounded-circle">
      </div>
      <div class="col-9 pt-5 mt-4">
        <div class="d-flex justify-content-between align-items-baseline">
          <h1>{{ $user->username }}</h1>
          <a href="/p/create" class="btn btn-link">Add New Post</a>
        </div>
        <div class="d-flex">
          <div class="pr-4"><strong>153</strong> posts</div>
          <div class="pr-4"><strong>23k</strong> followers</div>
          <div class="pr-4"><strong>212</strong> following</div>
        </div>
        <div class="pt-3 font-weight-bold">
          {{ $user->profile->title ?? "" }}
        </div>
        <div>
            {{ $user->profile->description ?? "" }}
        </div>
        <div><a href="#">{{$user->profile->url ?? ""}}</a></div>
      </div>
    </div>

    <div class="row pt-5 d-flex">
      @if($user->posts)
      @foreach($user->posts as $post)
      <div class="col-4">
        <img src="/storage/{{ $post->image }}" class="w-100 img-thumbnail">
      </div>
      @endforeach
      @endif
    </div>
</div>
@endsection
