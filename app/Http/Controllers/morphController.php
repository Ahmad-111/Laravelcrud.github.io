<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class morphController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show_post()
    { 
       
        return view('uploaded_post');
    }

    public function show_image()
    { 
       
        return view('uploaded_image');
    }
}
