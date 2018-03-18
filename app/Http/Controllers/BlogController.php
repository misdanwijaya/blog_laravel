<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;

class BlogController extends Controller
{
    protected $limit=3;
    public function index(){
        $data = Posts::with('author')
                        ->LatestFirst()
                        ->simplePaginate($this->limit);
        return view('blog.index',compact('data'));
    }

    public function show ($slug){
        $post = \App\Posts::with('author')
                    ->where('slug', $slug)
                    ->first();

        return view('blog.show',compact('post'));
    }
}