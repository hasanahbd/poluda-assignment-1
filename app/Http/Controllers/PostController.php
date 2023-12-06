<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use Illuminate\Support\Str;
use App\Models\Category;
class PostController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function __construct() {
        $this->middleware('auth')->except(['index', 'show']);
    }
    public function index() {
        $featured = Post::featured();
        $posts = Post::notFeatured();
        
        return view('posts.index', compact('featured', 'posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        $categories = Category::all();
        return view('posts.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request) {
        $request->validated();
        $post=auth()->user()->posts()->create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content,
            'excerpt' => $request->excerpt,
            'image' => 'https://picsum.photos/900/500',
            'author_id'=>auth()->user()->id,
        ]);
        $post->categories()->attach($request->categories);
        return redirect()->route('posts.index')->with('success', 'Post created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post) {
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post) {
        $request->validated();
        $post->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content,
            'excerpt' => $request->excerpt,
            'image' => 'https://picsum.photos/900/500',
        ]);
        return redirect()->route('posts.index')->with('success', 'Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post) {
        if($post->delete()) {
            return redirect()->route('posts.index')->with('success', 'Post deleted successfully');
        }
    }
}
