<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Post;
use Database\Factories\PostFactory;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $posts = Post::all();

        // dd($posts);
        $post = Post::all();
        return view('layouts.index', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $post = new Post();
        // $post->slug = $request->slug;
        // $post->title=$request->title;
        // $post->content=$request->content;
        // if($post->save()){
        //     return new PostFactory($post);
        // }
        // return $request->all();

        $post = new Post();
        $post->slug = request('slug');
        $post->title = request('title');
        $post->content = request('content');

        $post->save();
        return view('layouts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $post = Post::find($id);
         
        
        
        return view('layouts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('layouts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Post $post)
    {
        
        $post = Post::find($id);
        $post->slug = request('slug');
        $post->title = request('title');
        $post->content = request('content');

        $post->update();
        return view('layouts.show', compact('post'));

        

        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        if($post->delete()){
            return new PostResource($post);
        }
    }
}
