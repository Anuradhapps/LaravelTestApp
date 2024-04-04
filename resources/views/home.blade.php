@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="post" action="{{route('post.store')}}">
                        @csrf
                        <div class="form-group">
                          <label for="postTitle">Post Title</label>
                          <input type="text" name="title" class="form-control" id="postTitle"  placeholder="Enter Post Title" required>
                        </div>
                        <div class="form-group">
                            <label for="postTitle">Post Description</label>
                            <textarea name="description" class="form-control" id="postDescription" cols="30" rows="10" placeholder="Enter Post Description" required></textarea>
                          </div>
                         
                       
                        <button type="submit" class="btn btn-primary mt-2">Post</button>
                      </form>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
