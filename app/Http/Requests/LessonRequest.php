<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LessonRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'lessonnumber' => ['required'],
            'theme' => ['required'],
            'duration' => ['required'],
            'note' => ['required'],
            'courseid' => ['required'],
            'teacherid' => ['required'],
            'createdate' => ['required'],
            'updatedate' => ['required']
        ];
    }

    public function messages()
    {   
        return [
            'lessonnumber.required' => 'O campo número é obrigatório',
            'theme.required' => 'O campo tema é obrigatório.',
            'duration.required' => 'O campo duração é obrigatório',
            'note.required' => 'O campo anotação é obrigatório.',
            'courseid.required' => 'O campo id do curso é obrigatório.',
            'teacherid.required' => 'O campo id do professor é obrigatório',
            'createdate.required' => 'O campo data de criação é obrigatório',
            'updatedate.required' => 'O campo data de atualização é obrigatório'
        ];
    }
}
