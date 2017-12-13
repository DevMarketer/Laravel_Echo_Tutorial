<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use Auth;

class CommentController extends Controller
{
  public function index(Post $post)
  {
    return response()->json($post->comments()->with('user')->latest()->get());
  }

  public function store(Request $request, Post $post)
  {
    $comment = $post->comments()->create([
      'body' => $request->body,
      'user_id' => Auth::id()
    ]);

    $comment = Comment::where('id', $comment->id)->with('user')->first();

    return $comment->toJson();
  }
}
