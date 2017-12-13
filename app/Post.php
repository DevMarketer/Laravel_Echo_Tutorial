<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $fillable = [
      'title', 'content', 'published'
  ];

  public function user()
  {
    return $this->belongsTo('App\User');
  }

  public function comments()
  {
    return $this->hasMany('App\Comment');
  }
}
