<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Comment;

class ImageController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewImage()
    { 
        $images = Image::all();
        return view('Image.uploaded_image',compact('images'));
    }

    public function imageId($id)
    {
        $images=Image::find($id);
        $comments=$images->comments()->get();
        //$comments=Comment::where('commentable_id',$images->id)->where('commentable_type','App\Models\Image')->get();
        return view('Image.create_comment',compact('images','comments'));
    }

    public function createComment(Request $request, Image $images )
    {
        $images->comments()->create($request->all());
        return redirect(url('/image'));
    }
}
