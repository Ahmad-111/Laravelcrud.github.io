@extends('/Header/CreateEdit')
@section('title','Student CRUD')
@section('body')

       <h2 class="title text-dark"><u>Edit Student Record</u></h2>
    <form method="POST" action="{{route('student.update',$student->id)}}">
        @csrf
        @method('PUT')
     
    <div class="row mt-5">
        <div class="col-sm-3"></div>
            <div class="col-sm-6 mt-3">
                <input type="text" name="student_name" class="form-control" value="{{$student->student_name}}">
           </div>
    </div>
    
    <div class="row mt-5">
        <div class="col-sm-3"></div>
            <div class="col-sm-6 mt-3">
                <input type="text" name="roll_no" class="form-control" value="{{$student->roll_no}}">
           </div>
    </div>

    <div class="row mt-5">
        <div class="col-sm-3"></div>
            <div class="col-sm-6 mt-3">
                <input type="text" name="student_email" class="form-control" value="{{$student->student_email}}">
           </div>
    </div>

    <div class="row mt-5">
        <div class="col-sm-3"></div>
            <div class="col-sm-6 mt-3">
                <input type="text" name="contact_no" class="form-control" value="{{$student->contact_no}}">
           </div>
    </div>

        <div>
            <button type="submit" name="area_edit" class="btn btn-info mt-5"> Edit</button>
        </div>
    </form>
    </body>
</html>

@endsection