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

        <title>Block_CRUD</title>

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
            margin-top: 50px;
        }
    </style>

<body>
    <h2 class="title text-light"><u>Block CRUD</u></h2>
    <div class="container w-75 mt-5">
        <form method="POST" action="{{route('block.store')}}">
            @csrf
        {{-- <a class="btn btn-primary btn-md" name="insert_block" href="{{route ('block.store')}}" role="button">Enter New Block</a> --}}
        <button  class="btn btn-primary" type="submit">Enter New Block</button>
        <br>
    </form>
    </div>
    <div class="container mt-5">
           <div class="row">
                <div class="col">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>Block ID</th>
                                <th>Block Name</th>
                                <th>Area ID</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($blocks as $block)
                                  <tr>
                                    <td>{{ $block->block_id}}</td>
                                    <td>{{ $block->block_name}}</td>
                                    <td>{{ $block->id}}</td>
                              <td class="d-flex">
                             <a class='btn btn-warning btn-sm text-align:center' href="{{route('area.edit',$block->block_id)}}" >Edit</a>
                            <form action="{{route('area.destroy',$block->block_id)}}" method="POST">
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