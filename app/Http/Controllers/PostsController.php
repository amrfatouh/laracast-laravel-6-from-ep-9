<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
  public function show($postId)
  {
    $posts = [
      0 => "this is the 1st post",
      1 => "this is the 2nd post"
    ];

    if (!array_key_exists($postId, $posts)) abort(404, "this item doesn not exist");

    return $posts[$postId];
  }
}
