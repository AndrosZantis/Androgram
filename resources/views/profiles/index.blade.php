@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
        <div class="col-3 pt-5">
            <img src="https://scontent-lht6-1.cdninstagram.com/v/t51.2885-19/s150x150/59397678_455724555190408_7391295050312843264_n.jpg?_nc_ht=scontent-lht6-1.cdninstagram.com&_nc_ohc=F6eMYXYYDCQAX94LdJJ&oh=3df0468fdf163db32f3c73fee2480632&oe=5EF26891"></img>
        </div>
    <div class = "col-9 pt-5">
        <div class="d-flex justify-content-between align-items-baseline">
          <h1>{{$user->username}}</h1>
          <a href = "/p/create">Add New Post</a>
        </div>
        <div class="d-flex">
        <div class="pr-4"><strong>346 </strong>posts</div>
        <div class="pr-4"><strong>457 </strong>followers</div>
        <div class="pr-4"><strong>1,076 </strong>following</div>
        </div>
    <div class="pt-4 font-weight-bold ">{{$user->profile->title}}</div>
    <div>{{$user->profile->description}}</div>
    </div>
  </div>
  <div class = "row pt-5">
    @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/{{ $post->id }}">
                    <img src="/storage/{{ $post->image }}" class="w-100">
                </a>
            </div>
        @endforeach
</div>
@endsection
