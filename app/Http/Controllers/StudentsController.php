<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\Study;
use App\Models\Category;
use App\Models\Student;

class StudentsController extends Controller
{
    //use Request;

    public function index(Request $request)
    {
        $students = Student::all();
        return view('admin.students-list', compact('students'));
    }

    public function destroy(Student $student)
    {
            $student->delete();
            return redirect()->route('student.index');
    }

    public function v2(Request $request) {
        $students = Student::all();
        return view('admin.v2.students-list', compact('students'));
    }
}
