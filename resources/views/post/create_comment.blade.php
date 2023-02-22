@extends('/Layout/Header')
@section('title', 'Area CRUD')

<x-app-layout>
    <h2 class="title text-light"><u>Posts</u></h2>
    <div class="fluid-container">
        <div class="row mt-2">
            <div class="col-sm-1 "></div>
            <div class="col-sm-2 ">
                <label class="form-control"><u>News Feed</u></label>
            </div>
        </div>
        <div class="row mt-3 ">
            {{-- @foreach ($posts as $post) --}}
            <label class="label">{{ $posts->user_posts }}</label>
            {{-- @endforeach --}}
        </div>
        <div class="row mt-2">
            <div class="comentlabel col-sm-2 ">
                <label class="form-check-label">Leave a comment</label>
            </div>
        </div>
        <form method="POST" action="{{ url('/post', $posts->id) }}">
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
