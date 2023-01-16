<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TypeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'=>'required'
        ];
    }
    public function messages(){
        $rules =  [ 'name.required' => 'Type is required'];
        return $rules;
    }
}

