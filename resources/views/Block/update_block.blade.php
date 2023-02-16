@extends('/Layout/Header')
@section('title', 'Block CRUD')
@section('body')


    <h2 class="title text-light"><u>Update Block</u></h2>
    <form method="POST" action="{{ route('block.update', $block->id) }}">
        @csrf
        @method('PUT')

        <div class="row mt-5">
            <div class="col-sm-4"></div>
            <div class="col-sm-4 mt-5">
                <input type="text" name="block_name" class="form-control" value="{{$block->block_name}}">
                <span class="error">
                    @error('block_name')
                             {{$message}}
                    @enderror
                </span>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-sm-4"></div>
            <div class="col-sm-4 mt-4">
                <select name="area_id" value="" class="form-control">
                    <option value="" selected="selected">Select Area</option>
                    @foreach ($areas as $area)
                        <option value="{{ $area->id }}" 
                            @if ($block->area_id == $area->id) 
                                  selected 
                            @endif>
                            {{ $area->area_name }}</option>
                    @endforeach
                </select>
                <span class="error">
                    @error('area_id')
                             {{$message}}
                    @enderror
                </span>
            </div>
        </div>
        <div>
            <button type="submit" name="block_edit" class="insert btn-primary mt-5"> Edit</button>
        </div>
    </form>

@endsection
