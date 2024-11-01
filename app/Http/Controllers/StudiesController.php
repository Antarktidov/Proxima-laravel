<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Study;
use App\Models\Category;
use App\Models\Student;

use Illuminate\Http\Request;

class StudiesController extends Controller
{
    public function index()
    {
        $studies = Study::all();
        $categories = Category::all();
        //$study = Study::find(1);
        //dd($study->title);

        return view('welcome', compact('studies', 'categories'));
    }

    public function application()
    {
        $studies = Study::all();

        $data = request()->validate([
            'choicedstudyes' => 'string',
        ]);
        //dd($data['choicedstudyes']);
        $choicedstudyes = $data['choicedstudyes'];// test_input($_POST["choicedstudyes"]);
        $choicedstudyesArr = (explode(',', $choicedstudyes));
        $choicedstudyesArrCount = count($choicedstudyesArr);

        switch ($choicedstudyesArrCount) {
            case 1:
              $studyesCase = 'предмет';
              break;
            case 2:
            case 3:
            case 4:
              $studyesCase = 'предмета';
              break;
            case 5:
              $studyesCase = 'предметов';
              break;
            default:
              $studyesCase = '';
              break;
          }


        return view('study-application', compact('studies', 'choicedstudyes', 'choicedstudyesArr', 'choicedstudyesArrCount', 'studyesCase'));
    }

    public function applied()
    {
      $data = request()->validate([
        'citizenship' => 'string',
        'name' => 'string',
        'surname' => 'string',
        'city' => 'string',
        'patronymic' => '',
        'phone_number' => 'string',
        'e_mail' => '',
        'choicedstudyes' => 'string',
    ]);

    //dd($data);

    $choicedstudyes = explode(',', $data['choicedstudyes']);
    unset($data['choicedstudyes']);
    $student = Student::create($data);

    //$choicedstudyes//explode($separator, $string
    $student->studies()->attach($choicedstudyes);

    return view('study-applied');
    }
}
