<?php

namespace App\Http\Controllers;
use App\Student;
use Illuminate\Http\Request;
use App\Detention;
class StudentController extends Controller
{
    //
    public function show($student_slug)
    {
        $student = \App\Student::where('slug', $student_slug)->first();
        if (!$student) {
            abort(404, 'Student not found');
        }
        $view = view('student/show');
        $view->student = $student;
        return $view;
    }
    public function index() {
        $students_list = Student::get();
       
        return view('newBlade',  ['students_list' => $students_list]);
    }
    public function post(Request $request) {
        $detention = new Detention;
        $detention->subject = $request->input('subject');
        $detention->description = $request->input('description');
        $detention->save();
    }
}
