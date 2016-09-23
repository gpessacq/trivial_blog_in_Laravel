<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Blog;
use Request;
use App\Http\Requests\BlogRequest;
use App\Http\Controllers\Controller;

class BlogsController extends Controller{

  public function __construct(){
    $this->middleware('auth', ['only' => ['create', 'store']]);
  }

  public function index(){
    $blogs = Blog::latest()->get();
    return view('blogs.index')->with('blogs', $blogs);
  }

  public function show($id){
    $blog = Blog::findOrFail($id);
    return view('blogs.show')->with('blog', $blog);
  }

  public function edit($id){
    $blog = Blog::findOrFail($id);
    return view('blogs.edit')->with('blog', $blog);
  }

  public function create(){
    return view('blogs.create');
  }

  public function store(BlogRequest $request){

    $blog = new Blog();
    $blog->title = $request->get('title');
		$blog->text = $request->get('text');
    $blog->user_id = $request->user()->id;

    $blog->save();
    return redirect('blogs');
  }

  public function update(BlogRequest $request, $id){
    $blog = Blog::findOrFail($id);
    $blog->update($request->all());
    return redirect('blogs');
  }

  public function destroy($id){
    Blog::destroy($id);
    return redirect('blogs');
  }

}
