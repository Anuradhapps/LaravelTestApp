<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
class postController extends Controller
{
    public function store(Request $request){
        post::create([
            'user_id'=> auth()->user()->id,
            'title'=> $request->title,
            'description'=> $request->description,
            
        ]);
        return back();
    }

    public function show($postId){
        $post = Post::find($postId);
        return view('posts.show',compact('post'));
    }
}
