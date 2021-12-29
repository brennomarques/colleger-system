<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateStudent;
use App\Models\{Student};
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function list(){
        $students = Student::paginate(8);
        return view('student.student',compact('students'));
    }

    public function searchStudent($id) {
        $student = Student::find($id);
        return view('student.studentDatails', compact('student'));
    }

    public function newStudent() {
        return view("student.createStudent");
    }

    public function createStudent(ValidateStudent $payload) {

        $response = Student::create($payload->all());

        if (!$response) {
            dd($payload->all());
        }
        return redirect()->route('listStudent')->with("messages", "O aluno {$response->name} foi adicionado com sucesso!");

    }

    public function editStudent($id) {

        $student = Student::find($id);
        if (!$student) {
            return redirect()->back();
        }

        return view('student.editStudent', compact('student'));
    }

    public function updateStudent(ValidateStudent $payload, $id) {

        $student = Student::find($id);
        if (!$student) {
            return redirect()->back();
        }

        $student->update($payload->all());
        return redirect()->route('listStudent')->with("messages", "O aluno {$student->name} atualizado com sucesso!");
    }

    public function deleteStudent($id) {
        $response = Student::find($id);

        if (!$response){
            return redirect()->route('listStudent');
        }

        $response->delete();
        return redirect()->route('listStudent')->with("messages", "O aluno {$response->name} foi removido com sucesso!");

    }
}
