<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Senf;
use Illuminate\Http\Request;

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
        $senfs = Senf::all();
        return view('admin.students.index', compact('students', 'senfs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $senfs = Senf::all();
        return view('admin.students.create', compact('senfs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new Student;
        $student->name = $request->name;
        $student->father_name = $request->father_name;
        $student->dob = $request->dob;
        $student->gender = $request->gender;
        $student->current_address = $request->current_address;
        $student->permenent_address = $request->permenent_address;
        // $student->phone = $request->phone;
        $student->tazkera_no = $request->tazkera_no;
        $student->current_senf_id = $request->senf_id;
        $student->senfs()->sync($request->senf_id);
        $student->graduated_at = $request->graduated_at;
        $student->join_year = $request->join_year;
        $student->save();
        return redirect(route('students.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
