@extends('/Layout/Header')
@section('title','Block CRUD')
{{-- @section('body') --}}

<x-app-layout>
    <h2 class="title text-light"><u>Block CRUD</u></h2>
    <div class="container w-75 mt-5">

    <a class="btn btn-primary btn-md" name="insert_block" href="{{route ('block.create')}}" role="button">Enter New Block</a>
    <br>
    </div>
        <div class="container mt-5">
           <div class="row">
                <div class="col">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>Block ID</th>
                                <th>Block Name</th>
                                <th>Area Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($blocks as $block)
                                  <tr>
                                    <td>{{ $block->id}}</td>
                                    <td>{{ $block->block_name}}</td>
                                    <td>{{ $block->area->area_name}}</td>
                              <td class="d-flex">
                             <a class='btn btn-warning btn-sm text-align:center' href="{{route('block.edit',$block->id)}}" >Edit</a>
                            <form action="{{route('block.destroy',$block->id)}}" method="POST">
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