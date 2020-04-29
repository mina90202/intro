<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Blog;
use App\Http\Requests\Admin\BlogRequest;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogRequest $request)
    {
        if($request->hasFile('image')) {

            $filename = time().$request->image->getClientOriginalName();
            $request->image->storeAs('/', $filename);
        }
            $blog = new Blog;
            $blog->title = $request->title;
            $blog->image = $filename;
            $blog->sub_body = $request->sub_body;
            $blog->auther = $request->auther;
            $blog->body = $request->body;
            $blog->save();

            return redirect()->route('blogs.index')->with('blog',  'Post Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('admin.blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BlogRequest $request, $id)
    {

        $blog =  Blog::find($id);
        if($request->hasFile('image')) {

            $filename = time().$request->image->getClientOriginalName();
            $request->image->storeAs('/', $filename);
        } else {
            $filename = $blog->image;
        }
            $blog->title = $request->title;
            $blog->auther = $request->auther;
            $blog->image = $filename;
            $blog->sub_body = $request->sub_body;
            $blog->body = $request->body;
            $blog->save();

            return redirect()->route('blogs.index')->with('blog',  'Blog updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->delete();

        $image_path = public_path().'/upload/'.$blog->image;
        unlink($image_path);


        return back()->with('delete', '1 Record has been deleted');
    }

}
