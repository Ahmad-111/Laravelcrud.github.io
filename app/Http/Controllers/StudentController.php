<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Area;
use App\Models\Block;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('Student.show_student',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $areas= Area::all();
        $blocks= Block::all();
        return view('Student.insert_student',compact('areas','blocks'));
    }

    public function fetchBlocks(Request $request){

        $area_id = $request->area;
        $blocks = Block::where('area_id',$area_id)->get();
        
        return response()->json([
            'blocks'=>$blocks
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate(
            [
              'student_name' => 'required|regex:/^[a-zA-Z\s]*$/',
              'roll_no' => 'required|numeric',
              'student_email' => 'required|unique:students,student_email|email',
              'contact_no' => 'required|numeric|min_digits:11|max_digits:11',
              'area_id' => 'required',
              'block_id' => 'required'
            ]
        );
        Student::create($request->all());
        return redirect(route('student.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $student = Student::find($id);
        $areas = Area::all();
        $blocks=Block::where('area_id',$student->area_id)->get();
        return view('Student.update_student',compact('student','areas','blocks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
        $request->validate(
            [
              'student_name' => 'required|regex:/^[a-zA-Z\s]*$/',
              'roll_no' => 'required|numeric',
              'student_email' => 'required|unique:students,student_email|email',
              'contact_no' => 'required|numeric|min_digits:10',
              'area_id' => 'required',
              'block_id' => 'required'
            ]
        );
        $student->update($request->all());
        return redirect(route('student.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $student = Student::find($id);
        $student->delete();
        return redirect(route('student.index'));
    }
}
