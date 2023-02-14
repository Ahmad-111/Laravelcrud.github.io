@extends('/Header/CreateEdit')
@section('title','Block CRUD')
@section('body')


       <h2 class="title text-dark"><u>Enter New Block</u></h2>
       <form method="POST" action="{{route('block.store')}}">
        @csrf
       <div class="row mt-5">
        <div class="col-sm-4"></div>
        <div class="col-sm-4 mt-5">
        <select name="area_name" value="" class="form-control">
            <option value="" selected="selected">Select Area</option>
            @foreach ($areas as $area )
            <option value="{{$area->id}}">{{$area->area_name}}</option>
            @endforeach
    
        </select>
       </div>
       </div>
       <div>
        <div class="row mt-5">
            <div class="col-sm-4"></div>
            <div class="col-sm-4 mt-5">
        <input type="text" name="block_name" class="form-control" placeholder="Enter Block">
    </div>
    </div>
        <button type="submit" name="Block_insert" class="btn btn-info"> Insert</button>
       </div>
    </form>

@endsection
