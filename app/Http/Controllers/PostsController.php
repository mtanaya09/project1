<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    // to protect the route (user must login)
    public function __construct(){
        $this->middleware('auth');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $data = request()->validate([
            // 'user_id' => 'required',
            'caption' => 'required',
            'image' => 'required|image',
        ]);

        // saving caption
        // $post = new \App\Models\Post();
        // $post->caption = $data['caption'];
        // $post->save();

        auth()->user()->posts()->create($data);

        // \App\Models\Post::create($data);

        dd(request()->all());
    }
}
