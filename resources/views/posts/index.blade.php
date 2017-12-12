@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <h1>All Posts</h1>
      </div>

      <div class="col-md-4">
        <a href="{{ route('posts.create') }}" class="btn btn-primary pull-right" style="margin-top:15px;">Create New Post</a>
      </div>
    </div>
    <hr />
    <table class="table">
      <thead>
        <tr>
          <th>Id</th>
          <th>Title</th>
          <th>Published</th>
          <th>Actions</th>
        </tr>
      </thead>

      <tbody>
        @foreach ($posts as $post)
          <tr>
            <th>{{ $post->id }}</th>
            <td>{{ $post->title }}</td>
            <td>{{ $post->published ? "Published" : "Draft" }}</td>
            <td><a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-default">Edit</a></td>
          </tr>
        @endforeach
      </tbody>
    </table>
    <div class="text-center">
      {{ $posts->links() }}
    </div>

  </div>
@endsection
