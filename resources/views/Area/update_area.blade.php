@extends('/Layout/Header')
@section('title','Area CRUD')
{{-- @section('body') --}}
<x-app-layout>

       <h2 class="title text-light"><u>Update Area</u></h2>
       <form method="POST" action="{{route('area.update',$area->id)}}">
        @csrf
        @method('PUT')
       <div>
        <div class="row mt-5">
            <div class="col-sm-4"></div>
            <div class="col-sm-4 mt-5">
        <input type="text" name="area_name" class="form-control" value="{{$area->area_name}}">
        <span class="error">
            @error('area_name')
                     {{$message}}
            @enderror
        </span>
    </div>
    </div>
        <button type="submit" name="area_edit" class="insert btn-primary">Update</button>
       </div>
    </form>

</x-app-layout>
{{-- @endsection --}}
