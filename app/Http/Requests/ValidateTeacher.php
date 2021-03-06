<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Http;

class ValidateTeacher extends FormRequest
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
            "name" => "required|min:3|max:50",
            "register" => ["required", "min: 5"],
            "competence" => ["required", "max: 200"],
            "schooling" => ["required", "max: 200"],
        ];
    }

    public function messages()
    {
        return [
            "name.required" => "O campo nome é obrigatório.",
            "register.required" => "O campo matricula é obrigatório.",
            "competence.required" => "O campo competência é obrigatório.",
            "schooling.required" => "O campo nome da escolaridade é obrigatório.",
        ];
    }

    // public function failedValidation(Validator $validator)
    // {
    //     $infos = ['success'=> false, 'message'=> 'Erro de validação', 'error' => $validator->errors()];
    //     throw new HttpResponseException(response()->json($infos));
    // }
}
