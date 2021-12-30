<?php

namespace App\Http\Controllers;

use App\Http\Requests\LessonRequest;
use App\Models\lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function list(){
        $lessons = lesson::paginate(8);
        return view('lesson.lesson',compact('lessons'));
    }

    function searchLesson($id) {
        $lesson = lesson::find($id);
        return view('lesson.lessonDetails', compact('lesson'));
    }

    function newLesson() {
        return view("lesson.createLesson");
    }

    function createLesson(LessonRequest $payload) {

        $response = lesson::create($payload->all());

        if (!$response) {
            dd($payload->all());
        }
        return redirect()->route('listLesson')->with("messages", "O curso {$response->name} foi adicionado com sucesso!");

    }

    function editLesson($id) {

        $lesson = lesson::find($id);

        if (!$lesson) {
            return redirect()->back();
        }
        return view('lesson.editLesson', compact('lesson'));
    }

    function updateLesson(lessonRequest $payload, $id) {

        $lesson = lesson::find($id);

        if (!$lesson) {
            return redirect()->back();
        }

        $lesson->update($payload->all());
        return redirect()->route('listLesson')->with("messages", "O curso {$lesson->name} atualizado com sucesso!");
    }

    function deleteLesson($id) {
        $response = lesson::find($id);

        if (!$response){
            return redirect()->route('listLesson');
        }

        $response->delete();
        return redirect()->route('listLesson')->with("messages", "O curso {$response->name} foi removido com sucesso!");

    }
}
