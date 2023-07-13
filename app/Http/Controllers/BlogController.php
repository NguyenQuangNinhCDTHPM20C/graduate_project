<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Str;

class BlogController extends Controller
{

    public function index(){
        $blogs = Blog::get();
        return view('admin.pages.blog.blog-list', compact('blogs'));
    }

    public function create()
    {
        $category = Category::where('type', 'blog')->get();
        $sub_category = SubCategory::get();
        return view('admin.pages.blog.create', compact('category', 'sub_category'));
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
        return redirect()->route('blog.index');
    }

    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        $category = Category::where('type', 'blog')->get();
        $sub_category = SubCategory::get();
        return view('Admin.pages.blog.show', compact('blog', 'category', 'sub_category'));
    }

    public function edit($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        $category = Category::where('type', 'blog')->get();
        $sub_category = SubCategory::get();
        return view('Admin.pages.blog.edit-blog', compact('blog', 'category', 'sub_category'));
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);
        if($blog){
        $blog->category_id = $request->input('category_id');
        $blog->sub_category_id = $request->input('sub_category_id');
        $blog->author = $request->input('author');
        $blog->title = $request->input('title');
        $blog->slug = Str::slug($request->input('title').$blog->id);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = Str::slug($blog->title) . '-' . time() . '.' . $request->file('image')->getClientOriginalExtension();
            $file->move(public_path('assets/blog/'), $fileName);
            $blog->image = 'assets/blog/'.$fileName;
        }
        if($request->input('content') != null)
        $blog->content = $request->input('content');
        $blog->save();
        return redirect()->route('blog.index');
        }
        abort(404);
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();
        return redirect()->route('blog.index');
    }
}