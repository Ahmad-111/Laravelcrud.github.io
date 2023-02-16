@extends('/Layout/Header')
@section('title', 'Student CRUD')
@section('body')


    <h2 class="title text-light"><u>Enter New Student</u></h2>
    <form method="POST" action="{{ route('student.store') }}">
        @csrf
        <div class="row mt-5">
            <div class="col-sm-3"></div>
            <div class="col-sm-6 mt-3">
                <input type="text" name="student_name" value="{{old('student_name')}}" class="form-control" placeholder="Enter Name">
                <span class="error">
                    @error('student_name')
                             {{$message}}
                    @enderror
                </span>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-3"></div>
            <div class="col-sm-6 mt-3">
                <input type="text" name="roll_no" value="{{old('roll_no')}}" class="form-control" placeholder="Enter Roll No">
                <span class="error">
                    @error('roll_no')
                             {{$message}}
                    @enderror
                </span>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-3"></div>
            <div class="col-sm-6 mt-3">
                <input type="text" name="student_email" value="{{old('student_email')}}" class="form-control" placeholder="Enter Email">
                <span class="error">
                    @error('student_email')
                             {{$message}}
                    @enderror
                </span>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-3"></div>
            <div class="col-sm-6 mt-3">
                <input type="text" name="contact_no" value="{{old('contact_no')}}" class="form-control" placeholder="Enter Contact No">
                <span class="error">
                    @error('contact_no')
                             {{$message}}
                    @enderror
                </span>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3 mt-5"></div>
            <div class="col-sm-3 mt-5">
                <select name="area_id" class="form-control" id="area">
                    <option  value="" selected="selected">Select Area</option>
                    @foreach ($areas as $area)
                        <option value="{{ $area->id }}">{{ $area->area_name }}</option>
                    @endforeach
                </select>
                <span class="error">
                    @error('area_id')
                             {{$message}}
                    @enderror
                </span>
            </div>
            <div class="col-sm-3 mt-5">
                <select name="block_id" class="form-control" id="block">
                    <option value="" selected="selected">Select Block</option>
                </select>
                <span class="error">
                    @error('block_id')
                             {{$message}}
                    @enderror
                </span>
            </div>
        </div>
        <div>
            <button type="submit" name="Block_insert" class="insert btn-primary mt-5"> Insert</button>
        </div>
    </form>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#area').change(function() {
                var area = $(this).val();

                var data = {
                    'area': area,
                    '_token': "{{ csrf_token() }}"
                }
                $.ajax({
                    url: '/fetchblocks',
                    type: 'post',
                    dataType: 'json',
                    data: data,
                    success: function(response) {
                        $('#block').find('option:not(:first)').remove();
                        //$('#block').find('option').remove();
                        $.each(response['blocks'],function(key,value){
                            $('#block').append("<option value='"+value['id']+"'>"+value['block_name']+"</option>");
                        });
                    }
                });
            });
        });
    </script>
@endsection
