@extends('/Layout/Header')
@section('title','Student CRUD')
@section('body')


    <h2 class="title text-light"><u>Student CRUD</u></h2>
    <div class="create fluid-container  mt-5">
        <a class="btn btn-primary btn-md" name="insert_student" href="{{route ('student.create')}}" role="button">Enter New Student</a>
        <br>
    </div>
    <div class="fluid-container mt-5">
           <div class="row">
                <div class="col">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Roll No</th>
                                <th>Email</th>
                                <th>Contact No</th>
                                <th>Area Name</th>
                                <th>Block Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                                  <tr>
                                    <td>{{ $student->id}}</td>
                                    <td>{{ $student->student_name}}</td>
                                    <td>{{ $student->roll_no}}</td>
                                    <td>{{ $student->student_email}}</td>
                                    <td>{{ $student->contact_no}}</td>
                                    <td>{{ $student->area->area_name}}</td>
                                    <td>{{ $student->block->block_name}}</td>
                              <td class="d-flex">
                             <a class='btn btn-warning btn-sm text-align:center' href="{{route('student.edit',$student->id)}}" >Edit</a>
                            <form action="{{route('student.destroy',$student->id)}}" method="POST">
                            @csrf
                            @method('delete')
                             <button class="btn btn-danger btn-sm text-align:center" type="submit">Delete</button>
                            </form>
                            </td> 
                              </tr>
                            @endforeach 
                       
                        </tbody>
                    </table>

                </div>
            </div>
    </div>

@endsection