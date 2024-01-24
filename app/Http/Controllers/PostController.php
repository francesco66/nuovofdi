<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::latest()->paginate(6),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        // solo se registrato come admin
        if (Auth::user()->can('admin')) {
            return view('posts.create');
        }

        abort(404);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'body' => 'required|string',
            'image' => 'file|image|max:20000',
            'image_author' => 'nullable|string',
            'excerpt' => 'nullable|string'
        ]);

        $path = $request->file('image')->store('images', 'public');
        $slug = Str::slug($request->title);

        $post = Post::create([
            'title' => $request->title,
            'excerpt' => $request->excerpt,
            'body' => $request->body,
            'slug' => $slug,
            'image_path' => $path,
            'user_id' => auth()->user()->id
        ]);

        Session::flash('success', 'post pubblicato');

        return view('posts.show', [
            'post' => $post,
            'comments' => $post->comments
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        $comments = $post->comments->groupBy('parent_id'); //->with('author');

        if (count($comments)) {
            $comments['root'] = $comments[''];
            unset($comments['']);
        }

        return view('posts.show', [
            'post' => $post,
            'comments' => $comments
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('posts.edit', [
            'post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {

        $attributes = request()->validate([
            'title' => 'required|string',
            'body' => 'required|string',
            'image' => 'file|image|max:20000',
            'excerpt' => 'nullable|string'
        ]);

        $post->update($attributes);

        Session::flash('success', 'post aggiornato');

        return view('posts.show', [
            'post' => $post,
            'comments' => $post->comments
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        // chiedere conferma!
        $post->delete();

        Session::flash('success', 'post cancellato');

        return view('posts.index', [
            'posts' => Post::latest()->paginate(6),
        ]);
    }
}
