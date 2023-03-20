<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    protected $blogs, $blog;
    public  function blog()
    {
        return view('Blog.blog');
    }

    public function newBlog(Request $request)
    {
        Blog::newBlog($request);
        return redirect()->back()->with('success', 'Blog Created successfully.');
    }

    public  function manageBlog()
    {
        $this->blogs = Blog::all();
        return view('blog.manage',[
            'blogs'=>$this->blogs
        ]);

    }
    public function delete($id)
    {
        $this->blog= Blog::find($id);
        if (file_exists($this->blog->image))
        {
            unlink($this->blog->image);
        }
        $this->blog->delete();
        return redirect()->back()->with('success','Blog deleted successfully');
    }

    public function edit($id)
    {
        $this->blog = Blog::find($id);
        return view('Blog.edite',[
            'blog' => $this->blog
        ]);
    }

    public  function update(Request $request , $id)
    {
        Blog::updateBlog($request , $id);
        return redirect()->route('blog.manage')->with('success', 'Blog updated successfully.');
    }


}
