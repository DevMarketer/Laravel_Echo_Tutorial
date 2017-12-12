@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>New Post</h1>
    <hr />
    <form method="post" action="{{ route('posts.update', $post->id) }}" id="update-post">
      {{ method_field('put') }}
      {{ csrf_field() }}
      <div class="form-group">
        <label for="post_title">Title</label>
        <input type="text" class="form-control" id="post_title" placeholder="Title" value="{{ $post->title }}" name="title">
      </div>

      <div class="form-group">
        <label for="post_content">Post Content</label>
        <textarea class="form-control" rows="8" id="post_content" placeholder="Write something amazing..." name="content">{{ $post->content }}</textarea>
      </div>

      <div class="form-group">
        <label><input type="checkbox" name="published" style="margin-right: 15px;" {{ $post->published ? "checked" : '' }}>Published</label>
      </div>
    </form>

    <button onclick="event.preventDefault();
             document.getElementById('update-post').submit();" class="btn btn-success btn-lg">Save Post</button>

    <button onclick="event.preventDefault();
             document.getElementById('delete-post-form').submit();" class="btn btn-lg btn-danger"><i class="fa fa-trash"></i></button>
    <form id="delete-post-form" method="post" action="{{ route('posts.destroy', $post->id) }}">
      {{ csrf_field() }}
      {{ method_field('delete') }}
    </form>

  </div>
@endsection
