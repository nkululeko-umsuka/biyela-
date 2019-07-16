<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use App\comment;



class postcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $posts=post::all();
        return view('posts.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $post = new post();
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [

            'title' => 'required' ,
            'body' => 'required'

        ]);
       /* $post = post::create([]);
        $post->title = $request->input('title');
        $post->body = $request->input('body');*/

        $post = new post([
            'title' => $request->get('title'),
            'body' => $request->get('body')
        ]);
       

        $post->save();
        return redirect('/posts');
       // return 123;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        $post = post::find($id);
        //$comment = comment::findOrFail($id);
        // $comment = new comment();
        //$post = new post();

        // $comment = new comment;
        //     $comment->body = $request->body;
        //     //$comment->$post = $request->$post;
        // $comment->save();

        return view('posts.show')->with('post',$post);
    }
    
    public function comment($id,Request $request)
    {
        $post = post::find($id);
        $this->validate($request,[
            'comment' => 'required',
        ]);
       
        $comment = new comment;
         $comment->comment = $request->input('comment');
       // $comment->body = $request->body;
        $comment->save(); return $comment;
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = post::find($id);
        $post->delete();

     return redirect('/posts')->with('success', 'deleted Successfully');
    }
}
