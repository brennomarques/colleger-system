<?php

namespace App\Http\Controllers;

use App\Http\Requests\CourseRequest;
use App\Http\Requests\ValidateTeacher;
use App\Models\course;
use App\Models\lesson;
use App\Models\teacher;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function list(){
        $courses = course::paginate(8);
        return view('course.course',compact('courses'));
    }

    function searchCourse($id) {
        $course = course::find($id);
        
        $lessons = lesson::all();
        $lessons =  $lessons->where('courseid', '=', $id);

        return view('course.courseDatails', compact('course','lessons'));
    }

    function newCourse() {
        return view("course.createCourse");
    }

    function createCourse(CourseRequest $payload) {

        $response = course::create($payload->all());

        if (!$response) {
            dd($payload->all());
        }
        return redirect()->route('listCourse')->with("messages", "O curso {$response->name} foi adicionado com sucesso!");

    }

    function editCourse($id) {

        $course = course::find($id);

        if (!$course) {
            return redirect()->back();
        }
        return view('course.editCourse', compact('course'));
    }

    function updateCourse(CourseRequest $payload, $id) {

        $course = course::find($id);

        if (!$course) {
            return redirect()->back();
        }

        $course->update($payload->all());
        return redirect()->route('listCourse')->with("messages", "O curso {$course->name} atualizado com sucesso!");
    }

    function deleteCourse($id) {
        $response = course::find($id);

        if (!$response){
            return redirect()->route('listCourse');
        }

        $response->delete();
        return redirect()->route('listCourse')->with("messages", "O curso {$response->name} foi removido com sucesso!");

    }
}
