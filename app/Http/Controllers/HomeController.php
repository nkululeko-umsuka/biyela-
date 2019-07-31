<?php

namespace App\Http\Controllers;

use App\comment;
use Illuminate\Http\Request;
use App\User;
use App\Notifications\TaskCompleted;
use App\post;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
		User::find(1)->notify(new TaskCompleted);
        $comments=comment::all();
        //$posts=post::all();
        return view('home',compact('comments', 'post'));
    }
}
