<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogPostRequest;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class BlogPostController extends Controller
{
    public function index(): View
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(5);

        return view('blog.index', compact('posts'));
    }

    public function create(): View
    {
        return view('blog.create');
    }

    public function store(BlogPostRequest $request): RedirectResponse
    {
        Post::create($request->validated());

        return redirect()->route('blog-posts.index')
            ->with('success', 'Post created successfully.');
    }

    public function show(Post $post): View
    {
        return view('blog.show', compact('post'));
    }

    public function edit(Post $post): View
    {
        return view('blog.edit', compact('post'));
    }

    public function update(BlogPostRequest $request, Post $post): RedirectResponse
    {
        $post->update($request->validated());

        return redirect()->route('blog-posts.index')
            ->with('success', 'Post updated successfully.');
    }

    public function destroy(Post $post): RedirectResponse
    {
        $post->delete();

        return redirect()->route('blog-posts.index')
            ->with('success', 'Post deleted successfully.');
    }
}