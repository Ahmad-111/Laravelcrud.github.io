<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use App\Models\Comment;


class morphController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewPost()
    { 
        $posts = post::all();
        return view('post.uploaded_post',compact('posts'));
    }

    public function postId($id)
    {
        $posts=post::find($id);
        $comments=$posts->comments()->get();
        //$comments=Comment::where('commentable_id',$posts->id)->where('commentable_type','App\Models\post')->get();
        return view('post.create_comment',compact('posts','comments'));
    }

    public function createComment(Request $request, post $posts )
    {
        $posts->comments()->create($request->all());
        return redirect(url('/post'));
    }
}
