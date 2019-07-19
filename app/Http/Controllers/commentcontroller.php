<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\comment;
use App\post;
use Auth;
use Session;
use App\Notifications\broadcastnotification;



class commentcontroller extends Controller
{ 
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $comments=comment::all();
        return view('comments.index')->with('comments',$comments);
    }

    /**
     * Show the form for   eating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        $comments = new comment();
        return view('comments.create', compact('comments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $request->validate([

            'comment' => 'required'

        ]);
        
        $comment = new comment();
       
        $comment->comment = $request->comment;
        $comment = new comment([
            'comment' => $request->get('comment'),
            
        ]);
        $comment->save();
       // Session::flash('success',' send successfully');
       return redirect()->back();
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comment = comment::find($id);
        return view('comments.show')->with('comment',$comment);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comment = comment::find($id);

        return view('comments.edit', compact('comment'));
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
            'comment'=>'required',
            
          ]);
    
          $comment = comment::find($id);
          $comment->comment= $request->get('comment');
          
          $comment->save();
          return redirect()->back();
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = comment::find($id);
        $comment->delete();

     return redirect('/comments')->with('success', 'deleted Successfully');
    }




}
