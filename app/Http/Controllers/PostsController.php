<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $data = request()->validate([
            'caption' => 'required',
            'image' => 'required|image',
        ]);

        // saving caption
        // $post = new \App\Models\Post();
        // $post->caption = $data['caption'];
        // $post->save();

        // auth()->user()->posts()->

        \App\Models\Post::create($data);

        dd(request()->all());
    }
}
