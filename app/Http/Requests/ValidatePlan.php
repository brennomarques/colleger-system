<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ValidatePlan extends FormRequest
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
            "discount" => ["required"],
            "note" => ["required", "min: 4"],
        ];
    }

    public function messages()
    {
        return [
            "name.required" => "O campo nome é obrigatório.",
            "discount.required" => "O campo desconto é obrigatório.",
            "note.required" => "O campo observação é obrigatório.",
        ];
    }

    // public function failedValidation(Validator $validator)
    // {
    //     $infos = ['success'=> false, 'message'=> 'Erro de validação', 'error' => $validator->errors()];
    //     throw new HttpResponseException(response()->json($infos));
    // }
}
