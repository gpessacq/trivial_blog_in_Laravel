<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
      public function contact(){
        $name = 'Mike';
        $location = 'USA';
        $data = "some random data<script>alert('mensajito');</script>";
        $people = [];
//      return view('contact')->with('name', $name)->with('location', $location);
//      return view('contact')->withData($data)->withLocation($location);
        return view('contact', compact('people'));
      }
}
