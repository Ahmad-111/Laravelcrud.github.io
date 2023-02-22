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

        <div class="row mt-1">
            <label class="label mt-1">{{ $images->image_description }}</label>
        </div>
        <div class="row mt-2" style="height:300px ; width:300px">
            <img src={{ '/assets/' . $images->image_url }}>
        </div>

        <div class="row mt-3">
            <div class="comentlabel col-sm-2 ">
                <label class="form-check-label">Leave a comment</label>
            </div>
        </div>
        <form method="POST" action="{{ url('/image', $images->id) }}">
            @csrf
            <div class="row mt-3">
                <div class="col-md-6">
                    <input type="text" class="form-control" name="body" placeholder="Commnent">
                </div>
                <div class="col-md-2 ">
                    <button type="submit" class="btn btn-primary"> Post</button>
                </div>
            </div>
        </form>
        <table class="table table-borderless mt-5">
            <thead class="thead-dark">
                <tr>
                    <th>Comments</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $comments as $comment )
                <tr>
                    <td>{{$comment->body}}</td>
                </tr>
                @endforeach
               
            </tbody>
        </table>
    </div>


</x-app-layout>
