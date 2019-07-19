<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use App\comment;
use Auth;





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
         $comments=comment::all();
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
       

        $post = new post([
            'title' => $request->get('title'),
            'body' => $request->get('body')
        ]);
       

        $post->save();
        return redirect('/posts')->with('success', ' Post Created Successfully');
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
        $comment = comment::all(); 
        return view('posts.show', compact('post', 'comment'));
    }
    
    public function comment(Request $request, $id)
    {
        $post = post::find($id);
        $this->validate($request,[
            'comment' => 'required',
        ]);
       
        $comment = new comment;
        $comment->user_id = Auth::user()->id;
        $comment->post_id =$id;
        $comment->comment = $request->input('comment');
        $comment->save(); 
        return redirect(route('posts.index', compact('post')))->with('success', ' Comment Created Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = post::findorFail($id);

        return view('posts.edit', compact('post'));
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
        $request->validate([
            'title' => 'required',
            'body' => 'required'
            
          ]);
    
          $post = post::findorFail($id)->update($request->all());
          return redirect()->route('posts.index')->with('success','Posts Updated Successfully');
        
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $post = post::find($id);
        // $post->delete();
        post::where('id', $id)->delete();

     return redirect('/posts')->with('success', ' Post Deleted Successfully');
    }

     
}
