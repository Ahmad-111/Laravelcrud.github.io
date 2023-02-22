@extends('/Layout/Header')
@section('title', 'Area CRUD')

<x-app-layout>
    <h2 class="title text-light"><u>Posts</u></h2>
    <div class="fluid-container">
        <div class="row mt-2">
            <div class="col-sm-1 "></div>
            <div class="col-sm-2 ">
                <label class="form-control"><strong><u>News Feed</u></label></strong>
            </div>
        </div>
        <div class="row mt-3 ">
            @foreach ($posts as $post)
                <div class="col-md-8">
                <label class="label mt-3">{{ $post->user_posts }}</label></div>
                <div class="col-md-2">
                <a class='btn btn-outline-primary btn-sm text-align:center mt-4' href="{{url('/post',$post->id)}}" >Add Comment</a>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
