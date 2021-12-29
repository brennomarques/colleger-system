<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ValidateStudent extends FormRequest
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
            "cpf" => ["required", "max: 15"],
            "birth" => ["required"],
            "financial_officer" => ["required"],
            "id_course" => ["required"],
            "id_plan" => ["required"],

        ];
    }

    public function messages()
    {
        return [
            "name.required" => "O campo nome é obrigatório.",
            "register.required" => "O campo matricula é obrigatório.",
            "cpf.required" => "O campo nome da cpf é obrigatório.",
            "birth.required" => "O campo data é obrigatório.",
            "financial_officer.required" => "O campo data é obrigatório.",
            "id_course.required" => "O campo data é obrigatório.",
            "id_plan.required" => "O campo data é obrigatório.",
        ];
    }

    public function failedValidation(Validator $validator)
    {
        $infos = ['success'=> false, 'message'=> 'Erro de validação', 'error' => $validator->errors()];
        throw new HttpResponseException(response()->json($infos));
    }
}
