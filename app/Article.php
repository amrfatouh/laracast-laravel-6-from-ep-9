<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
  protected $guarded = [];

  public function author()
  {
    return $this->belongsTo(\App\User::class, 'user_id');
  }

  public function tags()
  {
    return $this->belongsToMany(Tag::class);
  }
}
