<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class CourseRequest extends FormRequest
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
            "coursename" => ["required"],
            "qntmax" => ["required"],
            "createdate" => ["required"],
            "updatedate" => ["required"],
            "category" => ["required"],
            "monthlypayment" => ["required"]
        ];
    }

    public function messages()
    {
        return [
            "coursename.required" => "O curso matricula é obrigatório.",
            "qntmax.required" => "O quantidade máxima é obrigatório.",
            "createdate.required" => "O campo data de criação é obrigatório.",
            "updatedate.required" => "O campo data de atualização é obrigatório",
            "category.required" => "O campo categoria é obrigatório",
            "monthlypayment.required" => "O campo mensalidade é obrigatório"
        ];
    }

}
