@extends('/Layout/Header')
@section('title','Area CRUD')
@section('body')

       <h2 class="title text-light"><u>Enter New Area</u></h2>
       <form method="POST" action={{route('area.store')}}>
        @csrf
       <div>
        <div class="row mt-5">
            <div class="col-sm-4"></div>
            <div class="col-sm-4 mt-5">
        <input type="text" name="area_name" class="form-control" placeholder="Enter Area">
        <span class="error">
            @error('area_name')
                     {{$message}}
            @enderror
        </span>
    </div>
    </div>
        <button type="submit" name="area_insert" class="insert btn-primary"> Insert</button>
       </div>
    </form>

@endsection
