<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImageController extends Controller
{
  function create()
  {
    return view('images.create');
  }

  function index()
  {
    return view('images.index', ['images' => Image::all()]);
  }

  function store(Request $request)
  {
    $request->validate(['image' => 'required|image']);
    $image = $request->file('image');
    $imageName = time() . $image->getClientOriginalName();
    $image->move(public_path('images'), $imageName);
    DB::table('images')->insert(['name' => $imageName]);
    return redirect('/images/index');
  }
}
