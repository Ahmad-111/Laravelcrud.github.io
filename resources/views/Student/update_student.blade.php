@extends('/Layout/Header')
@section('title', 'Student CRUD')
{{-- @section('body') --}}

<x-app-layout>
    <h2 class="title text-light"><u>Update Student Record</u></h2>
    <form method="POST" action="{{ route('student.update', $student->id) }}">
        @csrf
        @method('PUT')

        <div class="row mt-4">
            <div class="col-sm-3"></div>
            <div class="col-sm-6 mt-3">
                <input type="text" name="student_name" class="form-control" value="{{ $student->student_name }}">
                <span class="error">
                    @error('student_name')
                             {{$message}}
                    @enderror
                </span>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-sm-3"></div>
            <div class="col-sm-6 mt-3">
                <input type="text" name="roll_no" class="form-control" value="{{ $student->roll_no }}">
                <span class="error">
                    @error('roll_no')
                             {{$message}}
                    @enderror
                </span>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-sm-3"></div>
            <div class="col-sm-6 mt-3">
                <input type="text" name="student_email" class="form-control" value="{{ $student->student_email }}">
                <span class="error">
                    @error('student_email')
                             {{$message}}
                    @enderror
                </span>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-sm-3"></div>
            <div class="col-sm-6 mt-3">
                <input type="text" name="contact_no" class="form-control" value="{{ $student->contact_no }}">
                <span class="error">
                    @error('contact_no')
                             {{$message}}
                    @enderror
                </span>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3 mt-4"></div>
            <div class="col-sm-3 mt-4">
                <select name="area_id" class="form-control" id="area">
                    <option value="" selected="selected">Select Area</option>
                    @foreach ($areas as $area)
                        <option value="{{ $area->id }}" @if ($student->area_id == $area->id) selected @endif>
                            {{ $area->area_name }}</option>
                    @endforeach
                </select>
                <span class="error">
                    @error('area_id')
                             {{$message}}
                    @enderror
                </span>
            </div>
            <div class="col-sm-3 mt-4">
                <select name="block_id" class="form-control" id="block">
                    @foreach ($blocks as $block)
                        <option value="{{ $block->id }}"@if ($student->block_id == $block->id) selected @endif>
                            {{ $block->block_name }}</option>
                    @endforeach
                </select>
                <span class="error">
                    @error('block_id')
                             {{$message}}
                    @enderror
                </span>
            </div>
        </div>

        <div>
            <button type="submit" name="area_edit" class="insert btn-primary mt-5"> Edit</button>
        </div>
    </form>
    </body>

    </html>

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
                        //$('#block').find('option:not(:first)').remove();
                        $('#block').find('option').remove();

                        $.each(response['blocks'], function(key, value) {
                            $('#block').append("<option value='" + value['id'] + "'>" +
                                value['block_name'] + "</option>");
                        });
                    }
                });
            });
        });
    </script>

</x-app-layout>
{{-- @endsection --}}
