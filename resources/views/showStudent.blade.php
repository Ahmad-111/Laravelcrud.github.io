<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

        <title>Area_CRUD</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <style>
         .title {
            border-radius: unset !important;
            text-align: center;
            font-weight: bold;
            font-style: italic;
            background-color: black;
            margin: auto;
            margin-top: 30px;
        }
        .create{
            margin-left: 50px
        }*{
            padding: 0%;
            margin: 0%;
            box-sizing: border-box;
        }.navbar{
            background-color: white;
            height: 68px;
           /* box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px; */
            /* box-shadow: rgba(3, 102, 214, 0.3) 0px 0px 0px 3px; */
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
          }.nav-link{
            padding: 3px 3px;
            text-decoration: none;
            color: black; 
            font-size: 20px; 
            margin: auto; 
            box-shadow: rgba(0, 0, 0, 0.05) 0px 1px 2px 0px;
        }.navbar li a:hover{
            color: wheat;
        }.navbar-nav
        {
            display: flex !important;
            align-items: center !important;
            gap: 60px ;
            margin-left: 30px;
            /* font-weight: bold; */
        }
    </style>

<body>
    <nav class="navbar navbar-expand-sm  ">
        <ul class="navbar-nav nav-justified " >
          <li><a class="nav-link " href="{{route('area.index')}}">Areas</a></li>
          <li><a class="nav-link" href="{{route('block.index')}}">Blocks</a></li>
          {{-- <li><a class="nav-link" href="{{route('student.index')}}">Students</a></li> --}}
        </ul>
      </nav>
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
</body>
</html>