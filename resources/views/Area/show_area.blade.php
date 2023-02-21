 @extends('/Layout/Header')
@section('title','Area CRUD')
{{-- @section('body') --}}
<x-app-layout>
    <h2 class="title text-light"><u>Area CRUD</u></h2>
    <div class="container w-75 mt-5">
        <a class="btn btn-primary btn-md" name="insert_area" href="{{route ('area.create')}}" role="button">Enter New Area</a>
        <br>
    </div>
    <div class="container mt-5">
           <div class="row">
                <div class="col">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>Area ID</th>
                                <th>Area Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($areas as $area)
                                  <tr>
                                    <td>{{ $area->id}}</td>
                                    <td>{{ $area->area_name}}</td>
                              <td class="d-flex">
                             <a class='btn btn-warning btn-sm text-align:center' href="{{route('area.edit',$area->id)}}" >Edit</a>
                            <form action="{{route('area.destroy',$area->id)}}" method="POST">
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

</x-app-layout>
{{-- @endsection --}}