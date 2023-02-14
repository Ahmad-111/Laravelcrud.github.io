@extends('/Header/CreateEdit')
@section('title', 'Student CRUD')
@section('body')


    <h2 class="title text-dark"><u>Enter New Student</u></h2>
    <form method="POST" action="{{ route('student.store') }}">
        @csrf
        <div class="row mt-5">
            <div class="col-sm-3"></div>
            <div class="col-sm-6 mt-3">
                <input type="text" name="student_name" class="form-control" placeholder="Enter Name">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-3"></div>
            <div class="col-sm-6 mt-3">
                <input type="text" name="roll_no" class="form-control" placeholder="Enter Roll No">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-3"></div>
            <div class="col-sm-6 mt-3">
                <input type="text" name="student_email" class="form-control" placeholder="Enter Email">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-3"></div>
            <div class="col-sm-6 mt-3">
                <input type="text" name="contact_no" class="form-control" placeholder="Enter Contact No">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3 mt-5"></div>
            <div class="col-sm-3 mt-5">
                <select name="area_id" class="form-control">
                    <option value="" selected="selected">Select Area</option>
                    @foreach ($areas as $area)
                        <option value="{{ $area->id }}">{{ $area->area_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-3 mt-5">
                <select name="block_id" class="form-control">
                    <option value="" selected="selected">Select Block</option>
                    @foreach ($blocks as $block)
                        <option value="{{ $block->id }}">{{ $block->block_name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div>
            <button type="submit" name="Block_insert" class="btn btn-info mt-5"> Insert</button>
        </div>
    </form>

@endsection
