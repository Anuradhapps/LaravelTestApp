@extends('layouts.app')
@section('content')
<div class="container">
    @if (session('status'))
      <div class="alert alert-danger" role="alert" id="alert-message">
          {{ session('status') }}
      </div>
      <script>
        setTimeout(function(){
            var alertMessage = document.getElementById('alert-message');
            alertMessage.parentNode.removeChild(alertMessage);
        }, 5000);
    </script>
    @endif
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
          <tr>
            <th scope="row">{{$post->id}}</th>
            <td>{{substr($post->title,0,30)}}.</td>
            <td>{{substr($post->description,0,100)}}...</td>
            <td>
                <a href="{{route('post.edit',$post->id)}}"class="btn btn-success btn-sm">Edit</a>
                <a href="{{route('post.delete',$post->id)}}"class="btn btn-danger btn-sm ms-1">Delete</a>
            </td>
          </tr>

          @endforeach
        </tbody>
      </table>
      
</div>

@endsection