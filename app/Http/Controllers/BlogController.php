<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\notification;

class BlogController extends Controller
{


public function index()
{
    $blogs = notification::all();
    return view('blog.index', compact('blogs'));
}
}
