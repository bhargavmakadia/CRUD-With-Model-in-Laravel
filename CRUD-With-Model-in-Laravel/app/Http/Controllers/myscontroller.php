<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;

class myscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = Student::all();
        return view('student.index',compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $b = new Student([
            'student_name' => $request->get('student_name'),
            'student_gender' => $request->get('student_gender'),
            'student_mobile' => $request->get('student_mobile'),
            'student_email' => $request->get('student_email'),
            'student_address' => $request->get('student_address'),
        ]);
        $b->save();
        return redirect('student')->with('Success','Student Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $sdata = Student::where('id',$id)->first();
        return view('student.show',compact('sdata'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $studentarray = Student::where('id',$id)->first();
        return view ('student.edit',compact('studentarray'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $studentarray = Student::where('id',$id)->first();
        
        $studentarray->student_name = $request->get('student_name');
        $studentarray->student_gender = $request->get('student_gender');
        $studentarray->student_mobile = $request->get('student_mobile');
        $studentarray->student_email = $request->get('student_email');
        $studentarray->student_address = $request->get('student_address');

        $studentarray->save();

        return redirect('/student')->with('Success','Student has been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();

        return redirect('/student')->with('Success','Student has been deleted Successfully');
    }
}
