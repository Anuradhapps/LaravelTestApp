<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use Illuminate\Support\Facades\Validator;

class postController extends Controller
{
    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            "title"=> "required",
            "description"=>"required"
        ]);

        if ($validator->fails()){
            return back()->with('status','somthin went wrong');
        }else{
            post::create([
                'user_id'=> auth()->user()->id,
                'title'=> $request->title,
                'description'=> $request->description,
                
            ]);
        }   
        return redirect(route('post.all'))->with('status','New Post created successfuly');
    }

    public function show($postId){
        $post = Post::findOrFail($postId);
        return view('posts.show',compact('post'));
    }

    public function edit($postId){
        $post = Post::findOrFail($postId);
        return view('posts.edit',compact('post'));
    }
     public function update(Request $request, $postId){
        // dd($request->all());
        post::findOrFail($postId)->update($request->all());
        return redirect(route('post.all'))->with('status','Post Updated');
     }
     
     public function delete($postId){
        post::findOrFail($postId)->delete();
        return back()->with('status','Post Deleted');
     }


}
