<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function create()
    {
        return view('Admin.pages.blog.create');
    }

    public function store(Request $request)
    {
        // Validate form data
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'image' => 'required|image',
            'content' => 'required',
        ]);
   
        // Create new blog
        $blog = new Blog;
        $blog->title = $validatedData['title'];
        $blog->slug = Str::slug($validatedData['title'].$blog->id);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = Str::slug($blog->title) . '-' . time() . '.' . $request->file('image')->getClientOriginalExtension();
            $file->move(public_path('assets/blog/'), $fileName);
            $blog->image = $fileName;
        }
        $blog->content = $validatedData['content'];
        $blog->save();

        return redirect()->route('blog.show', $blog->id);
    }

    public function show($id)
    {
        $blog = Blog::find($id);
        return view('Admin.pages.blog.show', compact('blog'));
    }
}