<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index')->with('posts', $posts);
    }

    public function create()
    {
        return view('posts.create')->with([
            'posts' => Post::all(),
        ]);
    }

    public function store(StorePostRequest $request)
    {
     // $path = $request->file('photo')->store('post-photos');
    $post = Post::create([
        'title' => $request->title,
        'text' => $request->text,
       // 'photo' => $path
    ]);

    if(isset($request->tags)){
        foreach ($request->tags as $tag) {
            $post->tags()->attach($tag);
        }
    }

    return redirect()->route('posts.index');
    }
    
    public function show(Post $post)
    {
        return view('posts.show')->with([
            'post' => $post,
            'posts' => Post::all(),
        ]);
    }

    public function edit(Post $post)
    {
        return view('posts.edit')->with(['post' => $post]);
    }
}
