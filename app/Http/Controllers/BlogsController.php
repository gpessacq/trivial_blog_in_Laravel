<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Blog;
use Request;
use App\Http\Requests\BlogRequest;
use App\Http\Controllers\Controller;

class BlogsController extends Controller
{
  public function index(){
    $blogs = Blog::latest()->get();
    return view('blogs.index')->with('blogs', $blogs);
  }

  public function show($id){
    $blog = Blog::findOrFail($id);
    return view('blogs.show')->with('blog', $blog);
  }

  public function create(){
    return view('blogs.create');
  }

  public function store(BlogRequest $request){
    $input = Request::all();
    Blog::create($input);
    return redirect('blogs');
  }
}
