<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function create()
    {
        $category = Category::where('type', 'blog')->get();
        $sub_category = SubCategory::get();
        return view('Admin.pages.blog.create', compact('category', 'sub_category'));
    }

    public function store(Request $request)
    {
        // Validate form data
        $validatedData = $request->validate([
            'category' => 'required',
            'sub_category' => 'required',
            'author' => 'required|max:50',
            'title' => 'required|max:255',
            'image' => 'required|image',
            'content' => 'required',
        ]);
        $category = Category::where('name', $validatedData['category'])->first();
        $subCategory = SubCategory::where('name', $validatedData['sub_category'])->first();
        // Create new blog
        $blog = new Blog;
        $blog->category_id = $category->id;
        $blog->sub_category_id = $subCategory->id;
        $blog->author = $validatedData['author'];
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