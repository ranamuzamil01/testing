<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class studentcontroller extends Controller
{
    public function index()
    {
        return view('/');
    }

    public function form()
    {
        $url = url('/student');
        $title = "Sudent Registration";
        $data = compact('url', 'title');

        return view('student')->with($data);
    }
    public function table(Request $request)
    {

        // echo "<pre>";
        // print_r($request->all());

        $student = new Student;
        $student->name = $request['name'];
        $student->class = $request['class'];
        $student->email = $request['email'];
        $student->gender = $request['gender'];
        $student->address = $request['address'];
        $student->save();
        return redirect('/student/view');
    }

    public function view()
    {
        $student = Student::all();

        return view('student-view', compact('student'));
    }


    public function delete($id)
    {
        $value = Student::find($id);
        if (!is_null($value)) {
            $value->delete();
        }
        return redirect('student/view');

    }
    public function edit($id)
    {
        $student = Student::find($id);
        if (is_null($student)) {
            //data not found
            return redirect('student');
        } else {
            $title = 'student update';
            $url = url('/student/update') . "/" . $id;
            $data = compact('student', 'url', 'title');
            return view('student')->with($data);
        }
    }

    public function update($id, request $request)
    {

        $student = student::find($id);
        $student->name = $request['name'];
        $student->class = $request['class'];
        $student->email = $request['email'];
        $student->gender = $request['gender'];
        $student->address = $request['address'];
        $student->save();
        return redirect('/student/view');
    }

}