@extends('layouts.app')
@section('content')
<div class="container">
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Created Date</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
          </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
          <tr>
            <th scope="row">{{$post->id}}</th>
            <td>{{$post->created_at}}</td>
            <td>{{$post->title}}</td>
            <td>{{substr($post->description,0,100)}}</td>
            
          </tr>

          @endforeach
        </tbody>
      </table>
      
</div>
@endsection