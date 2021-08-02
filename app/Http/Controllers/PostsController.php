<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
  // use Post model
  public function show($slug)
  {
    // use firstOrFail to get 404 if no posts were found
    $post = Post::where('slug', $slug)->firstOrFail();
    return view('newpage', ['post' => $post]);
  }
}
