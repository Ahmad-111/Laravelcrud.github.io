<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
     

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <style>
        .create{
            margin-left: 50px
        }
         .title {
            border-radius: unset !important;
            text-align: center;
            font-weight: bold;
            font-style: italic;
            background-color: black;
            margin: auto;
            margin-top: 30px;
        }
        /* *{
            padding: 0%;
            margin: 0%;
            box-sizing: border-box;
        } */
        /* .navbar{
            background-color: white;
            height: 68px;
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
            font-weight: bold;
        } */
        .insert {
            margin: 40px auto 20px;
            width: 25%;
            display: block;
            padding: 10px 0;
            border: 1px solid black;
            cursor: pointer;
            margin-bottom: 10px;
            border-radius: 10px;
            background-color: #0652DD;
            font-weight: bold;
        }
         .error{
            color: red;
            font-style: italic;
            /* font-weight: bold; */
            padding: 15px;
            margin-top: 40px;
           }
        .label{
            color: #5f27cd;
            padding:20px;
            margin-left: 30%;
            font-weight: bolder;
            font-family: italic;
            /* margin-left: auto;
            margin-right: auto; */
        }
        .comentlabel{
            margin-left:4%;
        }
        input{
            margin-left: 2%
        }
        .btn{
            margin-left: 6%
        }
       img{
        margin-left: 240%
       }
    </style>

<body>
    {{-- <nav class="navbar navbar-expand-sm  ">
        <ul class="navbar-nav nav-justified " >
          <li><a class="nav-link " href="{{route('area.index')}}">Areas</a></li>
          <li><a class="nav-link" href="{{route('block.index')}}">Blocks</a></li>
          <li><a class="nav-link" href="{{route('student.index')}}">Students</a></li>
        </ul>
      </nav> --}}

      @yield('body')

</body>
</html>