@extends('/Layout/Header')
@section('title', 'Image View')

<x-app-layout>
    <h2 class="title text-light"><u>Images</u></h2>
    <div class="fluid-container">
        <div class="row mt-2">
            <div class="col-sm-1 "></div>
            <div class="col-sm-2 ">
                <label class="form-control"><strong><u>News Feed</u></label></strong>
            </div>
        </div>
        {{-- <div class="row mt-3 "> --}}
        @foreach ($images as $image)
            <div class="row mt-1">
                <label class="label mt-1">{{ $image->image_description }}</label>
            </div>
            <div class="row mt-2" style="height:300px ; width:300px">
                <img src={{ '/assets/' . $image->image_url }} >
            </div>
            <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-2">
                <a class='btn btn-outline-primary btn-sm text-align:center mt-4' href="{{url('/image',$image->id)}}">Add Comment</a>
            </div>
        </div>
    @endforeach
    {{-- </div> --}}
    </div>
</x-app-layout>
