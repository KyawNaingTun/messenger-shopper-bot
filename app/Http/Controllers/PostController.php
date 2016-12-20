<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Kyawnaingtun\Tounicode\TounicodeTrait;

class PostController extends Controller
{
    use TounicodeTrait;
    public function index(){
      return Post::all();
    }
    //post request localhost:8000/post
    public function store(Request $request)
    {
        $title = $request->title;
        $content = $request->content;
        $post = Post::create($request->all());
        return $post;

        //return $this->toUnicode($content);//output testing

    }
}
