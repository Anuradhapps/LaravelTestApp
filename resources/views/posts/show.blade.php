@extends('layouts.frontend')
@section('content')
<div class="card text-center mb-5">
    <div class="card-header">
      #{{$post->id}}
    </div>
    <div class="card-body">
      <h5 class="card-title">{{$post->title}}</h5>
      <img class="card-img-top p-1" src="{{ asset('thumbnails/'.$post->thumbnail) }}" alt="Post Image" style="object-fit: cover; width: 40%; height: 300px;">
      <p class="card-text">{{$post->description}}</p>
    </div>
    <div class="card-footer text-body-secondary">
      {{date('Y-m-d',strtotime($post->created_at))}}
    </div>
  </div>
@endsection