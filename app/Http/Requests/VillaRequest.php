<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VillaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'=>'required',
            'type_id'=>'required',
            'location_id'=>'required'
        ];
    }
    public function messages(){
        $rules =
            [ 'name.required' => 'villa is required',
              'location_id.required'=> 'id is required',
            ];
        return $rules;
    }
}

