<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Study;

class TeachersController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();

        return view('teachers', compact('teachers'));
    }

    public function api()
    {
        $teachers = Teacher::all();

        $arr = [];

        foreach ($teachers as $teacher) {
            $studies = $teacher->studies;

            $departments = [];

            foreach($studies as $study) {
                array_push($departments,
                /*'department' => */$study->department
                );
            }

            //dd($departments);

            array_push($arr, [
                'name' => $teacher->name,
                'image' => $teacher->image,
                'city' => $teacher->city,
                //'studies' => $teacher->studies::all()->department,
                'departments' => $departments,
            ]);
        }
        return $arr;

        //return view('teachers', compact('teachers'));
    }

    public function vue() {
        return view('teachers-vue');
    }

    public function show()
    {
        $data = request()->validate([
            'study' => 'string',
        ]);
        //dd($data['study']);

        $study = $data['study'];
        $teachers = Teacher::all();

        return view('teachers', compact('teachers', 'study'));
    }
}
