@extends('/Layout/Header')
@section('title','Block CRUD')
@section('body')


       <h2 class="title text-light"><u>Enter New Block</u></h2>
       <form method="POST" action="{{route('block.store')}}">
        @csrf
       <div class="row mt-5">
        <div class="col-sm-4"></div>
        <div class="col-sm-4 mt-4">
        <select name="area_name" value="{{old('area_name')}}" class="form-control">
            <option value="" selected="selected">Select Area</option>
            @foreach ($areas as $area )
            <option value="{{$area->id}}">{{$area->area_name}}</option>
            @endforeach
    
        </select>
        <span class="error">
            @error('area_name')
                     {{$message}}
            @enderror
        </span>
       </div>
       </div>
       <div>
        <div class="row mt-4">
            <div class="col-sm-4"></div>
            <div class="col-sm-4 mt-4">
        <input type="text" name="block_name" value="{{old('block_name')}}" class="form-control" placeholder="Enter Block">
        <span class="error">
            @error('block_name')
                     {{$message}}
            @enderror
        </span>
    </div>
    </div>
        <button type="submit" name="Block_insert" class="insert btn-primary mt-5"> Insert</button>
       </div>
    </form>

@endsection
