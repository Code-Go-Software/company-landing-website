<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CreatePostRequest;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.posts.index', [
            'posts' => Post::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePostRequest $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->excert = $request->excert;
        $post->author = $request->author;
        $post->content = $request->content;
        $post->tags = $request->tags;

        // Create A Uniaue Name For The Image, This Method Is Extended From The Conroller Class
        $image_name = $this->create_image_name('post', $request->image->extension());
        if(!$request->image->move(public_path('assets/img'), $image_name)) return back()->with('error', 'Failed To Upload Image, Try Again');

        $post->image = $image_name;
        $post->save();

        return redirect('/dashboard/posts')->with('success', 'Blog Post Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('dashboard.posts.show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('dashboard.posts.edit', [
            'post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreatePostRequest $request, Post $post)
    {
        //Check if the user send a new image to delete the old and upload the new
        if($request->image){
            //Delete the old image
            if(file_exists(public_path('assets/img/' . $post->image))){
                unlink(public_path('assets/img/' . $post->image));
            }
            //Upload the new image
            $image_name = $this->create_image_name('post', $request->image->extension());
            if(!$request->image->move(public_path('assets/img'), $image_name)) return back()->with('error', 'Failed To Upload Image, Try Again');

            $post->image = $image_name;
        }
        $post->title = $request->title;
        $post->excert = $request->excert;
        $post->author = $request->author;
        $post->content = $request->content;
        $post->tags = $request->tags;

        $post->save();

        return redirect('/dashboard/posts')->with('success', 'Blog Post Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if(file_exists(public_path('assets/img/' . $post->image))){
            unlink(public_path('assets/img/' . $post->image));
        }
        $post->delete();

        return redirect('/dashboard/posts')->with('success', 'Blog Post Deleted Successfully');
    }
}
