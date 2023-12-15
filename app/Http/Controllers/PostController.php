<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use Illuminate\Support\Facades\Gate;
use App\Models\Post;
use Illuminate\Contracts\Cache\Store;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::latest()->paginate(10);
        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create')->with([
            'posts' => Post::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
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

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('posts.show')->with([
            'post' => $post,
            'posts'=> Post::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('posts.edit')->with(['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorePostRequest $request, Post $post)
    {

        $post->update([
            'title' => $request->title,
            'text' => $request->text
        ]);

        return redirect()->route('posts.index', ['post' => $post->id]);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index');
    }
}