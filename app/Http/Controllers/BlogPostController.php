<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;

class BlogPostController extends Controller
{
    public function index()
    {
        $posts = BlogPost::all();
        return view('dashboard', ['posts' => $posts]);
    }

    public function show(BlogPost $blogPost)
    {
        return view('blog.show', ['post' => $blogPost]);
    }

    public function add()
    {
        return view("blog.add");
    }

    public function create(Request $request)
    {
        $blogPost = new BlogPost();
        $blogPost->title = $request->title;
        $blogPost->body = $request->body;
        $blogPost->user_id = auth()->user()->id;
        $blogPost->save();
        return redirect('/dashboard');
    }

    public function edit(BlogPost $blogPost)
    {
        if (auth()->user()->id == $blogPost->user_id) {
            return view('blog.edit', ['post' => $blogPost]);
        } else {
            return redirect('/dashboard');
        }
    }

    public function update(Request $request, BlogPost $blogPost)
    {
        if (auth()->user()->id == $blogPost->user_id) {
            if (isset($_POST['delete'])) {
                $blogPost->delete();
                return redirect('/dashboard');
            } else {
                $blogPost->title = $request->title;
                $blogPost->body = $request->body;
                $blogPost->save();
                return redirect('/dashboard');
            }
        } else {
            return redirect('/dashboard');
        }
    }
}
