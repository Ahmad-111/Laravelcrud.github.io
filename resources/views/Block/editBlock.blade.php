@extends('/Header/CreateEdit')
@section('title','Block CRUD')
@section('body')


       <h2 class="title text-dark"><u>Edit Block</u></h2>
       <form method="POST" action="{{route('block.update',$block->id)}}">
        @csrf
        @method('PUT')
       <div>
        <div class="row mt-5">
            <div class="col-sm-4"></div>
            <div class="col-sm-4 mt-5">
        <input type="text" name="block_name" class="form-control" value="{{$block->block_name}}">
    </div>
    </div>
        <button type="submit" name="area_edit" class="btn btn-info "> Edit</button>
       </div>
    </form>

@endsection
