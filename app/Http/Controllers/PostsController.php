<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
  // connect to the database and get a post
  public function show($slug)
  {
    $post = \DB::table('posts')->where('slug', $slug)->first();
    return view('newpage', ['post' => $post]);
  }
}
