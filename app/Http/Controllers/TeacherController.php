<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateTeacher;
use App\Models\teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function list(){
        $teachers = teacher::all();
        return view('teacher.teacher',compact('teachers'));
    }

    function searchTeacher($id) {
        $teacher = teacher::find($id);
        return view('teacher.teacherDatails', compact('teacher'));
    }

    function newTeacher() {
        return view("teacher.createTeacher");
    }

    function createTeacher(ValidateTeacher $payload) {

        $response = teacher::create($payload->all());

        if (!$response) {
            dd($payload->all());
        }
        return redirect()->route('listTeacher')->with("messages", "O professor {$response->name} foi adicionado com sucesso!");

    }

    function editTeacher($id) {

        $teacher = teacher::find($id);

        if (!$teacher) {
            return redirect()->back();
        }
        return view('teacher.editTeacher', compact('teacher'));
    }

    function updateTeacher(ValidateTeacher $payload, $id) {

        $teacher = teacher::find($id);

        if (!$teacher) {
            return redirect()->back();
        }

        $teacher->update($payload->all());
        return redirect()->route('listTeacher')->with("messages", "O professor {$teacher->name} atualizado com sucesso!");
    }

    function deleteTeacher($id) {
        $response = teacher::find($id);

        if (!$response){
            return redirect()->route('listTeacher');
        }

        $response->delete();
        return redirect()->route('listTeacher')->with("messages", "O professor {$response->name} foi removido com sucesso!");

    }
}
