<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class cmsController extends Controller
{
    protected $limit = 3;
    //
    public function index(){
        // $posts = Post::with('author')->orderBy('created_at' , 'desc')->get();
        // $posts = Post::with('author')->latest()->get();
        $posts = Post::with('author')->latestFirst()->paginate($this->limit);
        return view('cms.index', compact('posts'));
    }

    public function show($id){
        $post = Post::findOrFail($id);
        return view('cms.show' , compact('post'));
      
    }
  
}
