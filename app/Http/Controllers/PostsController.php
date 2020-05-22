<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{

  public function __construct()
{
    $this->middleware('auth');
}

    public function create(){

      return view('posts.create');
    }
    //Store the uploaded photo and make sure that nobody can upload invalid stuff
    public function store()
      {
          $data = request()->validate([
              'caption' => 'required',
              'image' => ['required', 'image'],
          ]);

          $ImagePath = dd(request('image')->store('uploads', 'public'));

          auth()->user()->posts()->create([
            'caption' =>$data['caption'],
            'image' => $ImagePath,
          ]);

          return redirect('/profile/' . auth()->user()->id);



  }
}
